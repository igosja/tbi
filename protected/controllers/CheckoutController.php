<?php

class CheckoutController extends Controller
{
    const SHIPPING_COURIER = 1;
    const SHIPPING_NEWPOST = 2;
    const SHIPPING_PICKUP = 3;

    public function actionIndex()
    {
        if (0 == $this->count_cart) {
            $this->redirect(array('index/index'));
        }
        $model = new Checkout();
        if (!Yii::app()->user->isGuest) {
            $o_user = User::model()->findByPk(Yii::app()->user->id);
            $model->email = $o_user->email;
            $model->name = $o_user->name;
            $model->surname = $o_user->surname;
            $model->phone = $o_user->phone;
        }
        if ($data = Yii::app()->request->getPost('Checkout')) {
            $model->attributes = $data;
            if ($model->validate()) {
                $user_id = $this->getUserId($model);
                if (false != $user_id) {
                    $this->saveOrder($model, $user_id);
                }
                $this->subscribeUser($model);
            }
        }
        $o_checkoutpage = CheckoutPage::model()->findByPk(1);
        $this->setSEO($o_checkoutpage);
        $title = CHtml::decode('Оформить заказ');
        $this->breadcrumbs = array(
            $title
        );
        $a_payment = Payment::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $a_shipping = Shipping::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $a_pickup = Pickup::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $o_newpost = Newpost::model()->findByPk(1);
        $this->render('index', array(
            'title' => $title,
            'model' => $model,
            'a_payment' => $a_payment,
            'a_shipping' => $a_shipping,
            'a_pickup' => $a_pickup,
            'o_newpost' => $o_newpost,
        ));
    }

    public function getUserId($model)
    {
        if (Yii::app()->user->isGuest) {
            $o_user = new User;
            $o_user->setScenario(User::SCENARIO_SIGNUP);
            $o_user->name = $model->name;
            $o_user->surname = $model->surname;
            $o_user->email = $model->email;
            $o_user->password = User::model()->generatePassword();
            if ($o_user->save()) {
                $user_id = $o_user->id;
            } else {
                $user_id = false;
            }
        } else {
            $user_id = Yii::app()->user->id;
        }
        return $user_id;
    }

    public function saveOrder($model, $user_id)
    {
        $o_status = Status::model()->find('', array('order' => '`order`'));
        $o_order = new Order();
        $o_order->address = $this->getAddress($model);
        $o_order->email = $model->email;
        $o_order->message = $this->getMessage($model);
        $o_order->name = $model->name;
        $o_order->payment = $this->getPayment($model);
        $o_order->phone = $model->phone;
        $o_order->price = Cart::model()->getCartPrice();
        $o_order->shipping = $this->getShipping($model);;
        $o_order->status_id = $o_status->id;
        $o_order->surname = $model->surname;
        $o_order->user_id = $user_id;
        if ($o_order->save()) {
            $this->saveOrderProduct($o_order);
            $this->saveOrderStatus($o_order, $o_status);
            Cart::model()->deleteCart();
            Yii::app()->user->setFlash('checkout_success', 'true');
            $this->redirect('/');
        }
    }

    public function saveOrderProduct($o_order)
    {
        $a_product = Cart::model()->getCartProductList();
        foreach ($a_product as $item) {
            $o_orderproduct = new OrderProduct();
            $o_orderproduct->order_id = $o_order->id;
            $o_orderproduct->price = $item->price;
            $o_orderproduct->product_id = $item->product_id;
            $o_orderproduct->product_name = $item->product_name;
            $o_orderproduct->quantity = $item->quantity;
            $o_orderproduct->save();
        }
    }

    public function saveOrderStatus($o_order, $o_status)
    {
        $o_orderstatus = new OrderStatus();
        $o_orderstatus->order_id = $o_order->id;
        $o_orderstatus->status = $o_status->name;
        $o_orderstatus->save();
    }

    public function subscribeUser($model)
    {
        if (1 == $model->subscribe) {
            $o_subscribe = Subscribe::model()->findByAttributes(array('email' => $model->email));
            if (null !== $o_subscribe) {
                $o_subscribe->status = 1;
                $o_subscribe->save();
            } else {
                $o_subscribe = new Subscribe();
                $o_subscribe->email = $model->email;
                $o_subscribe->save();
            }
        }
    }

    public function getAddress($model)
    {
        $address = 'Не указан';
        if (self::SHIPPING_COURIER == $model->shipping_id) {
            $address = $model->kyiv_address;
        } elseif (self::SHIPPING_NEWPOST == $model->shipping_id) {
            $address = 'Город - ' . $model->post_city;
            $address = $address . 'Отделение - ' . $model->post_warehouse;
            if (1 == $model->post_to_door) {
                $address = $address . 'Адресная доставка - ' . $model->post_address;
            }
        } elseif (self::SHIPPING_PICKUP == $model->shipping_id) {
            $o_pickup = Pickup::model()->findByPk($model->pickup_id);
            if (null !== $o_pickup) {
                $address = $o_pickup->address;
            }
        }
        return $address;
    }

    public function getMessage($model)
    {
        $message = '';
        if (self::SHIPPING_COURIER == $model->shipping_id) {
            $message = $model->kyiv_message;
        } elseif (self::SHIPPING_PICKUP == $model->shipping_id) {
            $message = $model->pickup_message;
        }
        return $message;
    }

    public function getPayment($model)
    {
        $payment = 'Не указан';
        $o_payment = Payment::model()->findByPk($model->payment_id);
        if (null !== $o_payment) {
            $payment = $o_payment->name;
        }
        return $payment;
    }

    public function getShipping($model)
    {
        $shipping = 'Не указан';
        $o_shipping = Shipping::model()->findByPk($model->shipping_id);
        if (null !== $o_shipping) {
            $shipping = $o_shipping->name;
        }
        return $shipping;
    }
}