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
        $count_brand = count($a_brand);
        $count_col = ceil($count_brand / 4);
        $first_start = 0;
        $first_end = $count_col - 1;
        $second_start = $count_col;
        $second_end = $count_col * 2 - 1;
        $third_start = $count_col * 2;
        $third_end = $count_col * 3 - 1;
        $fourth_start = $count_col * 3;
        $fourth_end = $count_brand - 1;
        $this->render('index', array(
            'title' => $title,
            'a_brand' => $a_brand,
            'count_brand' => $count_brand,
            'first_start' => $first_start,
            'first_end' => $first_end,
            'second_start' => $second_start,
            'second_end' => $second_end,
            'third_start' => $third_start,
            'third_end' => $third_end,
            'fourth_start' => $fourth_start,
            'fourth_end' => $fourth_end,
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