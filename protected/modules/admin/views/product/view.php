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
                    <?= $model->getAttributeLabel('sku'); ?>
                </td>
                <td>
                    <?= $model->sku; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('name'); ?>
                </td>
                <td>
                    <?= $model->name; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('price'); ?>
                </td>
                <td>
                    <?= $model->price; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('category_id'); ?>
                </td>
                <td>
                    <?= $model->category->name; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('view_id'); ?>
                </td>
                <td>
                    <?= $model->view->name; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('brand_id'); ?>
                </td>
                <td>
                    <?= $model->brand->name; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('text'); ?>
                </td>
                <td>
                    <?= $model->text; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('url'); ?>
                </td>
                <td>
                    <?= CHtml::link($model->url, array('/product/view', 'id' => $model->url), array('target' => '_blank')); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('infliction'); ?>
                </td>
                <td>
                    <?= $model->infliction; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('equipment'); ?>
                </td>
                <td>
                    <?= $model->equipment; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('technical_characteristics'); ?>
                </td>
                <td>
                    <?= $model->technical_characteristics; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('youtube'); ?>
                </td>
                <td>
                    <?php $youtube = explode(';', $model->youtube); ?>
                    <?php foreach ($youtube as $item) { ?>
                        <a href="http://youtube.com/watch?v=<?= $item; ?>" target="_blank">
                            Видео
                        </a>
                        <br/>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('sheet_id'); ?>
                </td>
                <td>
                    <?php if (isset($model->sheet->url)) { ?>
                        <a href="<?= $model->sheet->url; ?>">
                            Скачать
                        </a>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('catalog_id'); ?>
                </td>
                <td>
                    <?php if (isset($model->catalog->url)) { ?>
                        <a href="<?= $model->catalog->url; ?>">
                            Скачать
                        </a>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $model->getAttributeLabel('image_id'); ?>
                </td>
                <td>
                    <?php foreach($model->image as $item) { ?>
                        <?php if (isset($item->image->url)) { ?>
                            <div class="col-lg-6">
                                <a href="javascript:;" class="thumbnail">
                                    <img src="<?= $item->image->url; ?>"/>
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>
                    Варианты товара
                </td>
                <td>
                    <?php foreach($model->option as $item) { ?>
                        <?php
                        if (0 == $item->plus) { $price = $model->price - $item->price; }
                        elseif (1 == $item->plus) { $price = $model->price + $item->price; }
                        else { $price = $item->price; }
                        ?>
                        <?= $model->name; ?>, <?= $item->name; ?>, <?= $price; ?> грн.<br/>
                    <?php } ?>
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