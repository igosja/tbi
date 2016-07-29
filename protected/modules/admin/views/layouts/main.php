<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Административный раздел">
    <script src="/js/jquery.js"></script>
    <title>Административный раздел</title>
    <link href="/css/admin.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= CHtml::link('ТБИ', array('index/index'), array('class' => 'navbar-brand')); ?>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <?= CHtml::link('<i class="fa fa-sign-out fa-fw"></i>', array('/site/logout')); ?>
            </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="javascript:;">Главная страница<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= CHtml::link('Текст и SEO-теги', array('mainpage/index')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">Магазин<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= CHtml::link('SEO-теги', array('shoppage/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Категории', array('category/index')); ?>
                            </li>
                            <li>
                                <a href="javascript:;">Бренды<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <?= CHtml::link('SEO-теги', array('brandpage/index')); ?>
                                    </li>
                                    <li>
                                        <?= CHtml::link('Бренды', array('brand/index')); ?>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">Блог<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= CHtml::link('SEO-теги', array('blogpage/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Категории', array('blogcategory/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Публикации', array('blog/index')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">Статические страницы<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= CHtml::link('О нас', array('aboutpage/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Сотрудничество', array('cooperationpage/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Услуги', array('servicepage/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Акции', array('sharepage/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Outlet', array('outletpage/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Гарантии', array('warrantypage/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Каталоги', array('catalogpage/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Условия использования', array('conditionpage/index')); ?>
                            </li>
                            <li>
                                <?= CHtml::link('Оплата', array('paymentpage/index')); ?>
                            </li>
                            <li>
                                <a href="javascript:;">ЧаВо<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <?= CHtml::link('SEO-теги', array('faqpage/index')); ?>
                                    </li>
                                    <li>
                                        <?= CHtml::link('Вопросы', array('faq/index')); ?>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">Доставка<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <?= CHtml::link('Текст и SEO-теги', array('deliverypage/index')); ?>
                                    </li>
                                    <li>
                                        <?= CHtml::link('Способы доставки', array('delivery/index')); ?>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">Вакансии<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <?= CHtml::link('Текст и SEO-теги', array('vacancypage/index')); ?>
                                    </li>
                                    <li>
                                        <?= CHtml::link('Вакасии', array('vacancy/index')); ?>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <?= CHtml::link('Контакты и SEO-теги', array('contacts/index')); ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">Настройки<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= CHtml::link('Соц сети', array('social/index')); ?>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="page-wrapper">
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'separator' => '',
            'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>',
            'inactiveLinkTemplate' => '<li class="active">{label}</li>',
            'tagName' => 'ul',
            'htmlOptions' => array('class' => 'breadcrumb'),
            'links' => $this->breadcrumbs,
        )); ?>
        <?= $content; ?>
    </div>
</div>
<script src="/js/bootstrap-toggle.min.js"></script>
<script src="/js/rowsorter.js"></script>
<script src="/js/admin.min.js"></script>
<script src="/js/admin.js"></script>
</body>
</html>