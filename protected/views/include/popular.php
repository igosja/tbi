<section class="popularitems">
    <div class="wrap">
        <h4 class="section-heading">Популярные товары</h4>
        <div class="popularitemsgrid clearfix">
            <?php foreach ($this->a_popular as $item) { ?>
                <div class="popularitem">
                    <div class="pi-top" style="height: 334px;">
                        <?= CHtml::link(
                            '',
                            array('product/view', 'id' => $item->product->url),
                            array(
                                'class' => 'pi-img',
                                'title' => $item->product->name,
                                'style' => 'background-image: url('
                                    . ImageIgosja::resize(
                                        (isset($item->product->image[0]->image_id)
                                            ? $item->product->image[0]->image_id : 0),
                                        280,
                                        280
                                    ) . ')',
                            )
                        ); ?>
                        <?= CHtml::link(
                            $item->product->name,
                            array('product/view', 'id' => $item->product->url),
                            array('class' => 'pi-name', 'title' => $item->product->name)
                        ); ?>
                        <span class="pi-price">
                            <span>от </span> <?= HelperIgosja::formatPrice($item->product->price, $this->currency); ?>
                        </span>
                    </div>
                    <div class="clearfix">
                        <a
                            href="javascript:;"
                            data-product="<?= $item->product->id; ?>"
                            data-name="<?= HelperIgosja::productName($item->product); ?>"
                            data-price="<?= HelperIgosja::productPrice($item->product); ?>"
                            class="add-to-cart pi-cart"
                            title="В корзину"
                        >
                            В корзину
                        </a>
                        <a href="javascript:;" class="pi-compare" title="Сравнить">
                            Сравнить
                        </a>
                    </div>
                    <div class="pi-details">
                        <table>
                            <tr>
                                <td>Артикул:</td>
                                <td><?= $item->product->sku; ?></td>
                            </tr>
                            <tr>
                                <td>Тип товара:</td>
                                <td>Декоративные краски</td>
                            </tr>
                            <tr>
                                <td>Производитель:</td>
                                <td>Novacolor</td>
                            </tr>
                            <tr>
                                <td>Упаковка:</td>
                                <td>5 kg</td>
                            </tr>
                            <tr>
                                <td>Применение:</td>
                                <td>Интерьер</td>
                            </tr>
                            <tr>
                                <td>Расход:</td>
                                <td>0.15</td>
                            </tr>
                            <tr>
                                <td>Цвет:</td>
                                <td><span class="pi-color" style="background:;"></span></td>
                            </tr>
                            <tr>
                                <td>Наличие:</td>
                                <td>В наличии</td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>