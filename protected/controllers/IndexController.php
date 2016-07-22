<?php

class IndexController extends Controller
{
    public function actionIndex()
    {
        $o_mainpage = MainPage::model()->findByPk(1);
        $this->setSEO($o_mainpage);
        $a_brand = Brand::model()->findAllByAttributes(array('status' => 1), array('order' => 'name'));
        $a_blog = Blog::model()->findAllByAttributes(array('status' => 1), array('order' => 'id DESC', 'limit' => 3));
        $this->render('index', array(
            'o_mainpage' => $o_mainpage,
            'a_brand' => $a_brand,
            'a_blog' => $a_blog,
        ));
    }
}