<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center">Админ раздел</h1>
    </div>
</div>
<div class="row">
    <?php if ($this->cart) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= $this->cart; ?></div>
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
    <?php if ($this->call) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-phone fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= $this->call; ?></div>
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
    <?php if ($this->message) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-envelope fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= $this->message; ?></div>
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
    <?php if ($this->resume) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= $this->resume; ?></div>
                            <div>Резюме</div>
                        </div>
                    </div>
                </div>
                <?= CHtml::link(
                    '<div class="panel-footer">
                        <span class="pull-left">Подробнее</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>',
                    array('resume/index')
                ); ?>
            </div>
        </div>
    <?php } ?>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> График заказов
            </div>
            <div class="panel-body">
                <div id="index-order-chart"></div>
            </div>
        </div>
    </div>
</div>
<script>
    var order_date = [<?= $order_date; ?>];
    var order_summ = [<?= $order_summ; ?>];
</script>