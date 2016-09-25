<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $o_certificatepage->name; ?></h1>
        <?php if (count($a_product)) { ?>
            <div class="sertificate-wrap clearfix">
                <div class="sertificate__slider">
                    <div class="bxunstyled sertificate-slider-wrap" style="height: 267px;">
                    </div>
                </div>
                <div class="sertificate__right">
                    <div class="filtersblock sidebar-categories sidebar-categories_right">
                        <section>
                            <span class="cr-subheading cr-subheading_margin">ТИП:</span>
                        </section>
                        <div class="pco-select sertificate__pco-select">
                            <select id="sertificate_select">
                                <?php foreach ($a_product as $item) { ?>
                                    <option value="<?= $item->id; ?>"><?= $item->name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="sertificate-sub">
                            <div class="pco-select sertificate__pco-select sertificate-sub-select">
                                <select class="sub_sertificate_select" data-name="<?= $a_product[0]->name; ?>">
                                    <?php foreach ($a_product[0]->option as $item) { ?>
                                        <option value="<?= $item->id; ?>"><?= $item->name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <a
                            class="sertificate__link add-to-cart"
                            href="javascript:;"
                            data-product="<?= $a_product[0]->id; ?>"
                            data-name="<?= HelperIgosja::productName($a_product[0]); ?>"
                            data-price="<?= HelperIgosja::productPrice($a_product[0]); ?>"
                            title="В корзину"
                        >
                            В корзину
                        </a>
                    </div>
                </div>
            </div>
            <div class="description_text clearfix parag-desc">
                <div class="description__title ">
                    Описание
                </div>
                <span id="description">
                <?= $a_product[0]->text; ?>
            </span>
            </div>
            <div class="acrdn">
                <div class="acrdn-item ">
                    <a href="javascript:;" class="acrdn-item-head" title="Правила использования ваучера">
                        Правила использования ваучера
                    </a>
                    <div class="acrdn-item-body" id="rules">
                        <?= $a_product[0]->rules; ?>
                    </div>
                </div>
            </div>
            <div class="grey-wrap">
                <div class="customers description_text">
                    <div class="customers__title">
                        <?= $o_certificatepage->title; ?>
                    </div>
                    <?= $o_certificatepage->text; ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>