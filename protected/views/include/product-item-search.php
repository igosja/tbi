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
        <span class="pi-price"><span>от </span><?= HelperIgosja::formatPrice($item->price, $this->currency); ?></span>
        <a
            href="javascript:;"
            class="pi-cart add-to-cart"
            data-product="<?= $item->id; ?>"
            data-name="<?= HelperIgosja::productName($item); ?>"
            data-price="<?= HelperIgosja::productPrice($item); ?>"
            title="В корзину"
        >
            В корзину
        </a>
    </div>
</div>