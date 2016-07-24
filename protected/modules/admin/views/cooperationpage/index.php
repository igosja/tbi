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
                    <?= $model->getAttributeLabel('text_header'); ?>
                </td>
                <td>
                    <?= nl2br($model->text_header); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('designer'); ?>
                </td>
                <td>
                    <?= nl2br($model->designer); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('dealer'); ?>
                </td>
                <td>
                    <?= nl2br($model->dealer); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('text_footer'); ?>
                </td>
                <td>
                    <?= nl2br($model->text_footer); ?>
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