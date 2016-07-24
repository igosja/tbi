<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
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
                    <?= $model->getAttributeLabel('name'); ?>
                </td>
                <td>
                    <?= nl2br($model->name); ?>
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
            <tr>
                <td>
                    <?= $model->getAttributeLabel('text'); ?>
                </td>
                <td>
                    <?= nl2br($model->text); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('seo_title'); ?>
                </td>
                <td>
                    <?= $model->seo_title; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('seo_description'); ?>
                </td>
                <td>
                    <?= $model->seo_description; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('seo_keywords'); ?>
                </td>
                <td>
                    <?= $model->seo_keywords; ?>
                </td>
            </tr>
        </table>
    </div>
</div>