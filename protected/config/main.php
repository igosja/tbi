<?php

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