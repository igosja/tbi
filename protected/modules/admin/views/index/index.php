<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center">Админ раздел</h1>
    </div>
</div>
<div class="row">
    <?php if ($cart) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= $cart; ?></div>
                            <div>Новые заказы</div>
                        </div>
                    </div>
                </div>
                <?= CHtml::link(
                    '<div class="panel-footer">
                        <span class="pull-left">Подробнее</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>',
                    array('order/index')
                ); ?>
            </div>
        </div>
    <?php } ?>
    <?php if ($call) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-phone fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= $call; ?></div>
                            <div>Обратный звонок</div>
                        </div>
                    </div>
                </div>
                <?= CHtml::link(
                    '<div class="panel-footer">
                        <span class="pull-left">Подробнее</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>',
                    array('call/index')
                ); ?>
            </div>
        </div>
    <?php } ?>
    <?php if ($message) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-envelope fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= $message; ?></div>
                            <div>Сообщения</div>
                        </div>
                    </div>
                </div>
                <?= CHtml::link(
                    '<div class="panel-footer">
                        <span class="pull-left">Подробнее</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>',
                    array('message/index')
                ); ?>
            </div>
        </div>
    <?php } ?>
    <?php if ($vacancy) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= $vacancy; ?></div>
                            <div>Сообщения</div>
                        </div>
                    </div>
                </div>
                <?= CHtml::link(
                    '<div class="panel-footer">
                        <span class="pull-left">Подробнее</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>',
                    array('vacancy/index')
                ); ?>
            </div>
        </div>
    <?php } ?>
</div>