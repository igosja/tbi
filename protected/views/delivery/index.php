<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $title; ?></h1>
        <div class="catalog-wrap">
            <div class="clearfix">
                <img src="<?= ImageIgosja::resize($o_deliverypage->image_id, 1200, 350); ?>" alt="" class="img-delivery">
                <ul class="delivery-list">
                    <?php foreach ($a_delivery as $item) { ?>
                        <li class="delivery-item">
                            <h3><?= $item->name; ?></h3>
                            <p><?= $item->description; ?></p>
                            <p class="delivery-payment">Варианты оплаты</p>
                            <p><?= $item->payment; ?></p>
                        </li>
                    <?php } ?>
                </ul>
                <p class="delivery-lasttext"><?= $o_deliverypage->text; ?></p>
            </div>
        </div>
    </div>
</section>