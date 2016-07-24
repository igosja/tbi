<?php

class BlogController extends AController
{
    public $h1 = 'Публикации';
    public $title = 'Публикации';
    public $post_name = 'Blog';

    public function actionIndex()
    {
        $model = $this->getModel('search');
        $model->unsetAttributes();
        if (isset($_GET[$this->post_name])) {
            $model->attributes = $_GET[$this->post_name];
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
            'Список',
        );
        $this->render('index', array(
            'model' => $model,
            'controller' => $controller,
        ));
    }

    public function actionUpdate($id = 0)
    {
        $id = (int)$id;
        if (0 == $id) {
            $this->h1 = 'Создание публикации';
            $model = $this->getModel();
        } else {
            $this->h1 = 'Редактирование публикации';
            $model = $this->getModel()->findByPk($id);
            if (null === $model) {
                throw new CHttpException(404, 'Страница не найдена.');
            }
        }
        if ($data = Yii::app()->request->getPost($this->post_name)) {
            $model->attributes = $data;
            if ($model->save()) {
                $model = $this->getModel()->findByPk($model->id);
                if (empty($model->url)) {
                    $model->url = strtolower($model->id . '-' . str_replace($this->rus, $this->lat, $model->name));
                    $model->save();
                }
                $this->uploadImage($model->id);
                $this->redirect(array('view', 'id' => $model->id));
            }
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
        );
        if (0 != $id) {
            $this->breadcrumbs[$model->name] = array('view', 'id' => $model->id);
        }
        $this->breadcrumbs[] = $this->h1;
        $this->render('form', array('model' => $model));
    }

    public function actionView($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->h1 = $model->name;
        $this->breadcrumbs = array(
            $this->title => array('index'),
            $this->h1,
        );
        $this->render('view', array('model' => $model));
    }

    public function actionDelete($id)
    {
        $model = $this->getModel()->findByPk($id);
        $model->delete();
        $this->redirect(array('index'));
    }

    public function actionStatus($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->getModel()->updateByPk($id, array('status' => 1 - $model->status));
    }

    public function actionImage($id)
    {
        $o_image = Image::model()->findByPk($id);
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_image->url)) {
            unlink($_SERVER['DOCUMENT_ROOT'] . $o_image->url);
        }
        $o_image->delete();
        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function uploadImage($id)
    {
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $image = $_FILES['image'];
            $ext = $image['name'];
            $ext = explode('.', $ext);
            $ext = end($ext);
            if (in_array($ext, array('jpg', 'jpeg', 'gif', 'png'))) {
                $file = $image['tmp_name'];
                $image_url = ImageIgosja::put_file($file, $ext);
                $o_image = new Image();
                $o_image->url = $image_url;
                $o_image->save();
                $image_id = $o_image->id;
                $model = $this->getModel()->findByPk($id);
                $model->image_id = $image_id;
                $model->save();
            }
        }
    }

    public function getModel($search = '')
    {
        $model = new Blog($search);
        return $model;
    }
}
