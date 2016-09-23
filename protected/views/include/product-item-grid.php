<div class="popularitem">
    <div class="pi-top" style="height: 374px;">
        <?= CHtml::link(
            '',
            array('product/view', 'id' => $item->url),
            array(
                'class' => 'pi-img',
                'style' => 'background-image: url(' . ImageIgosja::resize((isset($item->image[0]->image_id) ? $item->image[0]->image_id : 0), 280, 280) . ');',
            )
        ) ?>
        <?= CHtml::link(
            $item->name,
            array('product/view', 'id' => $item->url),
            array('class' => 'pi-name', 'title' => $item->name)
        ) ?>
        <span class="pi-price">
            <span>от </span><?= $item->price; ?> грн.
        </span>
    </div>
    <div class="clearfix">
        <a href="javascript:;" class="pi-cart" title="В корзину">В корзину</a>
        <a href="javascript:;" class="pi-compare" title="Сравнить">Сравнить</a>
    </div>
    <div class="pi-details">
        <table>
            <tr>
                <td>Артикул:</td>
                <td><?= $item->sku; ?></td>
            </tr>
            <tr>
                <td>Тип товара:</td>
                <td>Другое</td>
            </tr>
            <tr>
                <td>Производитель:</td>
                <td></td>
            </tr>
            <tr>
                <td>Упаковка:</td>
                <td> </td>
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
                <td><span class="pi-color" style="background:;"></span></td>
            </tr>
            <tr>
                <td>Наличие:</td>
                <td></td>
            </tr>
        </table>
    </div>
</div>
