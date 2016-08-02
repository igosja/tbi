<?php

class BrandController extends Controller
{
    public function actionIndex()
    {
        $o_brandpage = BrandPage::model()->findByPk(1);
        $this->setSEO($o_brandpage);
        $title = 'Бренды';
        $this->breadcrumbs = array(
            CHtml::decode($title)
        );
        $a_brand = Brand::model()->findAllByAttributes(array('status' => 1), array('order' => 'name'));
        $this->render('index', array(
            'title' => $title,
            'a_brand' => $a_brand,
        ));
    }

    public function actionView($id)
    {
        $o_brand = Brand::model()->findByAttributes(array('url' => $id));
        if (null === $o_brand) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->setSEO($o_brand);
        $this->breadcrumbs = array(
            'Бренды' => array('brand/index'),
            CHtml::decode($o_brand->name)
        );
        $a_product = Product::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`', 'limit' => 10));
        $this->render('view', array(
            'o_brand' => $o_brand,
            'a_product' => $a_product,
        ));
    }
}