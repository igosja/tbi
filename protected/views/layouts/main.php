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
    <title><?= $this->seo_title; ?></title>
    <meta name="description" content="<?= $this->seo_description; ?>">
    <meta name="keywords" content="<?= $this->seo_keywords; ?>">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/normalize.min.css">
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="/css/new_style.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/new-styles.css">
    <script src="/js/jquery.js"></script>
</head>
<body>
<script src="https://apis.google.com/js/platform.js" async defer>
    {lang: 'ru'}
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
                <a href="javascript:;" data-selector="form-sendEmail" class="callrequest overlayElementTrigger" title="Заказать звонок">Заказать звонок</a>
            </div>
            <a href="/" class="logo"><img src="/img/logo.png" alt=""></a>
            <div class="hright">
                <div class="user-functions">
                    <a href="javascript:;" class="overlayElementTrigger" data-selector="form-signIn" title="Вход">Вход</a>
                    <a href="javascript:;" class="overlayElementTrigger" data-selector="form-signUp" title="Регистрация">Регистрация</a>
                </div>
                <div class="hsearch">
                    <form>
                        <input name="query" type="search" placeholder="Поиск..." id="search">
                        <input type="submit">
                    </form>
                </div>
                <div class="hcurrency">
                    <select id="currency">
                        <option value="UAH" selected>UAH</option>
                        <option value="EUR">EUR</option>
                        <option value="USD">USD</option>
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
                        <a href="javascript:;" title="Наши товары">Наши товары</a>
                        <div class="first-m">
                            <div class="wrap">
                                <ul class="clearfix">
                                    <li>
                                        <a href="javascript:;" title="Декоративные материалы" class="has-c">Декоративные материалы</a>
                                        <div class="second-m">
                                            <div class="wrap clearfix">
                                                <div class="secon-m__left">
                                                    <div class="clearfix">
                                                        <div class="second-m__item">
                                                            <div class="second-m__title">
                                                                Тип материала
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Фоновые материалы</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Декоративные краски</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Тонкослойные материалы</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Декоративные штукатурки</a>
                                                            </div>
                                                            <a href="javascript:;" class="second-m__all">Смотреть все</a>
                                                        </div>
                                                        <div class="second-m__item">
                                                            <div class="second-m__title">
                                                                Тип помещения
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Интерьер</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Фасад</a>
                                                            </div>
                                                            <a href="javascript:;" class="second-m__all">Смотреть все</a>
                                                        </div>
                                                        <div class="second-m__item">
                                                            <div class="second-m__title">
                                                                По бренду
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Giorgio Graesan & Friends</a></div>
                                                            <div>
                                                                <a href="javascript:;">Novacolor</a>
                                                            </div>
                                                            <a href="javascript:;" class="second-m__all">Смотреть все</a>
                                                        </div>
                                                        <div class="secon-m__left">
                                                            <div class="clearfix">
                                                                <div class="second-m__item second-m__item_full">
                                                                    <div class="second-m__title">
                                                                        Декоративные эффекты
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="secon-m__left">
                                                            <div class="clearfix">
                                                                <div class="second-m__item">
                                                                    <div class="second-m__title">
                                                                        По декорам
                                                                    </div>
                                                                    <a href="javascript:;" class="second-m__all">Смотреть все</a>
                                                                </div>
                                                                <div class="second-m__item">
                                                                    <div class="second-m__title">
                                                                        Стиль декора
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:;">Классический</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:;">Арт-деко</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:;">High-tech/Loft/Минимализм</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:;">Фьюжн</a>
                                                                    </div>
                                                                </div>
                                                                <div class="second-m__item">
                                                                    <div class="second-m__title">
                                                                        Эффект поверхности
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:;">Камень/мрамор/траветин</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:;">Бетон</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:;">Коррозия/ржавчина</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="javascript:;">Шёлк/ткань/бархат</a>
                                                                    </div>
                                                                    <a href="javascript:;" class="second-m__all">Смотреть все</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="secon-m__right">
                                                    <img src="/img/menu-img-decormat.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;" title="Карнизы" class="has-c">Карнизы</a>
                                        <div class="second-m">
                                            <div class="wrap clearfix">
                                                <div class="secon-m__left">
                                                    <div class="clearfix">
                                                        <div class="second-m__item">
                                                            <div class="second-m__title">
                                                                По типу системы
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Карнизы для драпированных занавесей</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Карнизы для римских штор</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Карнизы для панельных штор</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Карнизные системы для мансардных окон</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Декоративные карнизы</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Специальные системы</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Ламбрекенная планка</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Рулонные шторы</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Деревянные жалюзи</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Вертикальные жалюзи</a>
                                                            </div>
                                                            <a href="javascript:;" class="second-m__all">Смотреть все</a>
                                                        </div>
                                                        <div class="second-m__item">
                                                            <div class="second-m__title">
                                                                По типу управления
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Шнур</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Цепочка</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Корба</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Ручное управление</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Моторизированная система</a>
                                                            </div>
                                                            <a href="javascript:;" class="second-m__all">Смотреть все</a>
                                                        </div>
                                                        <div class="second-m__item">
                                                            <div class="second-m__title">
                                                                Тип крепления
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Потолочное</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Стеновое</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">На раму</a>
                                                            </div>
                                                            <a href="javascript:;" class="second-m__all">Смотреть все</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="secon-m__right">
                                                    <img src="/img/menu-img-karnozi.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;" title="Ткани" class="has-c">Ткани</a>
                                        <div class="second-m">
                                            <div class="wrap clearfix">
                                                <div class="secon-m__left">
                                                    <div class="clearfix">
                                                        <div class="second-m__item">
                                                            <div class="second-m__title">
                                                                По типу
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Декоративные ткани</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Технические ткани</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Ткани Atelier Mottura</a>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Ткани Блекаут (Blackout)</a>
                                                            </div>
                                                            <a href="javascript:;" class="second-m__all">Смотреть все</a>
                                                        </div>
                                                        <div class="second-m__item">
                                                            <div class="second-m__title">
                                                                По бренду
                                                            </div>
                                                            <div>
                                                                <a href="javascript:;">Mottura</a>
                                                            </div>
                                                            <a href="javascript:;" class="second-m__all">Смотреть все</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="secon-m__right">
                                                    <img src="/img/menu-img-tkani.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;" title="Обои" class="has-c">Обои</a>
                                        <div class="second-m">
                                            <div class="wrap clearfix">
                                                <div class="secon-m__left">
                                                    <div class="clearfix">
                                                        <div class="second-m__item">
                                                            <div class="second-m__title">
                                                                По бренду
                                                            </div>
                                                            <a href="javascript:;" class="second-m__all">Смотреть все</a>
                                                        </div>
                                                        <div class="second-m__item">
                                                            <div class="second-m__title">
                                                                По типу
                                                            </div>
                                                            <a href="javascript:;" class="second-m__all">Смотреть все</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="secon-m__right">
                                                    <img src="/img/menu-img-oboi.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="javascript:;" title="Другое">Другое</a></li>
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
                <a href="javascript:;" title="0" class="navcart <?php if (1) { ?>empty<?php } ?>">
                    <span>0</span>
                </a>
            </div>
            <a href="javascript:;" class="compare-block" id="compare-leash" <?php if (1) { ?>style="display:none;"<?php } ?> title="Сравнить товары">Сравнить товары</a>
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
                        <li><a href="javascript:;" title="Подрарочные сертификаты">Подрарочные сертификаты</a></li>
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
                    <form>
                        <input type="email" placeholder="Введите ваш email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        <input type="submit" value="">
                    </form>
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
</body>
</html>