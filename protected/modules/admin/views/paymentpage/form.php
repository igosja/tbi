<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link('Назад', array('index'), array('class' => 'btn btn-default')); ?>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'mainpage-form',
            'enableAjaxValidation' => false,
            'enableClientValidation' => true,
        )); ?>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#main" data-toggle="tab">Общее</a></li>
            <li><a href="#seo" data-toggle="tab">SEO</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="main">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'text'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'text', array('class' => 'form-control', 'rows' => 10)); ?>
                            <?= $form->error($model, 'text'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'card_name'); ?></td>
                        <td>
                            <?= $form->textField($model, 'card_name', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'card_name'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'card_text'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'card_text', array('class' => 'form-control', 'rows' => 10)); ?>
                            <?= $form->error($model, 'card_text'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'cash_name'); ?></td>
                        <td>
                            <?= $form->textField($model, 'cash_name', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'cash_name'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'cash_text'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'cash_text', array('class' => 'form-control', 'rows' => 10)); ?>
                            <?= $form->error($model, 'cash_text'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'receipt_name'); ?></td>
                        <td>
                            <?= $form->textField($model, 'receipt_name', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'receipt_name'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'receipt_text'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'receipt_text', array('class' => 'form-control', 'rows' => 10)); ?>
                            <?= $form->error($model, 'receipt_text'); ?>
                        </td>
                    </tr>
                </table>
            </div>
            <?= $this->renderPartial('/include/seo-form', array('model' => $model, 'form' => $form)) ?>
        </div>
        <p class="text-center">
            <?= CHtml::submitButton('Сохранить', array('class' => 'btn btn-default text-center')); ?>
        </p>
        <?php $this->endWidget(); ?>
    </div>
</div>