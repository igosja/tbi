<?php

class CartController extends Controller
{
    public function actionIndex()
    {
        Cart::model()->deleteAll('`session_id`!=0 AND `date`<' . (time() - 86400));
        print Cart::model()->getCart();
    }

    public function actionAdd($id)
    {
        $product_id = (int)$id;
        $product_name = Yii::app()->request->getQuery('name');
        $quantity = Yii::app()->request->getQuery('quantity');
        $price = Yii::app()->request->getQuery('price');
        $o_product = Product::model()->findByPk($product_id);
        if (null === $o_product) {
            print json_encode(array('status' => 0));
            exit;
        }
        if (Yii::app()->user->isGuest) {
            $user_id = 0;
            $session_id = Yii::app()->getSession()->getSessionId();
        } else {
            $user_id = Yii::app()->user->id;
            $session_id = 0;
        }
        $o_cart = Cart::model()->findByAttributes(array('user_id' => $user_id, 'session_id' => $session_id));
        if (null === $o_cart) {
            $o_cart = new Cart();
            $o_cart->user_id = $user_id;
            $o_cart->session_id = $session_id;
            if (!$o_cart->save()) {
                print json_encode(array('status' => 0));
                exit;
            }
        }
        $o_cart_product = CartProduct::model()->findByAttributes(
            array('cart_id' => $o_cart->id, 'product_id' => $product_id, 'product_name' => $product_name, 'price' => $price)
        );
        if (null === $o_cart_product) {
            $o_cart_product = new CartProduct();
            $o_cart_product->cart_id = $o_cart->id;
            $o_cart_product->product_id = $product_id;
            $o_cart_product->product_name = $product_name;
            $o_cart_product->quantity = $quantity;
            $o_cart_product->price = $price;
            if (!$o_cart_product->save()) {
                print json_encode(array('status' => 0));
                exit;
            }
        } else {
            $o_cart_product->quantity = $o_cart_product->quantity + $quantity;
            if (!$o_cart_product->save()) {
                print json_encode(array('status' => 0));
                exit;
            }
        }
        $count = Cart::model()->countItems();
        print json_encode(array('status' => 1, 'count' => $count));
        exit;
    }

    public function actionQuantity($id)
    {
        $id = (int)$id;
        if ($quantity = Yii::app()->request->getQuery('quantity')) {
            $model = CartProduct::model()->findByPk($id);
            if (null !== $model) {
                $model->quantity = $quantity;
                $model->save();
            }
        }
    }

    public function actionRemove($id)
    {
        $id = (int)$id;
        $model = CartProduct::model()->findByPk($id);
        if (null !== $model) {
            $model->delete();
        }
    }
}