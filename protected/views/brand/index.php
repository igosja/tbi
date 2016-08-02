<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $title; ?></h1>
        <div class="catalog-wrap clearfix">
            <div class="blogwrap clearfix">
                <div class="brands__item">
                    <?php for ($i = 0, $count_brand=count($a_brand); $i<$count_brand; $i++) { ?>
                        <?php if (!isset($a_brand[$i-1]) || substr($a_brand[$i-1]->name, 0, 1) != substr($a_brand[$i]->name, 0, 1)) { ?>
                            <ul class="brands-list">
                                <li class="brands-list__item"><strong><?= substr($a_brand[$i]->name, 0, 1); ?></strong></li>
                        <?php } ?>
                            <li class="brands-list__item">
                                <?= CHtml::link(
                                    $a_brand[$i]->name,
                                    array('brand/view', 'id' => $a_brand[$i]->url),
                                    array('title' => $a_brand[$i]->name)
                                ) ?>
                            </li>
                        <?php if (!isset($a_brand[$i+1]) || substr($a_brand[$i+1]->name, 0, 1) != substr($a_brand[$i]->name, 0, 1)) { ?>
                            </ul>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="brands__item">
                    <?php for ($i = 0, $count_brand=count($a_brand); $i<$count_brand; $i++) { ?>
                        <?php if (!isset($a_brand[$i-1])) { ?>
                            <ul class="brands-list">
                                <li class="brands-list__item"><strong>A</strong></li>
                        <?php } ?>
                            <li class="brands-list__item">
                                <?= CHtml::link(
                                    $a_brand[$i]->name,
                                    array('brand/view', 'id' => $a_brand[$i]->url),
                                    array('title' => $a_brand[$i]->name)
                                ) ?>
                            </li>
                        <?php if (!isset($a_brand[$i+1])) { ?>
                            </ul>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="brands__item">
                    <?php for ($i = 0, $count_brand=count($a_brand); $i<$count_brand; $i++) { ?>
                        <?php if (!isset($a_brand[$i-1])) { ?>
                            <ul class="brands-list">
                                <li class="brands-list__item"><strong>A</strong></li>
                        <?php } ?>
                            <li class="brands-list__item">
                                <?= CHtml::link(
                                    $a_brand[$i]->name,
                                    array('brand/view', 'id' => $a_brand[$i]->url),
                                    array('title' => $a_brand[$i]->name)
                                ) ?>
                            </li>
                        <?php if (!isset($a_brand[$i+1])) { ?>
                            </ul>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="brands__item">
                    <?php for ($i = 0, $count_brand=count($a_brand); $i<$count_brand; $i++) { ?>
                        <?php if (!isset($a_brand[$i-1])) { ?>
                            <ul class="brands-list">
                                <li class="brands-list__item"><strong>A</strong></li>
                        <?php } ?>
                            <li class="brands-list__item">
                                <?= CHtml::link(
                                    $a_brand[$i]->name,
                                    array('brand/view', 'id' => $a_brand[$i]->url),
                                    array('title' => $a_brand[$i]->name)
                                ) ?>
                            </li>
                        <?php if (!isset($a_brand[$i+1])) { ?>
                            </ul>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>s
</section>
