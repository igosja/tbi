<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h2 class="page-heading"><?= $title; ?></h2>
        <div class="userwrap clearfix">
            <div id="user-tabs" class="tab-container">
                <ul class='etabs clearfix'>
                    <li class='tab'>
                        <?= CHtml::link('Мой профиль', array('index'), array('title' => 'Мой профиль')); ?>
                    </li>
                    <li class='tab active'>
                        <a class="active" href="javascript:;" title="Мои заказы">Мои заказы</a>
                    </li>
                </ul>
                <div class="orders-table">
                    <table>
                        <tr>
                            <td>ID заказа</td>
                            <td>Статус</td>
                            <td>Товары</td>
                            <td>Способ доставки</td>
                            <td>Способ оплаты</td>
                            <td>Дата</td>
                        </tr>
                        <?php foreach ($a_order as $item) { ?>
                            <tr>
                                <td>
                                    <?= CHtml::link(
                                        '#' . $item->id,
                                        array('order', 'id' => $item->id),
                                        array('title' => $item->id)
                                    ); ?>
                                </td>
                                <td><?= $item->status->name; ?></td>
                                <td>
                                    <?php foreach ($item->product as $product) { ?>
                                        <?php if (isset($product->product->url)) { ?>
                                            <?= CHtml::link(
                                                $product->product->name,
                                                array('product/view', 'id' => $product->product->url),
                                                array('title' => $product->product->name)
                                            ); ?>
                                        <?php } else { ?>
                                            <a href="javascript:;"><?= $product->product_name ?></a>
                                        <?php } ?>
                                    <?php } ?>
                                </td>
                                <td><?= $item->shipping; ?></td>
                                <td><?= $item->payment; ?></td>
                                <td><?= date('d.m.Y', $item->date); ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>