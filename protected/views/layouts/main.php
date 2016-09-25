<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="cache-control" content="max-age=86400">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=1260">
    <meta name="p:domain_verify" content="e2f098dcc8774e0ba7df70e2dba39d27"/>
    <meta name="google-site-verification" content="1tZDe5lIeTnoLqSvQWJY26R2XkfhOuYZpkJbO0lUiBU"/>
    <script src="/js/jquery.js"></script>
    <title><?= $this->seo_title; ?></title>
    <meta name="description" content="<?= $this->seo_description; ?>">
    <meta name="keywords" content="<?= $this->seo_keywords; ?>">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/normalize.min.css">
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="/css/new_style.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/new-styles.css">
</head>
<body>
<script src="https://apis.google.com/js/platform.js" async defer>
    {
        lang: 'ru'
    }
</script>
<div id="fb-root"></div>
<script src="/js/facebook.js" type="text/javascript"></script>
<script src="/js/twitter.js" type="text/javascript"></script>
<div class="sitewrap">
    <?= $this->renderPartial('/include/seo-text'); ?>
    <header>
        <div class="wrap">
            <div class="hleft">
                <?= CHtml::link(
                    $this->office_address,
                    array('contacts/index'),
                    array('class' => 'haddr')
                ); ?>
                <div class="hphones">
                    <a href="javascript:;" class="hphone"><?= $this->office_phone; ?></a>
                    <span>•</span>
                    <a href="javascript:;" class="hphone"><?= $this->salon_phone; ?></a>
                </div>
                <a
                    href="javascript:;"
                    data-selector="form-sendEmail"
                    class="callrequest overlayElementTrigger"
                    title="Заказать звонок"
                >Заказать звонок</a>
            </div>
            <a href="/" class="logo"><img src="/img/logo.png" alt=""></a>
            <div class="hright">
                <div class="user-functions">
                    <?php if (Yii::app()->user->isGuest) { ?>
                        <a href="javascript:;" class="overlayElementTrigger" data-selector="form-signIn" title="Вход">Вход</a>
                        <a href="javascript:;" class="overlayElementTrigger" data-selector="form-signUp"
                           title="Регистрация">Регистрация</a>
                    <?php } else { ?>
                        <?= CHtml::link(
                            'Личный кабинет',
                            array('account/index'),
                            array('title' => 'Личный кабинет')
                        ); ?>
                        <?= CHtml::link(
                            'Выход',
                            array('site/logout'),
                            array('title' => 'Выход')
                        ); ?>
                    <?php } ?>
                </div>
                <div class="hsearch">
                    <form action="<?= $this->createUrl('search/index'); ?>">
                        <input name="name" type="search" placeholder="Поиск..." id="search-input">
                        <input type="submit">
                    </form>
                    <div
                        class="autocomplete-suggestions"
                        style="display:none; position: absolute; max-height: 700px; width: 250px; z-index: 9999; top: 30; left: 0;"
                    >
                    </div>
                </div>
                <div class="hcurrency">
                    <select id="currency">
                        <?php foreach ($this->a_currency as $item) { ?>
                            <option
                                value="<?= $item->id; ?>"
                                <?php if ($this->currency == $item->id) { ?>
                                    selected
                                <?php } ?>
                            >
                                <?= $item->name; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <div class="wrap clearfix">
            <div class="navleft">
                <ul>
                    <li><?= CHtml::link('О компании', array('aboutus/index'), array('title' => 'О компании')); ?></li>
                    <li><?= CHtml::link('Блог', array('blog/index'), array('title' => 'Блог')); ?></li>
                    <li>
                        <?= CHtml::link('Наши товары', array('shop/index'), array('title' => 'Наши товары')); ?>
                        <div class="first-m">
                            <div class="wrap">
                                <ul class="clearfix">
                                    <?php foreach ($this->menu as $item) { ?>
                                        <li>
                                            <?= CHtml::link(
                                                $item->name,
                                                array('category/view', 'id' => $item->url),
                                                array('title' => $item->name, 'class' => 'has-c')
                                            ); ?>
                                            <div class="second-m">
                                                <div class="wrap clearfix">
                                                    <div class="secon-m__left">
                                                        <div class="clearfix">
                                                        </div>
                                                    </div>
                                                    <div class="secon-m__right">
                                                        <img
                                                            src="<?= ImageIgosja::resize($item->image_id, 380, 380); ?>"
                                                            alt=""/>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><?= CHtml::link('Услуги', array('service/index'), array('title' => 'Услуги')); ?></li>
                    <li><?= CHtml::link('Сотрудничество', array('cooperation/index'), array('title' => 'Сотрудничество')); ?></li>
                    <li><?= CHtml::link('Контакты', array('contacts/index'), array('title' => 'Контакты')); ?></li>
                </ul>
            </div>
            <div class="navright">
                <a
                    class="navcart <?php if (0 == $this->count_cart) { ?>empty<?php } ?>"
                    href="javascript:;"
                    title="<?= $this->count_cart; ?>"
                >
                    <span><?= $this->count_cart; ?></span>
                </a>
            </div>
            <a href="javascript:;" class="compare-block" id="compare-leash"
               <?php if (1) { ?>style="display:none;"<?php } ?> title="Сравнить товары">Сравнить товары</a>
        </div>
    </nav>
    <?= $content; ?>
    <section class="footernav">
        <div class="wrap clearfix">
            <div class="fn-left clearfix">
                <div class="fn-list">
                    <strong>КОМПАНИЯ</strong>
                    <ul>
                        <li><?= CHtml::link('О компании', array('aboutus/index'), array('title' => 'О компании')); ?></li>
                        <li><?= CHtml::link('Сотрудничество', array('cooperation/index'), array('title' => 'Сотрудничество')); ?></li>
                        <li><?= CHtml::link('Вакансии', array('vacancy/index'), array('title' => 'Вакансии')); ?></li>
                        <li><?= CHtml::link('Контакты', array('contacts/index'), array('title' => 'Контакты')); ?></li>
                    </ul>
                </div>
                <div class="fn-list">
                    <strong>ПОКУПАТЕЛЮ</strong>
                    <ul>
                        <li><?= CHtml::link('ЧаВо', array('faq/index'), array('title' => 'ЧаВо')); ?></li>
                        <li><?= CHtml::link('Подрарочные сертификаты', array('certificate/index'), array('title' => 'Подрарочные сертификаты')); ?></li>
                        <li><?= CHtml::link('Наши услуги', array('service/index'), array('title' => 'Наши услуги')); ?></li>
                        <li><?= CHtml::link('Оплата', array('payment/index'), array('title' => 'Оплата')); ?></li>
                        <li><?= CHtml::link('Доставка', array('delivery/index'), array('title' => 'Доставка')); ?></li>
                        <li><?= CHtml::link('Гарантии', array('warranty/index'), array('title' => 'Гарантии')); ?></li>
                        <li><a href="http://www.vogueinteriors.ua" title="Шоу-рум" rel="nofollow">Шоу-рум</a></li>
                    </ul>
                </div>
                <div class="fn-list">
                    <strong>ИНФОРМАЦИЯ</strong>
                    <ul>
                        <li><?= CHtml::link('Акции и предложения', array('share/index'), array('title' => 'Акции и предложения')); ?></li>
                        <li><?= CHtml::link('Outlet', array('outlet/index'), array('title' => 'Outlet')); ?></li>
                        <li><?= CHtml::link('Каталоги', array('catalog/index'), array('title' => 'Каталоги')); ?></li>
                        <li><?= CHtml::link('Условия использования сайта', array('condition/index'), array('title' => 'Условия использования сайта')); ?></li>
                    </ul>
                </div>
            </div>
            <div class="fn-right">
                <div class="fnr-top clearfix">
                    <div class="fnr-left">
                        <div class="fnr-name"><?= $this->contacts->office_name; ?></div>
                        <div class="fnr-addr"><?= $this->office_address; ?></div>
                        <a href="javascript:;" class="fnr-phone"><?= $this->office_phone; ?></a>
                    </div>
                    <div class="fnr-right">
                        <div class="fnr-name"><?= $this->contacts->salon_name; ?></div>
                        <div class="fnr-addr"><?= $this->salon_address; ?></div>
                        <a href="javascript:;" class="fnr-phone"><?= $this->salon_phone; ?></a>
                    </div>
                </div>
                <div class="fnr-bottom">
                    <span>Наши сайты в сети:</span>
                    <div>
                        <a href="http://mottura.ua" target="_blank">
                            <img src="/img/mottura.png" alt="" rel="nofollow">
                        </a>
                        <a href="http://giorgiograesan.ua" target="_blank">
                            <img src="/img/giorgio.png" alt="" rel="nofollow">
                        </a>
                        <a href="http://novacolor.ua" target="_blank">
                            <img src="/img/novacolor.png" alt="" rel="nofollow">
                        </a>
                        <a href="http://vogueinteriors.ua" target="_blank">
                            <img src="/img/vogue.png" alt="" rel="nofollow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="wrap clearfix">
            <div class="copy">© 2006–<?= date('Y'); ?> «TBI» Все права защищены</div>
            <div class="fsubscribe">
                <span>Рассылка новостей:</span>
                <div class="fsubscribe-input">
                    <?php $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'subscribe-form',
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => false,
                    )); ?>
                    <?= $form->emailField(
                        $this->model_subscribe,
                        'email',
                        array('placeholder' => $this->model_subscribe->getAttributeLabel('email'))
                    ); ?>
                    <?= CHtml::ajaxSubmitButton(
                        '',
                        '/site/subscribe',
                        array(
                            'type' => 'POST',
                            'dataType' => 'json',
                            'success' => 'function(data) {  
                                    if (1 == data.success) {
                                        $("#form-subscribe-link").click();
                                    } else {
                                        $("#form-subscribe-error").click();
                                    }
                                }'
                        )
                    ); ?>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
            <div class="fsocial">
                <span>Оставайтесь с нами:</span>
                <?php foreach ($this->a_social as $item) { ?>
                    <a href="<?= $item->web; ?>" target="_blank" class="<?= $item->class; ?>" rel="nofollow"></a>
                <?php } ?>
            </div>
            <div class="fjaws">
                <span>Создание сайта – </span>
                <a title="Создание сайтов Киев" target="_blank" href="http://jaws.com.ua" rel="nofollow">
                    <img src="/img/jaws.png" alt="Создание сайтов Киев">
                </a>
            </div>
        </div>
    </footer>
</div>
<div id="to-top">вверх</div>
<?= $this->renderPartial('/include/popup'); ?>
<script src="/js/libs.js"></script>
<script src="/js/flexslider.js" type="text/javascript"></script>
<script src="/js/main.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=FALSE"></script>
<?= Yii::app()->user->getFlash('product-view', NULL, false); ?>
</body>
</html>