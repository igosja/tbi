<?php

class CategoryController extends Controller
{
    public function actionView($id)
    {
        if (!$page = Yii::app()->request->getQuery('page')) {
            $page = 1;
        };
        $on_page = 12;
        $offset = ($page - 1) * $on_page;
        $order = Yii::app()->request->getQuery('order', 'order');
        $asc = Yii::app()->request->getQuery('asc', 1);
        if ($asc) {
            $asc = 'ASC';
        } else {
            $asc = 'DESC';
        }
        $o_category = Category::model()->findByAttributes(array('url' => $id));
        if (null === $o_category) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->setSEO($o_category);
        $a_product = Product::model()->findAllByAttributes(
            array('category_id' => $o_category->id, 'status' => 1),
            array('order' => '`' . $order . '` ' . $asc, 'limit' => $on_page, 'offset' => $offset)
        );
        $count_product = Product::model()->countByAttributes(array('status' => 1, 'category_id' => $o_category->id));
        $count_pages = ceil($count_product / $on_page);
        $this->breadcrumbs = array(
            'Наши товары' => array('shop/index'),
            CHtml::decode($o_category->name)
        );
        $a_sort_link = array();
        for ($i = 0; $i < 6; $i++) {
            if (0 == $i) {
                $link_text = 'Новые и популярные';
                $link_order = 'order';
            } elseif (1 == $i) {
                $link_text = 'В наличии';
                $link_order = 'in_stock';
            } elseif (2 == $i) {
                $link_text = 'Хиты продаж';
                $link_order = 'sales';
            } elseif (3 == $i) {
                $link_text = 'Цена';
                $link_order = 'price';
            } elseif (4 == $i) {
                $link_text = 'Название';
                $link_order = 'name';
            } else {
                $link_text = 'Дата добавления';
                $link_order = 'date';
            }
            $a_sort_link[] = array(
                'class' => ($link_order == $order ? 'current' : ''),
                'text' => $link_text,
                'order' => $link_order,
                'asc' => (($link_order == $order && 'ASC' == $asc) ? 0 : 1),
            );
        }
        $this->render('view', array(
            'o_category' => $o_category,
            'a_product' => $a_product,
            'a_sort_link' => $a_sort_link,
            'count_pages' => $count_pages,
            'count_product' => $count_product,
            'page' => $page,
            'id' => $id,
            'order' => $order,
            'asc' => $asc,
        ));
    }

    public function actionViewchange($id)
    {
        Yii::app()->session['product-view'] = Yii::app()->request->getQuery('view');
        $this->redirect(array('category/view', 'id' => $id));
    }

    public function actionAjaxall($id)
    {
        $order = Yii::app()->request->getQuery('order');
        $asc = Yii::app()->request->getQuery('asc');
        $o_category = Category::model()->findByAttributes(array('url' => $id));
        if (null === $o_category) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $a_product = Product::model()->findAllByAttributes(
            array('category_id' => $o_category->id, 'status' => 1),
            array('order' => '`' . $order . '` ' . $asc)
        );
        foreach ($a_product as $item) {
            $this->renderPartial('/include/product-item-' . Yii::app()->session['product-view'], array('item' => $item));
        }
    }

    public function actionAjaxmore($id)
    {
        if (!$page = Yii::app()->request->getQuery('page')) {
            $page = 1;
        };
        $page++;
        $on_page = 12;
        $offset = ($page - 1) * $on_page;
        $order = Yii::app()->request->getQuery('order');
        $asc = Yii::app()->request->getQuery('asc');
        $o_category = Category::model()->findByAttributes(array('url' => $id));
        if (null === $o_category) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $a_product = Product::model()->findAllByAttributes(
            array('status' => 1, 'category_id' => $o_category->id),
            array('order' => '`' . $order . '` ' . $asc, 'limit' => $on_page, 'offset' => $offset)
        );
        $count_product = Product::model()->countByAttributes(array('status' => 1, 'category_id' => $o_category->id));
        $count_pages = ceil($count_product / $on_page);
        foreach ($a_product as $item) {
            $this->renderPartial('/include/product-item-' . Yii::app()->session['product-view'], array('item' => $item));
        }
        print '<span id="product-info" style="display:none;" data-count="' . $count_pages . '"></span>';
    }

    public function actionAjaxmore1($id)
    {
        if (!$page = Yii::app()->request->getQuery('page')) {
            $page = 1;
        };
        $page++;
        $on_page = 4;
        $offset = ($page - 1) * $on_page;
        if ($id) {
            $o_blogcategory = BlogCategory::model()->findByAttributes(array('url' => $id));
            if (null === $o_blogcategory) {
                throw new CHttpException(404, 'Страница не найдена.');
            }
            $a_blog = Blog::model()->findAllByAttributes(
                array('status' => 1, 'blogcategory_id' => $o_blogcategory->id),
                array('order' => 'id DESC', 'limit' => $on_page, 'offset' => $offset)
            );
            $count_blog = Blog::model()->countByAttributes(array('status' => 1, 'blogcategory_id' => $o_blogcategory->id));
        } else {
            $a_blog = Blog::model()->findAllByAttributes(
                array('status' => 1),
                array('order' => 'id DESC', 'limit' => $on_page, 'offset' => $offset)
            );
            $count_blog = Blog::model()->countByAttributes(array('status' => 1));
        }
        $count_pages = ceil($count_blog / $on_page);
        foreach ($a_blog as $item) {
            $this->renderPartial('/include/blog-item', array('item' => $item));
        }
        print '<span id="blog-info" style="display:none;" data-count="' . $count_pages . '"></span>';
    }
}