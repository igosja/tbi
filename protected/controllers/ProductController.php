<?php

class ProductController extends Controller
{
    public function actionView($id)
    {
        $o_product = Product::model()->findByAttributes(array('url' => $id));
        if (null === $o_product) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->setSEO($o_product);
        $this->breadcrumbs = array(
            'Наши товары' => array('shop/index'),
            $o_product->category->name => array('category/view', 'id' => $o_product->category->url),
            CHtml::decode($o_product->name)
        );
        $this->render('view_' . $o_product->view->view, array(
            'o_product' => $o_product,
        ));
    }
}