<div class="filtersblock links3">
    <section>
        <?= CHtml::link(
            '<span>Купить</span><div>готовый декор стен</div>',
            array('service/index'),
            array('title' => 'Купить готовый декор стен')
        ); ?>
    </section>
</div>
<div class="filtersblock links3">
    <section>
        <?= CHtml::link(
            '<span>Доставка</span><div>по всей Украине</div>',
            array('delivery/index'),
            array('title' => 'Доставка по всей Украине')
        ); ?>
    </section>
    <section>
        <?= CHtml::link(
            '<span>Различные</span><div>способы оплаты</div>',
            array('payment/index'),
            array('title' => 'Различные способы оплаты')
        ); ?>
    </section>
    <section>
        <?= CHtml::link(
            '<span>Партнерские</span><div>программы</div>',
            array('cooperation/index'),
            array('title' => 'Партнерские программы')
        ); ?>
    </section>
</div>