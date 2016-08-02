<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $o_brand->name; ?></h1>
        <div class=" clearfix">
            <div class="blogwrap clearfix">
                <div class="blog-item-page clearfix">
                    <div class="product-info brand-info">
                        <a
                            href="javascript:;"
                            class="productinfo-btn"
                            data-open="Развернуть описание"
                            data-close="Свернуть описание"
                            title="Развернуть описание"
                        >Развернуть описание</a>
                        <div class="productinfo-content brand-content">
                            <p>
                                <img src="<?= ImageIgosja::resize($o_brand->image_id, 216, 162); ?>" alt="" class="brand_image">
                            </p>
                            <p class="MsoNormal">
                                <?= $o_brand->text; ?>
                            </p>
                            <?php if (!empty($o_brand->web)) { ?>
                                <p>
                                    <a href="<?= $o_brand->web; ?>" rel="nofollow" target="_blank">Сайт компании</a>
                                </p>
                            <?php } ?>
                            <div class="socialblock">
                                <div
                                    class="fb-share-button"
                                    data-href="https://developers.facebook.com/docs/plugins/"
                                    data-layout="button"
                                ></div>
                                <a
                                    href="https://twitter.com/share"
                                    class="twitter-share-button"
                                    data-count="none"
                                    title="Tweet"
                                    rel="nofollow"
                                >Tweet</a>
                                <div class="g-plus" data-action="share" data-annotation="none"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-left">
                    <div class="catalog-grid clearfix">
                        <h4 class="section-heading section-heading-rm">Товары бренда</h4>
                        <?php foreach ($a_product as $item) { ?>
                            <?= $this->renderPartial('/include/product-item', array('item' => $item)); ?>
                        <?php } ?>
                        <div class="catalog-pagination clearfix">
                            <a class="pagination-item current" href="javascript:;"><span>1</span></a>
                            <a class="pagination-item " href="javascript:;"><span>2</span></a>
                            <a class="pagination-item " href="javascript:;"><span>3</span></a>
                            <a class="pagination-right" href="javascript:;"></a>
                        </div>
                    </div>
                </div>
                <div class="page-sidebar">
                    <?= $this->renderPartial('/include/product-sidebar'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

