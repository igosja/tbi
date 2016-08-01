<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h2 class="page-heading"><?= $title; ?></h2>
        <div class="product-wrap">
            <div class="clearfix">
                <?php foreach ($a_category as $item) { ?>
                    <div class="catalog-item">
                        <?= CHtml::link(
                            '<span class="mcbbtn"><span>Смотреть каталог</span></span>',
                            array('category/view', 'id' => $item->url),
                            array(
                                'class' => 'catalog-item__image',
                                'style' => 'background:url(' . ImageIgosja::resize($item->image_id, 380, 250) . ') 0 0 no-repeat;',
                                'title' => 'Смотреть каталог'
                            )
                        ); ?>
                        <div class="catalog-item__text">
                            <div class="catalog-item__text_t">
                                <?= CHtml::link(
                                    $item->name,
                                    array('category/view', 'id' => $item->url),
                                    array('class' => 'catalog-item__title', 'title' => $item->name)
                                ); ?>
                                <p><?= $item->text; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?= $this->renderPartial('/include/popular'); ?>