<div class="search-item clearfix">
    <?= CHtml::link(
        '<img src="' . ImageIgosja::resize(
            (isset($item->image[0]->image_id) ? $item->image[0]->image_id : 0), 280, 280
        ) . '">',
        array('product/view', 'id' => $item->url),
        array('class' => 'search-item-img search-item-img__tov')
    ) ?>
    <div class="search-item-text">
        <h4 class="search-item-heading">
            <?= CHtml::link(
                $item->name,
                array('product/view', 'id' => $item->url),
                array('title' => $item->name)
            ) ?>
        </h4>
        <span class="pi-price"><span>от </span><?= $item->price; ?> грн.</span>
        <a href="javascript:;" class="pi-cart" title="В корзину">В корзину</a>
    </div>
</div>