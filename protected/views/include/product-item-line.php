<div class="tov-line">
    <?= CHtml::link(
        '',
        array('product/view', 'id' => $item->url),
        array(
            'class' => 'tov-line__img',
            'style' => 'background-image: url(' . ImageIgosja::resize((isset($item->image[0]->image_id) ? $item->image[0]->image_id : 0), 280, 280) . ');',
        )
    ) ?>
    <div class="tov-line__info">
        <?= CHtml::link(
            $item->name,
            array('product/view', 'id' => $item->url),
            array(
                'class' => 'pi-name',
                'title' => $item->name,
            )
        ) ?>
        <span class="pi-price">
            <span>от </span><?= HelperIgosja::formatPrice($item->price, $this->currency); ?>
        </span>
        <div class="clearfix">
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
            <a href="javascript:;" class="pi-compare" title="Сравнить">Сравнить</a>
        </div>
    </div>
    <div class="tov-line__details">
        <table>
            <tr>
                <td>Артикул:</td>
                <td><?= $item->sku; ?></td>
            </tr>
            <tr>
                <td>Тип товара:</td>
                <td></td>
            </tr>
            <tr>
                <td>Производитель:</td>
                <td></td>
            </tr>
            <tr>
                <td>Упаковка:</td>
                <td></td>
            </tr>
            <tr>
                <td>Применение:</td>
                <td></td>
            </tr>
            <tr>
                <td>Расход:</td>
                <td></td>
            </tr>
            <tr>
                <td>Цвет:</td>
                <td><span class="pi-color" style="background:#FFFFFF;"></span></td>
            </tr>
            <tr>
                <td>Наличие:</td>
                <td></td>
            </tr>
        </table>
    </div>
</div>