<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <?php foreach ($a_status as $item) { ?>
                <li>
                    <?= CHtml::link(
                        $item->name,
                        array('index', 'id' => $item->id),
                        array('class' => 'btn ' . ($status_id == $item->id ? 'btn-primary' : 'btn-default'))
                    ); ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
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
                'name' => 'date',
                'type' => 'raw',
                'value' => function ($data) {
                    return date('H:i d.m.Y', $data->date);
                }
            ),
            array(
                'name' => 'price',
            ),
            array(
                'name' => 'status_id',
                'type' => 'raw',
                'value' => function ($data) {
                    return $data->status->name;
                }
            ),
            array(
                'class' => 'CButtonColumn',
                'headerHtmlOptions' => array('class' => 'col-lg-1'),
                'template' => '{view} {update}'
            ),
        ),
    )); ?>
</div>