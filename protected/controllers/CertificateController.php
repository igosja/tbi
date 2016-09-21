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

    public function actionAjax($id)
    {
        $o_product = Product::model()->findByPk($id);
        if ($o_product) {
            $select = '';
            foreach ($o_product->option as $item) {
                $select = $select . '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
            $description = $o_product->text;
            $rules = $o_product->rules;
            print json_encode(array('select' => $select, 'description' => $description, 'rules' => $rules));
            exit;
        }
    }
}