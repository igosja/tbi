<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $title; ?></h1>
        <div class="catalog-wrap">
            <div class="product-wrap clearfix">
                <?= $o_paymentpage->text; ?>
                <div class="thr-items clearfix">
                    <div class="thr-item">
                        <div class="thr-item__img">
                            <img src="/img/new/thr-item-1.png" alt="">
                        </div>
                        <div class="thr-item__title"><?= $o_paymentpage->card_name; ?></div>
                        <div class="thr-item__text"><?= $o_paymentpage->card_text; ?></div>
                    </div>
                    <div class="thr-item">
                        <div class="thr-item__img">
                            <img src="/img/new/thr-item-2.png" alt="">
                        </div>
                        <div class="thr-item__title"><?= $o_paymentpage->receipt_name; ?></div>
                        <div class="thr-item__text"><?= $o_paymentpage->receipt_text; ?></div>
                    </div>
                    <div class="thr-item">
                        <div class="thr-item__img">
                            <img src="/img/new/thr-item-3.png" alt="">
                        </div>
                        <div class="thr-item__title"><?= $o_paymentpage->cash_name; ?></div>
                        <div class="thr-item__text"><?= $o_paymentpage->cash_text; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>