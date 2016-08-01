<?php

class ShopController extends Controller
{
    public function actionIndex()
    {
        $o_shoppage = ShopPage::model()->findByPk(1);
        $this->setSEO($o_shoppage);
        $a_category = Category::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $title = 'Наши товары';
        $this->breadcrumbs = array(
            $title,
        );
        $this->render('index', array(
            'title' => $title,
            'a_category' => $a_category,
        ));
    }
}