<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h2 class="page-heading"><?= $title; ?></h2>
        <div class="orderpage clearfix">
            <?php $form = $this->beginWidget('CActiveForm', array(
                'id' => 'checkout-form',
                'enableAjaxValidation' => false,
                'enableClientValidation' => true,
            )); ?>
                <div class="orderpage-left">
                    <div class="orderpage-subheading">Контактная информация:</div>
                    <?= $form->textField(
                        $model,
                        'name',
                        array(
                            'class' => 'input-fluid',
                            'placeholder' => $model->getAttributeLabel('name')
                        )
                    ); ?>
                    <?= $form->error($model, 'name'); ?>
                    <?= $form->textField(
                        $model,
                        'surname',
                        array(
                            'class' => 'input-fluid',
                            'placeholder' => $model->getAttributeLabel('surname')
                        )
                    ); ?>
                    <?= $form->error($model, 'surname'); ?>
                    <?= $form->telField(
                        $model,
                        'phone',
                        array(
                            'class' => 'input-fluid phone_mask',
                            'placeholder' => $model->getAttributeLabel('phone')
                        )
                    ); ?>
                    <?= $form->error($model, 'phone'); ?>
                    <?= $form->emailField(
                        $model,
                        'email',
                        array(
                            'class' => 'input-fluid input-fluid_nomarg',
                            'placeholder' => $model->getAttributeLabel('email')
                        )
                    ); ?>
                    <?= $form->error($model, 'email'); ?>
                    <div class="checkboxes-tick">
                        <?= $form->checkBox($model, 'subscribe'); ?>
                        <?= $form->labelEx($model, 'subscribe'); ?>
                    </div>
                    <div class="orderpage-subheading">Способы оплаты:</div>
                    <div class="radiobuttons">
                        <?php foreach ($a_payment as $item) { ?>
                            <?= $form->radioButton(
                                $model,
                                'payment_id',
                                array(
                                    'value' => $item->id,
                                    'uncheckValue' => null,
                                    'id' => 'Checkout_payment_id_' . $item->id
                                )
                            ); ?>
                            <?= $form->label(
                                $model,
                                'payment_id',
                                array(
                                    'label' => $item->name,
                                    'for' => 'Checkout_payment_id_' . $item->id
                                )
                            ); ?>
                            <div class="check check_Checkout_payment_id_<?= $item->id; ?>" style="display: none;">
                                <?= $item->text; ?>
                            </div>
                        <?php } ?>
                    </div>
                    <?= $form->error($model, 'payment_id'); ?>
                </div>
                <div class="orderpage-right">
                    <div class="orderpage-subheading">Способы доставки товара:</div>
                    <span style="display:none;">
                        <?= $form->radioButtonList(
                            $model,
                            'shipping_id',
                            CHtml::listData($a_shipping, 'id', 'name')
                        ); ?>
                    </span>
                    <div id="orderpage-tabs" class="tab-container orderpage-tabs" data-shipping-id="<?= $a_shipping[0]->id; ?>">
                        <ul class='etabs clearfix'>
                            <?php foreach ($a_shipping as $item) { ?>
                                <li class='tab'>
                                    <a
                                        href="#shipping_<?= $item->id; ?>"
                                        class="shipping_method_link"
                                        data-shipping-id="<?= $item->id; ?>"
                                        title="<?= $item->name; ?>"
                                    >
                                        <?= $item->name; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                        <?php foreach ($a_shipping as $item) { ?>
                            <?php if (1 == $item->id) { ?>
                                <div id="shipping_<?= $item->id; ?>">
                                    <?= $form->labelEx($model, 'kyiv_address'); ?>
                                    <?= $form->textField($model, 'kyiv_address', array('class' => 'input-fluid')); ?>
                                    <?= $form->error($model, 'kyiv_address'); ?>
                                    <?= $form->labelEx($model, 'kyiv_message'); ?>
                                    <?= $form->textArea($model, 'kyiv_message', array('class' => 'input-fluid')); ?>
                                    <?= $form->error($model, 'kyiv_message'); ?>
                                </div>
                            <?php } elseif (2 == $item->id) { ?>
                                <div id="shipping_<?= $item->id; ?>">
                                    <?= $form->labelEx($model, 'post_city'); ?>
                                    <div class="clearfix">
                                        <div class="orb-select orb-select_short" id="city_select" data-key="<?= $o_newpost->key; ?>">
                                            <?= $form->dropDownList($model, 'post_city', array()); ?>
                                        </div>
                                        <div class="checkboxes-tick">
                                            <?= $form->checkBox($model, 'post_to_door'); ?>
                                            <?= $form->labelEx($model, 'post_to_door'); ?>
                                        </div>
                                    </div>
                                    <?= $form->labelEx($model, 'post_warehouse'); ?>
                                    <div class="orb-select" id="warehouse_select">
                                        <?= $form->dropDownList($model, 'post_warehouse', array()); ?>
                                    </div>
                                    <?= $form->labelEx($model, 'post_address'); ?>
                                    <?= $form->textField($model, 'post_address', array('class' => 'input-fluid', 'disabled' => 'disabled')); ?>
                                </div>
                            <?php } elseif (3 == $item->id) { ?>
                                <div id="shipping_<?= $item->id; ?>">
                                    <table style="margin-bottom:15px;">
                                        <?php foreach ($a_pickup as $item) { ?>
                                            <tr>
                                                <td style="width:300px;">
                                                    <div class="radiobuttons">
                                                        <?= $form->radioButton(
                                                            $model,
                                                            'pickup_id',
                                                            array(
                                                                'value' => $item->id,
                                                                'uncheckValue' => null,
                                                                'id' => 'Checkout_pickup_id_' . $item->id
                                                            )
                                                        ); ?>
                                                        <?= $form->labelEx(
                                                            $model,
                                                            'pickup_id',
                                                            array(
                                                                'label' => $item->name,
                                                                'for' => 'Checkout_pickup_id_' . $item->id
                                                            )
                                                        ); ?>
                                                    </div>
                                                </td>
                                                <td style="width:225px;">
                                                    <a href="javascript:;" class="haddr" title="<?= $item->address; ?>">
                                                        <?= $item->address; ?>
                                                    </a>
                                                </td>
                                                <td style="width:170px;">
                                                    <a href="javascript:;" class="cb-phone" title="<?= $item->phone; ?>">
                                                        <?= $item->phone; ?>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                    <?= $form->labelEx($model, 'pickup_message'); ?>
                                    <?= $form->textArea($model, 'pickup_message', array('class' => 'input-fluid')); ?>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="orderpage-submitarea">
                    <?= CHtml::submitButton('Подтвердить заказ', array('class' => 'profile-btn')); ?>
                </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</section>
