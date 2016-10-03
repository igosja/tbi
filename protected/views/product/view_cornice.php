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
                    <div class="pco-profile-img pco-profile-img__left">
                        <div class="pco-heading">Применение</div>
                        <div class="product_use">
                            <?php foreach ($a_application as $item) { ?>
                                <span>
                                    <img
                                        alt="<?= $item->name; ?>"
                                        <?php foreach ($o_product->application as $check) { ?>
                                            <?php if ($check->application_id == $item->id) { ?>
                                                class="active"
                                            <?php } ?>
                                        <?php } ?>
                                        src="/img/use_icons/use<?= $item->id; ?>.jpg"
                                    />
                                    <small><?= $item->name; ?></small>
                                </span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="pco-profile-img pco-profile-img__left">
                        <div class="pco-heading">Варианты открывания</div>
                        <div class="img-height">
                            <?php foreach ($o_product->openoption as $item) { ?>
                                <img
                                    src="<?= ImageIgosja::resize(
                                        (isset($item->openoption->image_id) ? $item->openoption->image_id : 0),
                                        370,
                                        264,
                                        0
                                    ); ?>"
                                />
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="product-card clearfix">
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
                    <div class="pc-options">
                        <div class="pco-heading">Рассчитать стоимость:</div>
                        <section>
                            <div class="input-with-title clearfix">
                                <input type="text" class="pco-input" placeholder="Длина карниза" id="cornice-length">
                                <span>max 160 cm</span>
                            </div>
                            <div class="input-with-title clearfix">
                                <input type="text" class="pco-input" placeholder="Высота проема ">
                                <span>max 200 cm</span>
                            </div>
                            <div class="input-with-title clearfix" style="display:none;">
                                <input type="text" class="pco-input" placeholder="Вес полотна">
                                <span>max  </span>
                            </div>
                            <a href="javascript:;" class="size-long overlayElementTrigger" data-selector="form-sizeLong"
                               title="Длинна / высота">Длинна / высота</a>
                            <div class="clearfix">
                                <div class="pco-options__half">
                                    <div class="sidebar-checkboxes sidebar-checkboxes_sm-m">
                                        <input type="checkbox" id="pokraska">
                                        <label for="pokraska">Покраска по каталогу RAL</label>
                                        <input type="checkbox" id="montaj">
                                        <label for="montaj">Монтаж</label>
                                    </div>
                                </div>
                                <div class="pco-options__half">
                                    <a href="javascript:;"
                                       class="overlayElementTrigger pco-options__choose pco-options__choose_first"
                                       data-selector="form-choseColor" title="Выбор цвета">Выбор цвета</a>
                                    <a href="javascript:;" class="overlayElementTrigger pco-options__choose"
                                       data-selector="form-lokalization" title="Выбор локации">Выбор локации</a>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="pco-submit__only">
                        <a href="javascript:;" id="cornice_count" title="Рассчитать">Рассчитать</a>
                    </div>
                    <div class="pco-profile-img">
                        <div class="pco-heading">Разрез профиля:</div>
                        <div class="img-height__right">
                            <img src="http://www.tbi.ua/wa-data/public/photos/19/38/3819/3819.750.jpg" alt=""/>
                        </div>
                    </div>
                </div>
                <div class="product-description clearfix">
                    <div class="product-slider-wrap bxunstyled">
                        <div class="tovar-photos">
                            <div class="flexslider">
                                <ul class="slides">
                                    <?php $a_image = array_slice($o_product->image, 1);
                                    foreach ($a_image as $item) { ?>
                                        <li>
                                            <a href="<?= ImageIgosja::resize($item->image_id, 600, 600); ?>"
                                               data-lightbox="1">
                                                <img src="<?= ImageIgosja::resize($item->image_id, 600, 600); ?>"
                                                     alt=""/>
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
                    <div class="productinfo-content">
                        <span class="ps-heading">Описание</span>
                        <?= $o_product->text; ?>
                    </div>
                </div>
                <div id="product-tabs" class="tab-container">
                    <ul class='etabs etabs-decor etabs-no-upper clearfix'>
                        <?php if (!empty($o_product->equipment)) { ?>
                            <li class='tab'>
                                <a href="#standart" title="Стандартная комплектация">
                                    <span>Стандартная компле...</span>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (!empty($o_product->technical_characteristics)) { ?>
                            <li class='tab'>
                                <a href="#technical" title="Технические характеристики">
                                    <span>Технические харак...</span>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (isset($o_product->catalog->url)) { ?>
                            <li class='tab'>
                                <a
                                    href="#technical-pdf"
                                    onclick="javascript:window.open('<?= $o_product->sheet->url; ?>','_blank')"
                                    title="Технический лист"
                                >
                                    <span>
                                        Каталог
                                        <img src="/img/pdf.png" alt="" style="margin-left:0px; vertical-align:middle;"/>
                                    </span>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (!empty($o_product->youtube)) { ?>
                            <li class='tab youtube-tab'>
                                <a href="#youtube-s">
                                    <span><img src="/img/youtube-tab.png" alt=""/></span>
                                </a>
                            </li>
                        <?php } ?>
                        <li class='tab'><a href="#comments"><span>Отзывы</a></span></li>
                    </ul>
                    <?php if (!empty($o_product->equipment)) { ?>
                        <div id="standart" class="tab-screen">
                            <?= $o_product->equipment; ?>
                        </div>
                    <?php } ?>
                    <?php if (!empty($o_product->technical_characteristics)) { ?>
                        <div id="technical" class="tab-screen">
                            <?= $o_product->technical_characteristics; ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($o_product->sheet->url)) { ?>
                        <div id="technical-pdf" class="tab-screen"></div>
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