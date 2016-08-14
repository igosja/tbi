<?php

class Cart extends CActiveRecord
{
    public function rules()
    {
        return array(
            array('date, user_id', 'numerical', 'integerOnly' => true),
            array('session_id', 'safe'),
        );
    }

    public function relations()
    {
        return array(
            'product' => array(self::HAS_MANY, 'CartProduct', array('cart_id' => 'id')),
            'user' => array(self::HAS_ONE, 'User', array('id' => 'user_id')),
        );
    }

    protected function beforeSave()
    {
        if (parent::beforeSave()) {
            if ($this->isNewRecord) {
                $this->date = time();
            }
            return true;
        }
        return false;
    }

    public function countItems()
    {
        if (Yii::app()->user->isGuest) {
            $user_id = 0;
            $session_id = Yii::app()->getSession()->getSessionId();
        } else {
            $user_id = Yii::app()->user->id;
            $session_id = 0;
        }
        $o_cart = self::model()->findByAttributes(array('user_id' => $user_id, 'session_id' => $session_id));
        if (null === $o_cart) {
            return 0;
        }
        $count = CartProduct::model()->countByAttributes(array('cart_id' => $o_cart->id));
        return $count;
    }

    public function moveToUser($user_id)
    {
        $session_id = Yii::app()->getSession()->getSessionId();
        $o_cart = self::model()->findByAttributes(array('user_id' => 0, 'session_id' => $session_id));
        if (null === $o_cart) {
            return true;
        }
        self::model()->updateByPk($o_cart->id, array('user_id' => $user_id, 'session_id' => 0));
        return true;
    }

    public function getCart()
    {
        if (Yii::app()->user->isGuest) {
            $user_id = 0;
            $session_id = Yii::app()->getSession()->getSessionId();
        } else {
            $user_id = Yii::app()->user->id;
            $session_id = 0;
        }
        $product = array();
        $total = 0;
        $o_cart = Cart::model()->findByAttributes(array('user_id' => $user_id, 'session_id' => $session_id));
        if (null === $o_cart) {
            return json_encode(array('product' => $product, 'total' => $total . ' UAH'));
        }
        $a_product = CartProduct::model()->findAllByAttributes(array('cart_id' => $o_cart->id));
        foreach ($a_product as $item) {
            $product[] = array(
                'id' => $item->id,
                'name' => $item->product->name,
                'price' => $item->product->price * $item->quantity,
                'quantity' => $item->quantity,
                'url' => CHtml::normalizeUrl(array('product/view', 'id' => $item->product->url)),
            );
            $total = $total + $item->product->price * $item->quantity;
        }
        return json_encode(array('product' => $product, 'total' => $total . ' UAH'));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}