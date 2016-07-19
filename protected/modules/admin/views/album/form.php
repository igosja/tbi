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
            'id' => 'album-form',
            'enableAjaxValidation' => false,
            'enableClientValidation'=>true,
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
                            <td class="col-lg-3"><?= $form->labelEx($model, 'photocategory_id'); ?></td>
                            <td>
                                <?= $form->dropDownList(
                                    $model,
                                    'photocategory_id',
                                    CHtml::listData(PhotoCategory::model()->findAll(),'id','name'),
                                    array('empty' => 'Выберите категорию', 'class' => 'form-control')
                                ); ?>
                                <?= $form->error($model, 'photocategory_id'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-lg-3"><?= $form->labelEx($model, 'Фото'); ?></td>
                            <td>
                                <input type="file" name="image[]" multiple="multiple" class="form-control" />
                            </td>
                        </tr>
                    </table>
                </div>
                <?=$this->renderPartial('/include/seo-form', array('model' => $model, 'form' => $form))?>
            </div>
            <p class="text-center">
                <?= CHtml::submitButton('Сохранить', array('class' => 'btn btn-default text-center')); ?>
            </p>
        <?php $this->endWidget(); ?>
    </div>
</div>