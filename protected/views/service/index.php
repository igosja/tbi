<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $title; ?></h1>
        <div class="catalog-wrap">
            <div class="wrap">
                <div class="product-wrap clearfix">
                    <div class="clearfix ">
                        <img src="<?= ImageIgosja::resize($o_servicepage->image_id, 280, 280); ?>" class="img-left" alt="">
                        <h2 class="usl-title"><?= $o_servicepage->name; ?></h2>
                        <?= $o_servicepage->text; ?>
                    </div>
                </div>
            </div>
            <div class="usl-grey">
                <div class="wrap clearfix">
                    <h2 class="page-heading page-heading_t">Наши услуги</h2>
                    <div class="usl-left">
                        <a href="http://www.tbi.ua/shop/category/dekorativnye-materialy/effekty/" class="usl-b" style="background-image:url(http://www.tbi.ua/wa-data/public/site/img/services-decor.jpg);">
                            <div>
                                <span>Декоры стен</span>
                            </div>
                            <span class="mcbbtn"><span>Смотреть каталог</span></span>
                        </a>
                        <p>Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <p>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet </p>
                    </div>
                    <div class="usl-right">
                        <a href="http://www.tbi.ua/shop/category/tkani/" class="usl-b" style="background-image:url(http://www.tbi.ua/wa-data/public/site/img/services-decor.jpg);">
                            <div>
                                <span>Пошив штор,<br />текстильный дизайн</span>
                            </div>
                            <span class="mcbbtn"><span>Смотреть каталог</span></span>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>