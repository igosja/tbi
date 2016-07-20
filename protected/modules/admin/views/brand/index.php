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
        'id' => 'brand-grid',
        'itemsCssClass' => 'table table-striped table-bordered',
        'summaryText' => 'Показаны записи <strong>{start}</strong>-<strong>{end}</strong> из <strong>{count}</strong>.',
        'summaryCssClass' => 'text-left',
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
        'pagerCssClass' => '',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'columns' => array(
            array(
                'name' => 'id',
                'headerHtmlOptions' => array('class' => 'col-lg-1'),
            ),
            array(
                'name' => 'name',
            ),
            array(
                'class' => 'CButtonColumn',
                'template'=>'{view}{update}{delete}',
                'headerHtmlOptions' => array('class' => 'col-lg-1'),
                'deleteButtonImageUrl' => false,
                'deleteButtonLabel' => '<i class="fa fa-trash"></i> ',
                'updateButtonImageUrl' => false,
                'updateButtonLabel' => '<i class="fa fa-pencil"></i> ',
                'viewButtonImageUrl' => false,
                'viewButtonLabel' => '<i class="fa fa-eye"></i> ',
            ),
        ),
    )); ?>
</div>