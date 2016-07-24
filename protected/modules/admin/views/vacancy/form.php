<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link(
                    'Назад',
                    isset($model->id) ? array('view', 'id' => $model->id) : array('index'),
                    array('class' => 'btn btn-default')
                ); ?>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'brand-form',
            'enableAjaxValidation' => false,
            'enableClientValidation' => true,
        )); ?>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'position'); ?></td>
                <td>
                    <?= $form->textField($model, 'position', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'position'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'city'); ?></td>
                <td>
                    <?= $form->textField($model, 'city', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'city'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'salary'); ?></td>
                <td>
                    <?= $form->textField($model, 'salary', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'salary'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'conditions'); ?></td>
                <td>
                    <?= $form->textArea($model, 'conditions', array('class' => 'form-control', 'rows' => 5)); ?>
                    <?= $form->error($model, 'conditions'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'requirements'); ?></td>
                <td>
                    <?= $form->textArea($model, 'requirements', array('class' => 'form-control', 'rows' => 5)); ?>
                    <?= $form->error($model, 'requirements'); ?>
                </td>
            </tr>
        </table>
        <p class="text-center">
            <?= CHtml::submitButton('Сохранить', array('class' => 'btn btn-default text-center')); ?>
        </p>
        <?php $this->endWidget(); ?>
    </div>
</div>