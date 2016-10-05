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
        'afterAjaxUpdate' => 'function(id, data){CGridViewAfterAjax()}',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'itemsCssClass' => 'table table-striped table-bordered sort-table',
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
        'rowCssClass' => array('sorter'),
        'rowHtmlOptionsExpression' => 'array("data-id" => $data->id, "data-controller" => "' . $this->uniqueid . '")',
        'summaryCssClass' => 'text-left',
        'summaryText' => 'Показаны записи <strong>{start}</strong>-<strong>{end}</strong> из <strong>{count}</strong>.',
        'columns' => array(
            array(
                'headerHtmlOptions' => array('class' => 'col-lg-1, col-md-1, col-sm-1, col-xs-1'),
                'name' => 'id',
            ),
            array(
                'filter' => false,
                'headerHtmlOptions' => array('class' => 'col-lg-6 col-md-6'),
                'name' => 'image_id',
                'type' => 'raw',
                'value' => function ($data) {
                    $result = '';
                    if (isset($data->image->url)) {
                        $result = '<div class="col-lg-12">
                                        <a href="javascript:;" class="thumbnail">
                                            <img src="' . $data->image->url . '"/>
                                        </a>
                                    </div>';
                    }
                    return $result;
                }
            ),
            array(
                'filter' => false,
                'name' => 'product_id',
                'type' => 'raw',
                'value' => function ($data) {
                    $result = '';
                    if (isset($data->product->name)) {
                        $result = CHtml::link($data->product->name, array('product/view', 'id' => $data->product_id));
                    }
                    return $result;
                }
            ),
            array(
                'filter' => false,
                'name' => 'status',
                'headerHtmlOptions' => array('class' => 'col-lg-1, col-md-1, col-sm-1, col-xs-1'),
                'type' => 'raw',
                'value' => function ($data) {
                    if (1 == $data->status) {
                        $checked = 'checked';
                    } else {
                        $checked = '';
                    }
                    $input = '<input
                                class="status"
                                data-id="' . $data->id . '"
                                type="checkbox" ' . $checked . '
                                data-toggle="toggle"
                                data-size="mini"
                                data-onstyle="success"
                              />';
                    return $input;
                }
            ),
            array(
                'class' => 'CButtonColumn',
                'headerHtmlOptions' => array('class' => 'col-lg-1'),
            ),
        ),
    )); ?>
</div>