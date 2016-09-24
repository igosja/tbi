<div class="autocomplete-suggestion" data-index="0">
    <?= CHtml::link(
        '<span><img src="' . ImageIgosja::resize(
            (isset($item->image[0]->image_id) ? $item->image[0]->image_id : 0), 48, 48
        ) . '"></span>',
        array('product/view', 'id' => $item->url),
        array('class' => 'autocomplete-img')
    ) ?>
    <span class="autocomplete-info">
        <?= CHtml::link(
            $item->name,
            array('product/view', 'id' => $item->url),
            array('class' => 'name')
        ) ?>
    </span>
</div>