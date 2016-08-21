<?php

return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=igosja_tbi',
            'emulatePrepare' => true,
            'username' => 'igosja_tbi',
            'password' => 'jorodus-',
            'charset' => 'utf8',
        ),
    ),
);