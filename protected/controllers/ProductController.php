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

    public function actionReview($id)
    {
        if ($data = Yii::app()->request->getPost('data')) {
            $o_review = new Review();
            $o_review->product_id = $id;
            $o_review->attributes = $data;
            $o_review->save();
        }
        $o_product = Product::model()->findByPk($id);
        $this->renderPartial('/include/review_list', array('o_product' => $o_product));
    }
}