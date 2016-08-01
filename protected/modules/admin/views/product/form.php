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
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
        )); ?>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#main" data-toggle="tab">Общая информация</a></li>
            <li><a href="#seo" data-toggle="tab">SEO</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="main">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'sku'); ?></td>
                        <td>
                            <?= $form->textField($model, 'sku', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'sku'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'name'); ?></td>
                        <td>
                            <?= $form->textField($model, 'name', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'name'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'url'); ?></td>
                        <td>
                            <?= $form->textField($model, 'url', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'url'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'category_id'); ?></td>
                        <td>
                            <?= $form->dropDownList(
                                $model,
                                'category_id',
                                CHtml::listData(Category::model()->findAll(), 'id', 'name'),
                                array('empty' => 'Выберите категорию', 'class' => 'form-control')
                            ); ?>
                            <?= $form->error($model, 'category_id'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'price'); ?></td>
                        <td>
                            <?= $form->textField($model, 'price', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'price'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'image_id'); ?></td>
                        <td>
                            <?php foreach ($model->image as $item) { ?>
                                <?php if (isset($item->image->url)) { ?>
                                    <div class="col-lg-6">
                                        <a href="javascript:;" class="thumbnail">
                                            <img src="<?= $item->image->url; ?>"/>
                                        </a>
                                    </div>
                                    <?= CHtml::link('<i class="fa fa-times"></i>', array('image', 'id' => $item->image_id)); ?>
                                <?php } ?>
                            <?php } ?>
                            <input type="file" name="image[]" class="form-control" multiple="multiple"/>
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