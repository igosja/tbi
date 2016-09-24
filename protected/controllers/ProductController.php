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

    public function actionSearch()
    {
        $title = 'Поиск';
        $this->breadcrumbs = array(
            CHtml::decode($title)
        );
        if (!$page = Yii::app()->request->getQuery('page')) {
            $page = 1;
        };
        $on_page = 12;
        $offset = ($page - 1) * $on_page;
        $name = Yii::app()->request->getQuery('name');
        $o_product = new Product();
        $criteria = $o_product->getDbCriteria()->addSearchCondition('name', '%' . $name . '%', false);
        $criteria->limit = $on_page;
        $criteria->offset = $offset;
        $a_product = $o_product->findAll($criteria);
        $count_product = $o_product->count($criteria);
        $count_pages = ceil($count_product / $on_page);
        $this->render('search', array(
            'a_product' => $a_product,
            'title' => $title,
            'count_pages' => $count_pages,
            'count_product' => $count_product,
            'page' => $page,
            'name' => $name,
        ));
    }

    public function actionAjaxsearch()
    {
        if ($name = Yii::app()->request->getPost('name')) {
            $o_product = new Product();
            $criteria = $o_product->getDbCriteria()->addSearchCondition('name', '%' . $name . '%', false);
            $criteria->limit = 5;
            $a_product = $o_product->findAll($criteria);
            foreach ($a_product as $item) {
                $this->renderPartial('/include/product-item-ajaxsearch', array('item' => $item));
            }
        }
    }
}