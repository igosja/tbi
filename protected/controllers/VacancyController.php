<?php

class VacancyController extends Controller
{
    public function actionIndex()
    {
        $o_vacancypage = VacancyPage::model()->findByPk(1);
        $this->setSEO($o_vacancypage);
        $a_vacancy = Vacancy::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $title = 'Вакансии';
        $this->breadcrumbs = array(
            $title,
        );
        $model = new Resume();
        if ($data = Yii::app()->request->getPost('Resume')) {
            $model->attributes = $data;
            if ($model->save()) {
                $this->uploadFile($model->id);
                Yii::app()->user->setFlash('resume_success', 'true');
                $this->refresh();
            }
        }
        $this->render('index', array(
            'title' => $title,
            'a_vacancy' => $a_vacancy,
            'o_vacancypage' => $o_vacancypage,
            'model' => $model,
        ));
    }

    public function uploadFile($id)
    {
        if (isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])) {
            $file = $_FILES['file'];
            $ext = $file['name'];
            $ext = explode('.', $ext);
            $ext = end($ext);
            if (in_array($ext, array('pdf', 'doc', 'docx'))) {
                $file = $file['tmp_name'];
                $file_url = ImageIgosja::put_file($file, $ext);
                $model = Resume::model()->findByPk($id);
                $model->file = $file_url;
                $model->save();
            }
        }
    }
}