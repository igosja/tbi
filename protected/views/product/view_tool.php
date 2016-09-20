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
                        <strong><?= HelperIgosja::productPrice($o_product); ?> грн.</strong>
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
                            data-option="<?= HelperIgosja::productOption($o_product); ?>"
                            href="javascript:;"
                            title="В КОРЗИНУ"
                        >
                            В КОРЗИНУ
                        </a>
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