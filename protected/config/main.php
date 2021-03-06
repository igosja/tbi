<?php
//www.tbi.ua@gmail.com
return array(
    'defaultController' => 'index',
    'language' => 'ru',
    'sourceLanguage' => 'ru',
    'timeZone' => 'UTC',
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'components' => array(
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                'gii' => 'gii',
                'gii/<controller:\w+>' => 'gii/<controller>',
                'gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',
                'admin/<controller>/<action>/<id>' => 'admin/<controller>/<action>',
                'admin/<controller>/<action>' => 'admin/<controller>/<action>',
                'admin/<controller>' => 'admin/<controller>',
                'admin' => 'admin/index',
                'aboutus' => 'aboutus/index',
                'brand' => 'brand/index',
                'brand/<id>' => 'brand/view',
                'shop' => 'shop/index',
                'service' => 'service/index',
                'cooperation' => 'cooperation/index',
                'contacts' => 'contacts/index',
                'vacancy' => 'vacancy/index',
                'faq' => 'faq/index',
                'certificate' => 'certificate/index',
                'payment' => 'payment/index',
                'delivery' => 'delivery/index',
                'warranty' => 'warranty/index',
                'share' => 'share/index',
                'outlet' => 'outlet/index',
                'catalog' => 'catalog/index',
                'condition' => 'condition/index',
                'account' => 'account/index',
                'blog/category/<id>' => 'blog/index',
                'blog' => 'blog/index',
                'blog/<id>' => 'blog/view',
                'search' => 'search/index',
                'product/<id>' => 'product/view',
                'category/<id>' => 'category/view',
                '<controller>/<action>/<id>' => '<controller>/<action>',
                '<controller>/<action>' => '<controller>/<action>',
                '<controller>' => '<controller>/index',
            ),
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=igosja_tbi',
            'emulatePrepare' => true,
            'username' => 'igosja_tbi',
            'password' => 'jorodus-',
            'charset' => 'utf8',
        ),
    ),
    'modules' => array(
        'admin',
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123',
        ),
    ),
);