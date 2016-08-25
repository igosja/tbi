<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link('Список', array('index'), array('class' => 'btn btn-default')); ?>
            </li>
            <?php if (0 == $model->status) { ?>
                <li>
                    <?= CHtml::link('Ответить', array('answer', 'id' => $model->id), array('class' => 'btn btn-default')); ?>
                </li>
                <li>
                    <?= CHtml::link('Отметить отвеченным', array('status', 'id' => $model->id), array('class' => 'btn btn-default')); ?>
                </li>
            <?php } ?>
            <li>
                <?= CHtml::link('Удалить', array('delete', 'id' => $model->id), array('class' => 'btn btn-default', 'confirm' => 'Вы уверены, что хотите удалить данный элемент?')); ?>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table">
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
                    <?= $model->getAttributeLabel('date'); ?>
                </td>
                <td>
                    <?= date('H:i d.m.Y', $model->date); ?>
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
                    <?= $model->getAttributeLabel('text'); ?>
                </td>
                <td>
                    <?= $model->text; ?>
                </td>
            </tr>
        </table>
    </div>
</div>