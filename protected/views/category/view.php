<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= CHtml::decode($o_category->name); ?></h1>
        <div class="pageinfo pageinfo_top">
            <p><?= $o_category->text; ?></p>
        </div>
        <div class="catalog-wrap clearfix">
            <div class="catalog-topfilters">
                <span>СОРТИРОВАТЬ:</span>
                <a href="javascript:;" class="current" title="Новые и популярные">
                    Все товары
                </a>
                <a href="javascript:;" title="В наличии">В наличии</a>
                <a href="javascript:;" title="Хиты продаж">Хиты продаж</a>
                <a href="javascript:;" title="Цена">Цена</a>
                <a href="javascript:;" title="Название">Название</a>
                <a href="javascript:;" title="Дата добавления">Дата добавления</a>
                <div class="view-chose">
                    <a href="javascript:;" class="view-chose__list active"></a>
                    <a href="javascript:;" class="view-chose__line "></a>
                </div>
            </div>
            <div class="page-left">
                <div class="catalog-grid clearfix">
                    <?php foreach ($a_product as $item) { ?>
                        <?= $this->renderPartial('/include/product-item', array('item' => $item)); ?>
                    <?php } ?>
                </div>
                <div class="catalog-btns">
                    <a href="javascript:;" class="catalog-more" title="Загрузить еще">Загрузить еще</a>
                    <a href="javascript:;" class="catalog-all">Показать все</a>
                </div>
                <div class="catalog-pagination lazyloading-paging clearfix">
                    <a class="pagination-item current" href="/shop/category/dekorativnye-materialy/"><span>1</span></a>
                    <a class="pagination-item " href="/shop/category/dekorativnye-materialy/?page=2"><span>2</span></a>
                    <span>...</span>
                    <a class="pagination-item " href="/shop/category/dekorativnye-materialy/?page=8"><span>8</span></a>
                    <a class="pagination-right" href="/shop/category/dekorativnye-materialy/?page=2"></a>
                </div>
            </div>
            <div class="page-sidebar">
                <div class="filters">
                    <form method="get" action="/shop/category/dekorativnye-materialy/" class="form-onchange">
                        <input type="hidden" name="view_type" value="table">
                        <div class="filtersblock">
                            <section>
                                <span class="cr-subheading">Цена</span>
                                <div class="priceinputs">
                                    <span>от</span>
                                    <input type="text" name="price_min" placeholder="0">
                                    <span>до</span>
                                    <input type="text" name="price_max" placeholder="0">
                                    <span>ГРН.</span>
                                </div>
                            </section>
                            <section class="onchange-input">
                                <span class="cr-subheading">Тип материала</span>
                                <div class="sidebar-checkboxes">
                                    <input id="filter_78_tip_materiala" type="checkbox" name="tip_materiala[]" value="78">
                                    <label for="filter_78_tip_materiala">Грунты</label>
                                </div>
                            </section>
                            <section class="filter-colors onchange-input">
                            <span class="cr-subheading">Цвет</span>
                                <div class="clearfix">
                                    <div class="color-check">
                                        <input type="checkbox" id="color-16777215" name="tsvet[]" value="10">
                                        <label style="background:#FFFFFF;"
                                               class="filter-color "
                                               for="color-16777215"></label>
                                        <small style="display: none;">Белый</small>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


