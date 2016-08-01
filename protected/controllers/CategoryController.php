<?php

class CategoryController extends Controller
{
    public function actionView($id)
    {
        $o_category = Category::model()->findByAttributes(array('url' => $id));
        if (null === $o_category) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->setSEO($o_category);
        $a_product = Product::model()->findAllByAttributes(
            array('category_id' => $o_category->id, 'status' => 1),
            array('order' => '`order`', 'limit' => 12)
        );
        $this->breadcrumbs = array(
            'Наши товары' => array('shop/index'),
            CHtml::decode($o_category->name)
        );
        $this->render('view', array(
            'o_category' => $o_category,
            'a_product' => $a_product,
        ));
    }
}