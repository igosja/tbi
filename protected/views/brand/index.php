<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $title; ?></h1>
        <div class="catalog-wrap clearfix">
            <div class="blogwrap clearfix">
                <?php for ($i = 0; $i < $count_brand; $i++) { ?>
                    <?php if (in_array($i, array($first_start, $second_start, $third_start, $fourth_start))) { ?>
                        <div class="brands__item">
                    <?php } ?>
                    <?php
                if (!isset($a_brand[$i - 1])
                    || substr($a_brand[$i - 1]->name, 0, 1) != substr($a_brand[$i]->name, 0, 1)
                    || in_array($i, array($first_start, $second_start, $third_start, $fourth_start)))
                {
                    ?>
                    <ul class="brands-list">
                    <li class="brands-list__item">
                        <strong><?= substr($a_brand[$i]->name, 0, 1); ?></strong>
                    </li>
                <?php } ?>
                    <li class="brands-list__item">
                        <?= CHtml::link(
                            $a_brand[$i]->name,
                            array('brand/view', 'id' => $a_brand[$i]->url),
                            array('title' => $a_brand[$i]->name)
                        ) ?>
                    </li>
                    <?php
                if (!isset($a_brand[$i + 1])
                    || substr($a_brand[$i + 1]->name, 0, 1) != substr($a_brand[$i]->name, 0, 1)
                    || in_array($i, array($first_end, $second_end, $third_end, $fourth_end)))
                {
                    ?>
                    </ul>
                <?php } ?>
                    <?php if (in_array($i, array($first_end, $second_end, $third_end, $fourth_end))) { ?>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
