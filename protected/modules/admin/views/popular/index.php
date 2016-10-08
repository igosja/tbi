<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link('Создать', array('update'), array('class' => 'btn btn-default')); ?>
            </li>
        </ul>
    </div>
</div>
<?= $this->renderPartial('/include/grid-view-text'); ?>
<div class="col-lg-12">
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => $model->search(),
        'itemsCssClass' => 'table table-striped table-bordered',
        'htmlOptions' => array('data-controller' => $this->uniqueid),
        'pager' => array(
            'header' => '',
            'footer' => '',
            'internalPageCssClass' => '',
            'nextPageLabel' => '>',
            'lastPageLabel' => '>>',
            'nextPageCssClass' => 'next',
            'lastPageCssClass' => 'next',
            'prevPageLabel' => '<',
            'firstPageLabel' => '<<',
            'previousPageCssClass' => 'prev',
            'firstPageCssClass' => 'prev',
            'selectedPageCssClass' => 'active',
            'htmlOptions' => array('class' => 'pagination'),
        ),
        'pagerCssClass' => 'pager-css-class',
        'summaryCssClass' => 'text-left',
        'summaryText' => 'Показаны записи <strong>{start}</strong>-<strong>{end}</strong> из <strong>{count}</strong>.',
        'columns' => array(
            array(
                'name' => 'id',
                'headerHtmlOptions' => array('class' => 'col-lg-1, col-md-1, col-sm-1, col-xs-1'),
            ),
            array(
                'name' => 'product_id',
                'type' => 'raw',
                'value' => function($data) {
                    if (isset($data->product->name)) {
                        return CHtml::link($data->product->name, array('product/view', 'id' => $data->product_id));
                    }
                    return '';
                },
            ),
        ),
    )); ?>
</div>