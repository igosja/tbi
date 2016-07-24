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
                    <?= $model->getAttributeLabel('office_name'); ?>
                </td>
                <td>
                    <?= nl2br($model->office_name); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('office_address'); ?>
                </td>
                <td>
                    <?= nl2br($model->office_address); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('office_phone'); ?>
                </td>
                <td>
                    <?= nl2br($model->office_phone); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('office_email'); ?>
                </td>
                <td>
                    <?= nl2br($model->office_email); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('office_lat'); ?>
                </td>
                <td>
                    <?= nl2br($model->office_lat); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('office_lng'); ?>
                </td>
                <td>
                    <?= nl2br($model->office_lng); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('salon_name'); ?>
                </td>
                <td>
                    <?= nl2br($model->salon_name); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    <?= $model->getAttributeLabel('salon_address'); ?>
                </td>
                <td>
                    <?= nl2br($model->salon_address); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('salon_phone'); ?>
                </td>
                <td>
                    <?= nl2br($model->salon_phone); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('salon_email'); ?>
                </td>
                <td>
                    <?= nl2br($model->salon_email); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('salon_lat'); ?>
                </td>
                <td>
                    <?= nl2br($model->salon_lat); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('salon_lng'); ?>
                </td>
                <td>
                    <?= nl2br($model->salon_lng); ?>
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