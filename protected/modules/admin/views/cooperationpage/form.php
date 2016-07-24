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
                        <td class="col-lg-3"><?= $form->labelEx($model, 'text_header'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'text_header', array('class' => 'form-control', 'rows' => 10)); ?>
                            <?= $form->error($model, 'text_header'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'designer'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'designer', array('class' => 'form-control', 'rows' => 10)); ?>
                            <?= $form->error($model, 'designer'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'dealer'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'dealer', array('class' => 'form-control', 'rows' => 10)); ?>
                            <?= $form->error($model, 'dealer'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'text_footer'); ?></td>
                        <td>
                            <?= $form->textArea($model, 'text_footer', array('class' => 'form-control', 'rows' => 10)); ?>
                            <?= $form->error($model, 'text_footer'); ?>
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