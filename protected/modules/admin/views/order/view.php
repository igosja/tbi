<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link('Список', array('index'), array('class' => 'btn btn-default')); ?>
            </li>
            <li>
                <?= CHtml::link('Редактировать', array('update', 'id' => $model->id), array('class' => 'btn btn-default')); ?>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('date'); ?>
                </td>
                <td>
                    <?= date('H:i d.m.Y', $model->date); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('status_id'); ?>
                </td>
                <td>
                    <?= $model->status->name; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('price'); ?>
                </td>
                <td>
                    <?= $model->price; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('product'); ?>
                </td>
                <td>
                    <?php foreach ($model->product as $item) { ?>
                        <?= CHtml::link($item->product_name, array('product/view', 'id' => $item->product_id)); ?>
                        <?= $item->quantity; ?> шт. x <?= $item->price; ?> грн.<br/>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('user_id'); ?>
                </td>
                <td>
                    <?= CHtml::link($model->user->username, array('user/view', 'id' => $model->user_id)); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('name'); ?>
                </td>
                <td>
                    <?= $model->name; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('surname'); ?>
                </td>
                <td>
                    <?= $model->surname; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('phone'); ?>
                </td>
                <td>
                    <?= $model->phone; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('email'); ?>
                </td>
                <td>
                    <?= $model->email; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('payment'); ?>
                </td>
                <td>
                    <?= $model->payment; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('shipping'); ?>
                </td>
                <td>
                    <?= $model->shipping; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('address'); ?>
                </td>
                <td>
                    <?= $model->address; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('message'); ?>
                </td>
                <td>
                    <?= $model->message; ?>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center page-header">
            История статусов
        </h3>
        <table class="table">
            <?php foreach ($a_status as $item) { ?>
                <tr>
                    <td class="col-lg-6">
                        <?= $item->status; ?>
                    </td>
                    <td>
                        <?= date('H:i d.m.Y', $item->date); ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>