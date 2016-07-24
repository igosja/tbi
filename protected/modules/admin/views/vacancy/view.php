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
                    <?= $model->getAttributeLabel('position'); ?>
                </td>
                <td>
                    <?= $model->position; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('city'); ?>
                </td>
                <td>
                    <?= $model->city; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('salary'); ?>
                </td>
                <td>
                    <?= $model->salary; ?> грн.
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('conditions'); ?>
                </td>
                <td>
                    <?= $model->conditions; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('requirements'); ?>
                </td>
                <td>
                    <?= $model->requirements; ?>
                </td>
            </tr>
        </table>
    </div>
</div>