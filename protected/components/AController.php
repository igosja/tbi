<?php

class AController extends CController
{
    public $breadcrumbs = array();
    public $call = 0;
    public $cart = 0;
    public $lat = array('a', 'b', 'v', 'g', 'd', 'e', 'e', 'e', 'gh', 'z', 'i', 'i', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'e', 'gh', 'z', 'i', 'i', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', '_', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
    public $layout = 'main';
    public $menu = array();
    public $message = 0;
    public $notification = 0;
    public $resume = 0;
    public $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Є', 'Ё', 'Ж', 'З', 'И', 'І', 'Ї', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'є', 'ё', 'ж', 'з', 'и', 'і', 'ї', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', ' ', '(', ')', ',', '.', ':', ';', '"', "'", '!', '@', '#', '$', '%', '^', '&', '*', '-', '=', '+', '<', '>', '\\', '|', '№', '/', '`', '~');

    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('deny',
                'users' => array('?'),
            ),
        );
    }
    
    public function init()
    {
        $clientScript = Yii::app()->getClientScript();
        $clientScript->scriptMap = array(
           'jquery.js'=>false,
        );
        $this->call = Call::model()->countByAttributes(array('status' => 0));
        $o_status = Status::model()->find('', array('order' => '`order`'));
        if (null !== $o_status) {
            $this->cart = Order::model()->countByAttributes(array('status_id' => $o_status->id));
        }
        $this->message = Message::model()->countByAttributes(array('status' => 0));
        $this->resume = Resume::model()->countByAttributes(array('status' => 0));
        $this->notification = $this->call + $this->message + $this->resume;
    }
}