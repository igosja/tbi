<?php $this->widget('zii.widgets.CBreadcrumbs', array(
    'separator' => ' ',
    'activeLinkTemplate' => '<a href="{url}" title="{label}">{label}</a>',
    'inactiveLinkTemplate' => '<span>{label}</span>',
    'tagName' => 'div',
    'htmlOptions' => array('class' => 'breadcrumbs'),
    'links' => $this->breadcrumbs,
)); ?>