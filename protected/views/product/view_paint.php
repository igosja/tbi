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
                        <span>????????: </span>
                        <strong>
                            <?= HelperIgosja::formatPrice(HelperIgosja::productPrice($o_product), $this->currency); ?>
                        </strong>
                        <div class="pc-availability">?? ??????????????</div>
                    </div>
                    <div class="pc-qty">
                        <span>????????????????????:</span>
                        <div class="qty-input clearfix">
                            <a href="javascript:;" class="qty-less"></a>
                            <input type="text" value="1">
                            <a href="javascript:;" class="qty-more"></a>
                        </div>
                        <span>????.</span>
                        <a
                            class="qty-tocart add-to-cart"
                            data-name="<?= HelperIgosja::productName($o_product); ?>"
                            data-price="<?= HelperIgosja::productPrice($o_product); ?>"
                            data-product="<?= $o_product->id; ?>"
                            href="javascript:;"
                            title="?? ??????????????"
                        >
                            ?? ??????????????
                        </a>
                    </div>
                    <div class="pc-options">
                        <div class="pco-heading">?????????? ????????????????:</div>
                        <div class="pc-rashod">
                            <strong>????????????: </strong>1,4 -2 ????/????.?? ?? 1-2 ????????
                        </div>
                        <?php if (count($o_product->option)) { ?>
                            <section>
                                <div class="sidebar-checkboxes">
                                    <?php $checked = 'checked'; ?>
                                    <?php foreach ($o_product->option as $item) { ?>
                                        <?php
                                        if (0 == $item->plus) {
                                            $price = $o_product->price - $item->price;
                                        } elseif (1 == $item->plus) {
                                            $price = $o_product->price + $item->price;
                                        } else {
                                            $price = $item->price;
                                        }
                                        ?>
                                        <input
                                            class="decor-weight product-option"
                                            data-name="<?= $o_product->name; ?>"
                                            data-option="<?= $item->name; ?>"
                                            data-price="<?= $price; ?>"
                                            data-id="<?= $item->id; ?>"
                                            id="<?= $item->id; ?>"
                                            name="product-option"
                                            type="radio"
                                            <?= $checked; ?>
                                        >
                                        <label for="<?= $item->id; ?>">
                                            <?= $o_product->name; ?>, <?= $item->name; ?>
                                        </label>
                                        <?php $checked = ''; ?>
                                    <?php } ?>
                                </div>
                            </section>
                        <?php } ?>
                    </div>
                    <?php if (count($o_product->color)) { ?>
                        <div class="pc-specifications pc-colors clearfix bxunstyled">
                            <span class="ps-heading">?????????????????? ??????????</span>
                            <a href="javascript:;" class="pc-all-colors overlayElementTrigger"
                               data-selector="form-Color">
                                ?????? ??????????
                            </a>
                            <div id="color-slider" class="owl-carousel">
                                <?php $checked = 'checked'; foreach ($o_product->color as $item) { ?>
                                    <div class="item">
                                        <div class="color-radio">
                                            <input
                                                type="radio"
                                                id="color-<?= $item->color_id; ?>"
                                                name="color"
                                                class="decor-color"
                                                data-color="<?= $item->color->name; ?>"
                                                <?= $checked; ?>
                                            >
                                            <label for="color-<?= $item->color_id; ?>">
                                                <div class="color-radio__i">
                                                    <div>
                                                        <img
                                                            src="<?= ImageIgosja::resize($item->color->image_id, 76, 76); ?>"
                                                            alt=""
                                                        />
                                                    </div>
                                                </div>
                                                <div class="color-radio__r"><?= $item->color->name; ?></div>
                                            </label>
                                        </div>
                                    </div>
                                <?php $checked = ''; } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="pc-specifications">
                        <span class="ps-heading">????????????????????????????:</span>
                        <table>
                            <tbody>
                            <tr>
                                <td>??????????????:</td>
                                <td><?= $o_product->sku; ?></td>
                            </tr>
                            <tr>
                                <td>???????????? ?????? ??????????????????</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>?????? ????????????????</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>?????? ??????????????????</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>?????? ??????????????????</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>???????????? ??????????????????????????</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>??????????</td>
                                <td><?= $o_product->brand->name; ?></td>
                            </tr>
                            <tr>
                                <td>????????</td>
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
                        data-open="???????????????????? ????????????????"
                        data-close="???????????????? ????????????????"
                        title="???????????????????? ????????????????"
                    >
                        ???????????????????? ????????????????
                    </a>
                    <div class="productinfo-content">
                        <span class="ps-heading">????????????????</span>
                        <?= $o_product->text; ?>
                    </div>
                </div>
                <div id="product-tabs" class="tab-container">
                    <ul class='etabs etabs-decor clearfix'>
                        <li class='tab'>
                            <a href="#samples" title="?????????????? ??????????????"><span>?????????????? ??????????????</span></a>
                        </li>
                        <li class='tab'>
                            <a href="#colors" title="???????????????? ??????????"><span>???????????????? ??????????</span></a>
                        </li>
                        <?php if (!empty($o_product->infliction)) { ?>
                            <li class='tab'>
                                <a href="#infliction" title="??????????????????"><span>??????????????????</span></a>
                            </li>
                        <?php } ?>
                        <?php if (isset($o_product->catalog->url)) { ?>
                            <li class='tab'>
                                <a
                                    href="#technical-pdf"
                                    onclick="javascript:window.open('<?= $o_product->catalog->url; ?>','_blank')"
                                    title="??????????????"
                                >
                                    <span>
                                        ??????????????
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
                        <li class='tab'>
                            <a href="#comments"><span>????????????</span></a>
                        </li>
                    </ul>
                    <div id="samples">
                        <div class="samples-grid clearfix">
                            <a href="/shop/effekt-travertina-s-serebristym-otlivom/"
                               title="???????????? ???????????????????? ?? ?????????????????????? ??????????????">
                                <div
                                    style="background-image:url(http://tbi.ua/wa-data/public/shop/products/20/07/720/images/1525/1525.280x280.jpg)"></div>
                                <span>???????????? ???????????????????? ?? ?????????????????????? ??????????????</span>
                            </a>
                            <a href="/shop/effekt-travertina-v-stile-granzh/"
                               title="???????????? ???????????????????? ?? ?????????? &quot;??????????&quot;">
                                <div
                                    style="background-image:url(http://tbi.ua/wa-data/public/shop/products/17/07/717/images/1522/1522.280x280.jpg)"></div>
                                <span>???????????? ???????????????????? ?? ?????????? &quot;??????????&quot;</span>
                            </a>
                        </div>
                    </div>
                    <div id="colors">
                        <div class="more-effects clearfix">
                            <h3 class="effect-title">?????????????????? ??????????</h3>
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
                    <?php if (isset($o_product->catalog->url)) { ?>
                        <div id="technical-pdf"></div>
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
                <div class="pc-options pc-options_r">
                    <div class="pco-heading">???????????????????? ????????????????????:</div>
                    <section>
                        <label for="" class="label-block">????????????????:</label>
                        <div class="pco-select">
                            <select name="material_type" id="material_type">
                                <option value="2">????????????</option>
                                <option value="3" disabled>?????????????? ????????????</option>
                                <option value="4">???????????????????????? ??????????????????</option>
                                <option value="5">???????????????????????? ????????????????????</option>
                                <option value="6">???????????????? ??????????????????</option>
                            </select>
                        </div>
                        <div class="pco-select">
                            <select name="material_products" id="material_products">
                                <option value="">?????????? Primus Naturale</option>
                                <option value="">?????????? Primus Sabbia</option>
                                <option value="">?????????? Acrilak</option>
                                <option value="">?????????? Novaprimer</option>
                                <option value="">?????????? Decofix</option>
                                <option value="">?????????? ??????????</option>
                            </select>
                        </div>
                        <div class="pco-label-and-input clearfix">
                            <label for="" class="label-inline">?????????????? ??<sup>2</sup>:</label>
                            <input type="text" class="square" value="10">
                        </div>
                    </section>
                    <div class="pco-submit">
                        <a href="javascript:;" class="consumption_calc_submit" title="????????????????????">????????????????????</a>
                    </div>
                </div>
                <?= $this->renderPartial('/include/product-left-link'); ?>
            </div>
        </div>
    </div>
</section>
<?= $this->renderPartial('/include/popular'); ?>