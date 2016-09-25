<?php $total = 0; ?>
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
                    <li class='tab'>
                        <?= CHtml::link('Мои заказы', array('orders'), array('title' => 'Мои заказы')); ?>
                    </li>
                </ul>
                <div class="order-wrap clearfix">
                    <div class="order-left">
                        <div class="order-left-block">
                            <div class="orb-heading">Доставка</div>
                            <section>
                                <h3 class="order-lefthead"><?= $o_order->shipping; ?></h3>
                                <p><?= $o_order->name; ?> <?= $o_order->surname; ?><br><?= $o_order->phone; ?></p>
                            </section>
                        </div>

                        <div class="order-left-block">
                            <div class="orb-heading">Оплата</div>
                            <section>
                                <h3 class="order-lefthead"><?= $o_order->payment; ?></h3>
                            </section>
                        </div>
                    </div>
                    <div class="order-right">
                        <div class="order-topstatus">
                            <span class="blog-item-date"><?= date('H:i d.m.Y', $o_order->date); ?></span>
                            <span class="order-statustext"><?= $o_order->status->name; ?></span>
                        </div>
                        <div class="order-table">
                            <table>
                                <tr>
                                    <td>Наименование</td>
                                    <td>Количество</td>
                                    <td>Итого</td>
                                </tr>
                                <?php foreach ($o_order->product as $item) { ?>
                                    <tr>
                                        <td>
                                            <?php if (isset($item->product->url)) { ?>
                                                <?= CHtml::link(
                                                    $item->product->name,
                                                    array('product/view', 'id' => $item->product->url),
                                                    array('title' => $item->product->name)
                                                ); ?>
                                            <?php } else { ?>
                                                <a href="javascript:;"><?= $item->product_name; ?></a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <span>
                                                <strong><?= $item->quantity; ?></strong>
                                                <i>х</i>
                                                <?= HelperIgosja::formatPrice($item->price, $this->currency); ?>
                                            </span>
                                        </td>
                                        <td>
                                            <span><?= HelperIgosja::formatPrice($item->quantity * $item->price, $this->currency); ?></span>
                                        </td>
                                    </tr>
                                    <?php $total = $total + $item->quantity * $item->price; ?>
                                <?php } ?>
                            </table>
                        </div>
                        <div class="order-summary">
                            <table>
                                <tr>
                                    <td>Подытог</td>
                                    <td><?= $total; ?> UAH</td>
                                </tr>
                                <tr>
                                    <td>Скидка</td>
                                    <td>0,00 UAH</td>
                                </tr>

                                <tr>
                                    <td>Итого</td>
                                    <td><?= HelperIgosja::formatPrice($total, $this->currency); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>