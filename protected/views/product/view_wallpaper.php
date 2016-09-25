<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $o_product->name; ?></h1>
        <div class="product-wrap clearfix">
            <div class="page-left clearfix">
                <div class="page-left__left">
                    <div class="pco-main-img">
                        <img
                            src="<?= ImageIgosja::resize(
                                (isset($o_product->image[0]->image_id) ? $o_product->image[0]->image_id : 0),
                                410,
                                410
                            ); ?>"
                            alt=""
                        />
                    </div>
                    <div class="tovar-photos">
                        <div class="flexslider">
                            <ul class="slides">
                                <?php $a_image = array_slice($o_product->image, 1);
                                foreach ($a_image as $item) { ?>
                                    <li>
                                        <a href="<?= ImageIgosja::resize($item->image_id, 600, 600); ?>"
                                           data-lightbox="1">
                                            <img src="<?= ImageIgosja::resize($item->image_id, 600, 600); ?>" alt=""/>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="flexslider-carousel">
                            <ul class="slides">
                                <?php foreach ($a_image as $item) { ?>
                                    <li>
                                        <img src="<?= ImageIgosja::resize($item->image_id, 100, 100); ?>" alt=""/>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="socialblock"></div>
                </div>
                <div class="product-card">
                    <div class="pc-price">
                        <span>Цена: </span>
                        <strong>
                            <?= HelperIgosja::formatPrice(HelperIgosja::productPrice($o_product), $this->currency); ?>
                        </strong>
                        <div class="pc-availability">В наличии</div>
                    </div>
                    <div class="pc-qty">
                        <span>Количество:</span>
                        <div class="qty-input clearfix">
                            <a href="javascript:;" class="qty-less"></a>
                            <input type="text" value="1">
                            <a href="javascript:;" class="qty-more"></a>
                        </div>
                        <span>шт.</span>
                        <a
                            class="qty-tocart add-to-cart"
                            data-name="<?= HelperIgosja::productName($o_product); ?>"
                            data-price="<?= HelperIgosja::productPrice($o_product); ?>"
                            data-product="<?= $o_product->id; ?>"
                            href="javascript:;"
                            title="В КОРЗИНУ"
                        >
                            В КОРЗИНУ
                        </a>
                    </div>
                    <div class="pc-specifications pc-colors clearfix bxunstyled">
                        <span class="ps-heading">Возможные цвета</span>
                        <a href="javascript:;" class="pc-all-colors overlayElementTrigger" data-selector="form-Color">
                            Все цвета
                        </a>
                        <form>
                            <div id="color-slider" class="owl-carousel">
                                <div class="item">
                                    <div class="color-radio">
                                        <input type="radio" id="color-2557" name="color" class="decor-color"
                                               data-color="2557" value="2557" checked>
                                        <label for="color-2557">
                                            <div class="color-radio__i">
                                                <div>
                                                    <img
                                                        src="http://www.tbi.ua/wa-data/public/photos/69/20/2069/2069.76.jpg"
                                                        alt=""/>
                                                </div>
                                            </div>
                                            <div class="color-radio__r">I1AA</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="color-radio">
                                        <input type="radio" id="color-2558" name="color" class="decor-color"
                                               data-color="2558" value="2558">
                                        <label for="color-2558">
                                            <div class="color-radio__i">
                                                <div>
                                                    <img
                                                        src="http://www.tbi.ua/wa-data/public/photos/70/20/2070/2070.76.jpg"
                                                        alt=""/>
                                                </div>
                                            </div>
                                            <div class="color-radio__r">I2AA</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="color-radio">
                                        <input type="radio" id="color-2559" name="color" class="decor-color"
                                               data-color="2559" value="2559">
                                        <label for="color-2559">
                                            <div class="color-radio__i">
                                                <div>
                                                    <img
                                                        src="http://www.tbi.ua/wa-data/public/photos/71/20/2071/2071.76.jpg"
                                                        alt=""/>
                                                </div>
                                            </div>
                                            <div class="color-radio__r">I3AA</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="color-radio">
                                        <input type="radio" id="color-2560" name="color" class="decor-color"
                                               data-color="2560" value="2560">
                                        <label for="color-2560">
                                            <div class="color-radio__i">
                                                <div>
                                                    <img
                                                        src="http://www.tbi.ua/wa-data/public/photos/72/20/2072/2072.76.jpg"
                                                        alt=""/>
                                                </div>
                                            </div>
                                            <div class="color-radio__r">I4AA</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="color-radio">
                                        <input type="radio" id="color-2561" name="color" class="decor-color"
                                               data-color="2561" value="2561">
                                        <label for="color-2561">
                                            <div class="color-radio__i">
                                                <div>
                                                    <img
                                                        src="http://www.tbi.ua/wa-data/public/photos/78/20/2078/2078.76.jpg"
                                                        alt=""/>
                                                </div>
                                            </div>
                                            <div class="color-radio__r">I1AL</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="pc-specifications">
                        <span class="ps-heading">Характеристики:</span>
                        <table>
                            <tbody>
                            <tr>
                                <td>Артикул:</td>
                                <td><?= $o_product->sku; ?></td>
                            </tr>
                            <tr>
                                <td>Расход при нанесении</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Тип упаковки</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Тип материала</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Тип помещения</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Страна происхождения</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Бренд</td>
                                <td><?= $o_product->brand->name; ?></td>
                            </tr>
                            <tr>
                                <td>Цвет</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="product-info">
                    <a
                        href="javascript:;"
                        class="productinfo-btn"
                        data-open="Развернуть описание"
                        data-close="Свернуть описание"
                        title="Развернуть описание"
                    >
                        Развернуть описание
                    </a>
                    <div class="productinfo-content">
                        <span class="ps-heading">Описание</span>
                        <?= $o_product->text; ?>
                    </div>
                </div>
                <div id="product-tabs" class="tab-container">
                    <ul class='etabs etabs-decor clearfix'>
                        <li class='tab'>
                            <a href="#samples" title="Готовые образцы"><span>Готовые образцы</span></a>
                        </li>
                        <li class='tab'>
                            <a href="#colors" title="Цветовая гамма"><span>Цветовая гамма</span></a>
                        </li>
                        <?php if (!empty($o_product->infliction)) { ?>
                            <li class='tab'>
                                <a href="#infliction" title="Нанесение"><span>Нанесение</span></a>
                            </li>
                        <?php } ?>
                        <?php if (!empty($o_product->youtube)) { ?>
                            <li class='tab youtube-tab'>
                                <a href="#youtube-s">
                                    <span><img src="/img/youtube-tab.png" alt=""/></span>
                                </a>
                            </li>
                        <?php } ?>
                        <li class='tab'>
                            <a href="#comments"><span>Отзывы</span></a>
                        </li>
                    </ul>
                    <div id="samples">
                        <div class="samples-grid clearfix">
                            <a href="/shop/effekt-travertina-s-serebristym-otlivom/"
                               title="Эффект травертина с серебристым отливом">
                                <div
                                    style="background-image:url(http://tbi.ua/wa-data/public/shop/products/20/07/720/images/1525/1525.280x280.jpg)"></div>
                                <span>Эффект травертина с серебристым отливом</span>
                            </a>
                            <a href="/shop/effekt-travertina-v-stile-granzh/"
                               title="Эффект травертина в стиле &quot;гранж&quot;">
                                <div
                                    style="background-image:url(http://tbi.ua/wa-data/public/shop/products/17/07/717/images/1522/1522.280x280.jpg)"></div>
                                <span>Эффект травертина в стиле &quot;гранж&quot;</span>
                            </a>
                        </div>
                    </div>
                    <div id="colors">
                        <div class="more-effects clearfix">
                            <h3 class="effect-title">Возможные цвета</h3>
                            <div class="more-effects__item">
                                <a href="http://www.tbi.ua/wa-data/public/photos/69/20/2069/2069.500.jpg"
                                   data-lightbox="2" data-title="I1AA">
                                    <img src="http://www.tbi.ua/wa-data/public/photos/69/20/2069/2069.156.jpg" alt=""/>
                                    <span>I1AA</span>
                                </a>
                            </div>
                            <div class="more-effects__item">
                                <a href="http://www.tbi.ua/wa-data/public/photos/70/20/2070/2070.500.jpg"
                                   data-lightbox="2" data-title="I2AA">
                                    <img src="http://www.tbi.ua/wa-data/public/photos/70/20/2070/2070.156.jpg" alt=""/>
                                    <span>I2AA</span>
                                </a>
                            </div>
                            <div class="more-effects__item">
                                <a href="http://www.tbi.ua/wa-data/public/photos/71/20/2071/2071.500.jpg"
                                   data-lightbox="2" data-title="I3AA">
                                    <img src="http://www.tbi.ua/wa-data/public/photos/71/20/2071/2071.156.jpg" alt=""/>
                                    <span>I3AA</span>
                                </a>
                            </div>
                            <div class="more-effects__item">
                                <a href="http://www.tbi.ua/wa-data/public/photos/72/20/2072/2072.500.jpg"
                                   data-lightbox="2" data-title="I4AA">
                                    <img src="http://www.tbi.ua/wa-data/public/photos/72/20/2072/2072.156.jpg" alt=""/>
                                    <span>I4AA</span>
                                </a>
                            </div>
                            <div class="more-effects__item">
                                <a href="http://www.tbi.ua/wa-data/public/photos/78/20/2078/2078.500.jpg"
                                   data-lightbox="2" data-title="I1AL">
                                    <img src="http://www.tbi.ua/wa-data/public/photos/78/20/2078/2078.156.jpg" alt=""/>
                                    <span>I1AL</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php if (!empty($o_product->infliction)) { ?>
                        <div id="infliction">
                            <?= $o_product->infliction; ?>
                        </div>
                    <?php } ?>
                    <?php if (!empty($o_product->youtube)) { ?>
                        <div id="youtube-s">
                            <?php $youtube = explode(';', $o_product->youtube); ?>
                            <?php foreach ($youtube as $item) { ?>
                                <iframe
                                    width="560"
                                    height="315"
                                    src="https://www.youtube.com/embed/<?= trim($item); ?>"
                                    frameborder="0"
                                    allowfullscreen
                                ></iframe>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    <?= $this->renderPartial('/include/review', array('o_product' => $o_product)); ?>
                </div>
            </div>
            <div class="page-sidebar">
                <?= $this->renderPartial('/include/product-left-category'); ?>
                <?= $this->renderPartial('/include/product-left-link'); ?>
            </div>
        </div>
    </div>
</section>
<?= $this->renderPartial('/include/popular'); ?>