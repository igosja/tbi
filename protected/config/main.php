<?php

return array(
    'defaultController' => 'index',
    'language'=>'ru',
    'sourceLanguage'=>'ru',
    'timeZone' => 'UTC',

    'import'=>array(
        'application.models.*',
        'application.components.*',
    ),

    'components' => array(
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName'=>false,
            'rules' => array(
                'gii' => 'gii',
                'gii/<controller:\w+>' => 'gii/<controller>',
                'gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',
                '<module>/<controller>/<action>/<id>' => '<module>/<controller>/<action>',
                '<module>/<controller>/<action>' => '<module>/<controller>/<action>',
                '<module>/<controller>' => '<module>/<controller>',
                '<controller>/<action>/<id>' => '<controller>/<action>',
                '<controller>/<action>' => '<controller>/<action>',
                '<controller>' => '<controller>/index',
                '<module>' => '<module>/index',
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