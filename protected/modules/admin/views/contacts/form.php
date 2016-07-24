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
                        <td class="col-lg-3"><?= $form->labelEx($model, 'office_name'); ?></td>
                        <td>
                            <?= $form->textField($model, 'office_name', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'office_name'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'office_address'); ?></td>
                        <td>
                            <?= $form->textField($model, 'office_address', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'office_address'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'office_phone'); ?></td>
                        <td>
                            <?= $form->textField($model, 'office_phone', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'office_phone'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'office_email'); ?></td>
                        <td>
                            <?= $form->textField($model, 'office_email', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'office_email'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'office_lat'); ?></td>
                        <td>
                            <?= $form->textField($model, 'office_lat', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'office_lat'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'office_lng'); ?></td>
                        <td>
                            <?= $form->textField($model, 'office_lng', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'office_lng'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'salon_name'); ?></td>
                        <td>
                            <?= $form->textField($model, 'salon_name', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'salon_name'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'salon_address'); ?></td>
                        <td>
                            <?= $form->textField($model, 'salon_address', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'salon_address'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'salon_phone'); ?></td>
                        <td>
                            <?= $form->textField($model, 'salon_phone', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'salon_phone'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'salon_email'); ?></td>
                        <td>
                            <?= $form->textField($model, 'salon_email', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'salon_email'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'salon_lat'); ?></td>
                        <td>
                            <?= $form->textField($model, 'salon_lat', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'salon_lat'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'salon_lng'); ?></td>
                        <td>
                            <?= $form->textField($model, 'salon_lng', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'salon_lng'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'text'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'text', array('class' => 'form-control', 'rows' => 10)); ?>
                            <?= $form->error($model, 'text'); ?>
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