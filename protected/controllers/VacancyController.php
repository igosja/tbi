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
        $this->render('index', array(
            'title' => $title,
            'a_vacancy' => $a_vacancy,
            'o_vacancypage' => $o_vacancypage,
        ));
    }
}