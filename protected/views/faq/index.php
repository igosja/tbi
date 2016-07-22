<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $title; ?></h1>
        <div class="catalog-wrap">
            <div class="blogwrap clearfix">
                <div class="page-left">
                    <div class="acrdn acdn_faq">
                        <?php foreach ($a_faq as $item) { ?>
                            <div class="acrdn-item">
                                <a href="javascript:;" class="acrdn-item-head"><?= $item->question; ?></a>
                                <div class="acrdn-item-body"><?= $item->answer; ?></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>