<?php

class AccountController extends Controller
{
    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('deny',
                'users' => array('?'),
            ),
        );
    }

    public function actionIndex()
    {
        $o_accountpage = AccountPage::model()->findByPk(1);
        $this->setSEO($o_accountpage);
        $title = CHtml::decode('Мой профиль');
        $o_user = User::model()->findByPk(Yii::app()->user->id);
        $o_user->setScenario(User::SCENARIO_ACCOUNT);
        if ($data = Yii::app()->request->getPost('User')) {
            $o_user->attributes = $data;
            if ($o_user->save()) {
                $this->refresh();
            }
        }
        $this->breadcrumbs = array(
            $title
        );
        $a_country = Country::model()->findAllByAttributes(array('status' => 1), array('order' => 'name'));
        $a_region = Region::model()->findAllByAttributes(
            array('status' => 1, 'country_id' => $o_user->country_id),
            array('order' => 'name')
        );
        if (0 == count($a_region)) {
            $a_region = Region::model()->findAllByAttributes(
                array('status' => 1, 'country_id' => $a_country[0]->id),
                array('order' => 'name')
            );
        }
        $this->render('index', array(
            'title' => $title,
            'o_user' => $o_user,
            'a_country' => $a_country,
            'a_region' => $a_region,
        ));
    }

    public function actionRegion($id)
    {
        $id = (int) $id;
        $a_region = Region::model()->findAllByAttributes(
            array('status' => 1, 'country_id' => $id),
            array('order' => 'name')
        );
        $a_region = CHtml::listData($a_region, 'id', 'name');
        print json_encode($a_region);
        exit;
    }
}