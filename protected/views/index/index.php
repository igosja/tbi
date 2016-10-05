<section class="mainsliderwrap bxunstyled">
    <div class="mainslider">
        <?php for ($i = 0; $i < count($a_slide); $i++) { ?>
            <div
                class="slide"
                style="background-image:url(<?= ImageIgosja::resize($a_slide[$i]->image_id, 1600, 450); ?>);"
                data-slidenumber="<?= $i; ?>"></div>
        <?php } ?>
    </div>
    <div class="slideproduct-contents">
        <div class="slideproduct-wrap">
            <div class="slideproduct">
                <?php for ($i = 0; $i < count($a_slide); $i++) { ?>
                    <?php if (isset($a_slide[$i]->product->name)) { ?>
                        <div class="slideproduct-content ms-<?= $i; ?>">
                            <div class="sp-name"><span><?= $a_slide[$i]->product->name; ?></span></div>
                            <?= CHtml::link(
                                'ПОДРОБНЕЕ О ТОВАРЕ',
                                array('product/view', 'id' => $a_slide[$i]->product->url),
                                array('class' => 'sp-btn')
                            ) ?>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="main3buttons">
    <div class="wrap clearfix">
        <?= CHtml::link(
            '<img src="/img/main1btn.png" alt="" style="top:34px;">
            <strong>Доставка</strong>
            <span>по всей Украине</span>',
            array('delivery/index'),
            array('title' => 'Доставка по всей Украине')
        ); ?>
        <?= CHtml::link(
            '<img src="/img/main2btn.png" alt="" style="top:24px;">
            <strong>Различные</strong>
            <span>способы оплаты</span>',
            array('payment/index'),
            array('title' => 'Различные способы оплаты')
        ); ?>
        <?= CHtml::link(
            '<img src="/img/main4btn.png" alt="" style="top:24px;">
            <strong>Партнерские</strong>
            <span>программы</span>',
            array('cooperation/index'),
            array('title' => 'Партнерские программы')
        ); ?>
    </div>
</section>
<section class="maincatblocks">
    <div class="wrap clearfix">
        <?php if (isset($a_category[0])) { ?>
            <?= CHtml::link(
                '<div><span>' . $a_category[0]->name . '</span></div>
                <span class="mcbbtn"><span>Смотреть каталог</span></span>',
                array('category/view', 'id' => $a_category[0]->url),
                array(
                    'class' => 'mcb-left',
                    'style' => 'background-image:url(' . ImageIgosja::resize($a_category[0]->image_id, 380, 530) . ');',
                    'title' => $a_category[0]->name,
                )
            ); ?>
        <?php } ?>
        <div class="mcb-right">
            <?php foreach (array_slice($a_category, 1) as $item) { ?>
                <?= CHtml::link(
                    '<div><span>' . $item->name . '</span></div>
                    <span class="mcbbtn"><span>Смотреть каталог</span></span>',
                    array('category/view', 'id' => $item->url),
                    array(
                        'style' => 'background-image:url(' . ImageIgosja::resize($item->image_id, 380, 250) . ');',
                        'title' => $item->name,
                    )
                ); ?>
            <?php } ?>
        </div>
    </div>
</section>
<section class="mainabout">
    <div class="wrap">
        <h3 class="section-heading"><?= $o_mainpage->text_title; ?></h3>
        <div class="ma-text clearfix">
            <div class="ma-left">
                <?= $o_mainpage->text_left; ?>
            </div>
            <div class="ma-right">
                <?= $o_mainpage->text_right; ?>
            </div>
        </div>
    </div>
</section>
<section class="brandssliderwrap bxunstyled">
    <div class="wrap clearfix">
        <h4 class="section-heading section-heading_brands">БРЕНДЫ</h4>
        <div>
            <div class="brandsslider">
                <?php foreach ($a_brand as $item) { ?>
                    <div class="slide">
                        <div>
                            <div>
                                <?= CHtml::link(
                                    '<img src="' . ImageIgosja::resize($item->image_id, 200, 150) . '" alt="' . $item->name . '">',
                                    array('brand/view', 'id' => $item->url)
                                ); ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?= CHtml::link(
            'Все бренды',
            array('brand/index'),
            array('class' => 'section__link', 'title' => 'Все бренды')
        ); ?>
    </div>
</section>
<?= $this->renderPartial('/include/popular'); ?>
<section class="mainnews">
    <div class="wrap">
        <h4 class="section-heading">Новости</h4>
        <div class="mn-grid clearfix">
            <?php foreach ($a_blog as $item) { ?>
                <?= CHtml::link(
                    '<span class="mn-img" style="background-image:url(' . ImageIgosja::resize($item->image_id, 600, 327) . ');"></span>
                    <span class="mn-heading">' . $item->name . '</span>
                    <span class="mn-date">' . date('H:i d.m.Y', $item->date) . '</span>',
                    array('blog/view', 'id' => $item->url),
                    array('class' => 'mn-item', 'title' => $item->name)
                ); ?>
            <?php } ?>
        </div>
    </div>
</section>