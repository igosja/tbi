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
                <?php foreach ($a_sort_link as $item) { ?>
                    <?= CHtml::link(
                        $item['text'],
                        array('category/view', 'id' => $o_category->url, 'order' => $item['order'], 'asc' => $item['asc']),
                        array('class' => $item['class'], 'title' => $item['text'])
                    ) ?>
                <?php } ?>
                <div class="view-chose">
                    <?= CHtml::link(
                        '',
                        array('category/viewchange', 'id' => $o_category->url, 'view' => 'grid'),
                        array(
                            'class' => 'view-chose__list '
                                . ('grid' == Yii::app()->session['product-view'] ? 'active' : '')
                        )
                    ) ?>
                    <?= CHtml::link(
                        '',
                        array('category/viewchange', 'id' => $o_category->url, 'view' => 'line'),
                        array(
                            'class' => 'view-chose__line '
                                . ('line' == Yii::app()->session['product-view'] ? 'active' : '')
                        )
                    ) ?>
                </div>
            </div>
            <div class="page-left">
                <div class="catalog-<?= Yii::app()->session['product-view']; ?> clearfix list-product-div">
                    <?php foreach ($a_product as $item) { ?>
                        <?= $this->renderPartial(
                            '/include/product-item-' . Yii::app()->session['product-view'],
                            array('item' => $item)
                        ); ?>
                    <?php } ?>
                </div>
                <div class="catalog-btns">
                    <?php if ($page < $count_pages) { ?>
                        <a
                            href="javascript:;"
                            class="catalog-more"
                            title="Загрузить еще"
                            id="category-more"
                            data-id="<?= $id; ?>"
                            data-page="<?= $page; ?>"
                            data-order="<?= $order; ?>"
                            data-asc="<?= $asc; ?>"
                        >Загрузить еще</a>
                    <?php } ?>
                    <?php if (count($a_product) < $count_product) { ?>
                        <a
                            href="javascript:;"
                            class="catalog-all"
                            id="category-all"
                            data-id="<?= $id; ?>"
                            data-order="<?= $order; ?>"
                            data-asc="<?= $asc; ?>"
                        >Показать все</a>
                    <?php } ?>
                </div>
                <div class="catalog-pagination clearfix">
                    <?php if (count($a_product) < $count_product) { ?>
                        <?php if ($page > 1) { ?>
                            <?= CHtml::link(
                                '',
                                array('category/view', 'id' => $id, 'page' => $page - 1, 'order' => $order, 'asc' => $asc),
                                array('class' => 'pagination-left')
                            ) ?>
                        <?php } ?>
                        <?php for ($i = 1; $i <= $count_pages; $i++) { ?>
                            <?= CHtml::link(
                                '<span>' . $i . '</span>',
                                array('category/view', 'id' => $id, 'page' => $i, 'order' => $order, 'asc' => $asc),
                                array('class' => 'pagination-item page-'. $i . ($page == $i ? ' current' : ''))
                            ) ?>
                        <?php } ?>
                        <?php if ($page < $count_pages) { ?>
                            <?= CHtml::link(
                                '',
                                array('category/view', 'id' => $id, 'page' => $page + 1, 'order' => $order, 'asc' => $asc),
                                array('class' => 'pagination-right')
                            ) ?>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="page-sidebar">
                <div class="filters">
                    <form method="get" class="form-onchange">
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
                                    <input id="filter_78_tip_materiala" type="checkbox" name="tip_materiala[]"
                                           value="78">
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


