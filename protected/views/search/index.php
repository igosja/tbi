<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h2 class="page-heading"><?= $title; ?></h2>
        <div class="blogwrap clearfix">
            <div class="page-left">
                <div id="product-list">
                    <ul class="thumbs product-list">
                        <?php foreach ($a_product as $item) { ?>
                            <?= $this->renderPartial('/include/product-item-search', array('item' => $item)); ?>
                        <?php } ?>
                    </ul>
                    <div class="catalog-pagination clearfix">
                        <?php if (count($a_product) < $count_product) { ?>
                            <?php if ($page > 1) { ?>
                                <?= CHtml::link(
                                    '',
                                    array('search/index', 'name' => $name, 'page' => $page - 1),
                                    array('class' => 'pagination-left')
                                ) ?>
                            <?php } ?>
                            <?php for ($i = 1; $i <= $count_pages; $i++) { ?>
                                <?= CHtml::link(
                                    '<span>' . $i . '</span>',
                                    array('search/index', 'name' => $name, 'page' => $i),
                                    array('class' => 'pagination-item page-'. $i . ($page == $i ? ' current' : ''))
                                ) ?>
                            <?php } ?>
                            <?php if ($page < $count_pages) { ?>
                                <?= CHtml::link(
                                    '',
                                    array('search/index', 'name' => $name, 'page' => $page + 1),
                                    array('class' => 'pagination-right')
                                ) ?>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="page-sidebar">
                <?= $this->renderPartial('/include/product-left-category'); ?>
                <?= $this->renderPartial('/include/product-left-link'); ?>
            </div>
        </div>
    </div>
</section>