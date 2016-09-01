<?php

class ProductController extends AController
{
    public $h1 = 'Товары';
    public $title = 'Товары';
    public $model_name = 'Product';

    public function actionIndex()
    {
        $model = $this->getModel('search');
        $model->dbCriteria->order = '`order` ASC';
        $model->unsetAttributes();
        if (isset($_GET[$this->model_name])) {
            $model->attributes = $_GET[$this->model_name];
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
            'Список',
        );
        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id = 0)
    {
        $id = (int)$id;
        if (0 == $id) {
            $this->h1 = 'Создание товара';
            $model = $this->getModel();
        } else {
            $this->h1 = 'Редактирование товара';
            $model = $this->getModel()->findByPk($id);
            if (null === $model) {
                throw new CHttpException(404, 'Страница не найдена.');
            }
        }
        if ($data = Yii::app()->request->getPost($this->model_name)) {
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
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $model->delete();
        $this->redirect(array('index'));
    }

    public function actionOrder($id)
    {
        $id = (int)$id;
        $order_old = $_GET['order_old'];
        $order_new = $_GET['order_new'];
        $this->getModel()->updateByPk($id, array('order' => $order_new));
        if ($order_old < $order_new) {
            $a_model = $this->getModel()->findAll(array('condition' => '`order`>=' . $order_old . ' AND `order`<=' . $order_new . ' AND id!=' . $id));
            foreach ($a_model as $model) {
                $model->order--;
                $model->save();
            }
        } else {
            $a_model = $this->getModel()->findAll(array('condition' => '`order`<=' . $order_old . ' AND `order`>=' . $order_new . ' AND id!=' . $id));
            foreach ($a_model as $model) {
                $model->order++;
                $model->save();
            }
        }
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
        if (isset($_FILES['image']['name'][0]) && !empty($_FILES['image']['name'][0])) {
            $image = $_FILES['image'];
            for ($i = 0, $count_image = count($image['name']); $i < $count_image; $i++) {
                $ext = $image['name'][$i];
                $ext = explode('.', $ext);
                $ext = end($ext);
                if (in_array($ext, array('jpg', 'jpeg', 'gif', 'png'))) {
                    $file = $image['tmp_name'][$i];
                    $image_url = ImageIgosja::put_file($file, $ext);
                    $o_image = new Image();
                    $o_image->url = $image_url;
                    $o_image->save();
                    $image_id = $o_image->id;
                    $o_product_image = new ProductImage();
                    $o_product_image->image_id = $image_id;
                    $o_product_image->product_id = $id;
                    $o_product_image->save();
                }
            }
        }
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }

    public function actionOption($id)
    {
        print '<div class="form-inline">'
            . CHtml::textField('option[' . $id . '][name][]', '', array('class' => 'form-control')) . ' '
            . CHtml::dropDownList(
                'option[0][plus][]',
                '',
                array('1' => '+', '0' => '-', '2' => '='),
                array('class' => 'form-control')
            ) . ' '
            . CHtml::textField('option[0][price][]', '', array('class' => 'form-control'))
            . ' грн.</div>';
        exit;
    }
}
