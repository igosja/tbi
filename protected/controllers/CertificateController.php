<?php

class CertificateController extends Controller
{
    public function actionIndex()
    {
        $o_certificatepage = CertificatePage::model()->findByPk(1);
        $this->setSEO($o_certificatepage);
        $title = $o_certificatepage->name;
        $this->breadcrumbs = array(
            $title,
        );
        $a_product = Product::model()->findAllByAttributes(array('category_id' => 6));
        $this->render('index', array(
            'title' => $title,
            'o_certificatepage' => $o_certificatepage,
            'a_product' => $a_product,
        ));
    }
}