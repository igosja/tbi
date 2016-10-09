<?php

class BlogController extends Controller
{
    public function actionIndex($id = '')
    {
        if (!$page = Yii::app()->request->getQuery('page')) {
            $page = 1;
        };
        $on_page = 4;
        $offset = ($page - 1) * $on_page;
        if ($id) {
            $o_blogcategory = BlogCategory::model()->findByAttributes(array('url' => $id));
            if (null === $o_blogcategory) {
                throw new CHttpException(404, 'Страница не найдена.');
            }
            $this->setSEO($o_blogcategory);
            $a_blog = Blog::model()->findAllByAttributes(
                array('status' => 1, 'blogcategory_id' => $o_blogcategory->id),
                array('order' => 'id DESC', 'limit' => $on_page, 'offset' => $offset)
            );
            $count_blog = Blog::model()->countByAttributes(
                array('status' => 1, 'blogcategory_id' => $o_blogcategory->id)
            );
            $title = $o_blogcategory->name;
            $this->breadcrumbs = array(
                'Блог' => array('blog/index'),
                $title,
            );
        } else {
            $o_blogpage = BlogPage::model()->findByPk(1);
            $this->setSEO($o_blogpage);
            $a_blog = Blog::model()->findAllByAttributes(
                array('status' => 1),
                array('order' => 'id DESC', 'limit' => $on_page, 'offset' => $offset)
            );
            $count_blog = Blog::model()->countByAttributes(array('status' => 1));
            $title = 'Блог';
            $this->breadcrumbs = array(
                $title,
            );
        }
        $a_blogcategory = BlogCategory::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $count_pages = ceil($count_blog / $on_page);
        $this->render('index', array(
            'title' => $title,
            'a_blog' => $a_blog,
            'a_blogcategory' => $a_blogcategory,
            'count_pages' => $count_pages,
            'count_blog' => $count_blog,
            'page' => $page,
            'id' => $id,
        ));
    }

    public function actionView($id)
    {
        $o_blog = Blog::model()->findByAttributes(array('url' => $id));
        if (null === $o_blog) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->setSEO($o_blog);
        $this->breadcrumbs = array(
            'Блог' => array('blog/index'),
        );
        if (isset($o_blog->blogcategory->url)) {
            $this->breadcrumbs = array(
                $o_blog->blogcategory->name => array('blog/index', 'id' => $o_blog->blogcategory->url),
            );
        }
        $this->breadcrumbs = array(
            CHtml::decode($o_blog->name)
        );
        $this->render('view', array(
            'o_blog' => $o_blog,
        ));
    }

    public function actionAjaxall($id = '')
    {
        if ($id) {
            $o_blogcategory = BlogCategory::model()->findByAttributes(array('url' => $id));
            if (null === $o_blogcategory) {
                throw new CHttpException(404, 'Страница не найдена.');
            }
            $a_blog = Blog::model()->findAllByAttributes(
                array('status' => 1, 'blogcategory_id' => $o_blogcategory->id),
                array('order' => 'id DESC')
            );
        } else {
            $a_blog = Blog::model()->findAllByAttributes(array('status' => 1), array('order' => 'id DESC'));
        }
        foreach ($a_blog as $item) {
            $this->renderPartial('/include/blog-item', array('item' => $item));
        }
    }

    public function actionAjaxmore($id = '')
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
            $count_blog = Blog::model()->countByAttributes(
                array('status' => 1, 'blogcategory_id' => $o_blogcategory->id)
            );
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