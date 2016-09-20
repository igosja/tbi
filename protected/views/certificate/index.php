<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $o_certificatepage->name; ?></h1>
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
                        <select name="" id="sertificate_select">
                            <?php foreach ($a_product as $item) { ?>
                                <option value="<?= $item->id; ?>"><?= $item->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="sertificate-sub">
                        <div class="pco-select sertificate__pco-select sertificate-sub-select">
                            <select name="" class="sub_sertificate_select">
                                <?php foreach ($a_product[0]->option as $item) { ?>
                                    <option value="<?= $item->id; ?>"><?= $item->name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <a
                        class="sertificate__link addtocart"
                        href="javascript:;"
                        data-id="106"
                        data-sku="118"
                        data-type="1"
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
            <?= $a_product[0]->text; ?>
        </div>
        <div class="acrdn" id="rule-106">
            <div class="acrdn-item ">
                <a href="javascript:;" class="acrdn-item-head" title="Правила использования ваучера">
                    Правила использования ваучера
                </a>
                <div class="acrdn-item-body">
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
    </div>
</section>
