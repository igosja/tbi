<?php

class ProductController extends Controller
{
    public function actionView($id)
    {
        $o_product = Product::model()->findByAttributes(array('url' => $id));
        if (null === $o_product) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $a_application = Application::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $this->setSEO($o_product);
        $this->breadcrumbs = array(
            'Наши товары' => array('shop/index'),
        );
        if (isset($o_product->category->url)) {
            $this->breadcrumbs = array(
                $o_product->category->name => array('category/view', 'id' => $o_product->category->url),
            );
        }
        $this->breadcrumbs = array(
            CHtml::decode($o_product->name)
        );
        $this->render('view_' . $o_product->view->view, array(
            'o_product' => $o_product,
            'a_application' => $a_application,
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