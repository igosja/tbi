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
                    <?= $model->getAttributeLabel('product_id'); ?>
                </td>
                <td>
                    <?php if (isset($model->product->name)) { ?>
                        <?= CHtml::link($model->product->name, array('product/view', 'id' => $model->product_id)); ?>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('image_id'); ?>
                </td>
                <td>
                    <?php if (isset($model->image->url)) { ?>
                        <div class="col-lg-6">
                            <a href="javascript:;" class="thumbnail">
                                <img src="<?= $model->image->url ?>"/>
                            </a>
                        </div>
                    <?php } ?>
                </td>
            </tr>
        </table>
    </div>
</div>