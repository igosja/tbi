<?php

class SearchController extends Controller
{
    public function actionIndex()
    {
        $o_searchpage = SearchPage::model()->findByPk(1);
        $this->setSEO($o_searchpage);
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
        $this->render('index', array(
            'a_product' => $a_product,
            'title' => $title,
            'count_pages' => $count_pages,
            'count_product' => $count_product,
            'page' => $page,
            'name' => $name,
        ));
    }

    public function actionAjax()
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