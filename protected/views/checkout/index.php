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
                        <?= $form->radioButtonList(
                            $model,
                            'shipping_id',
                            CHtml::listData($a_shipping, 'id', 'name')
                        ); ?>
                        <div class="check">Оплата наличными при получении товара</div>
                    </div>
                </div>
                <div class="orderpage-right">
                    <div class="orderpage-subheading">Способы доставки товара:</div>
                    <span style="display:none;">
                        <?= $form->radioButtonList(
                            $model,
                            'payment_id',
                            CHtml::listData($a_payment, 'id', 'name')
                        ); ?>
                    </span>
                    <div id="orderpage-tabs" class="tab-container orderpage-tabs">
                        <ul class='etabs clearfix'>
                            <li class='tab'><a href="#courier" class="shipping_method_link" data-shipping-id="1"
                                               title="Доставка по Киеву">Доставка по Киеву</a></li>
                            <li class='tab'><a href="#transporter" class="shipping_method_link" data-shipping-id="6"
                                               title="Доставка по Украине">Доставка по Украине
                                    <span>(Новая почта)</span></a></li>
                            <li class='tab'><a href="#pickup" class="shipping_method_link" data-shipping-id="2"
                                               title="Самовывоз">Самовывоз <span>(Киев)</span></a></li>
                        </ul>
                        <div id="courier">
                            <?= $form->labelEx($model, 'kyiv_address'); ?>
                            <?= $form->textField($model, 'kyiv_address', array('class' => 'input-fluid')); ?>
                            <?= $form->error($model, 'kyiv_address'); ?>
                            <?= $form->labelEx($model, 'kyiv_message'); ?>
                            <?= $form->textArea($model, 'kyiv_message', array('class' => 'input-fluid')); ?>
                            <?= $form->error($model, 'kyiv_message'); ?>
                        </div>

                        <div id="transporter">
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

                        <div id="pickup">
                            <?= $form->radioButtonList(
                                $model,
                                'pickup',
                                CHtml::listData($a_pickup, 'id', 'name')
                            ); ?>
                            <table style="margin-bottom:15px;">
                                <tbody>
                                <tr>
                                    <td style="width:300px;">
                                        <div class="radiobuttons">
                                            <input id="1" type="radio" name="rate_id[2]" value="1">
                                            <label for="1"><span>Салон "VOGUE INTERIORS"</span></label>
                                        </div>
                                    </td>
                                    <td style="width:225px;"><a href="javascript:;" class="haddr"
                                                                title="ул. Гоголевская, 15">ул. Гоголевская, 15</a></td>
                                    <td style="width:170px;"><a href="javascript:;" class="cb-phone"
                                                                title="(044) 482-01-01">(044) 482-01-01</a></td>
                                </tr>
                                <tr>
                                    <td style="width:300px;">
                                        <div class="radiobuttons">
                                            <input id="2" type="radio" name="rate_id[2]" value="2">
                                            <label for="2"><span>Компания "ТБИ"</span></label>
                                        </div>
                                    </td>
                                    <td style="width:225px;"><a href="javascript:;" class="haddr"
                                                                title="ул. Гоголевская, 23">ул. Гоголевская, 23</a></td>
                                    <td style="width:170px;"><a href="javascript:;" class="cb-phone"
                                                                title="(050) 481-01-01">(050) 481-01-01</a></td>
                                </tr>
                                </tbody>
                            </table>
                            <label for="">Ваше сообщение:</label>
                            <textarea name="" id="2-comment" class="input-fluid"></textarea>
                        </div>

                    </div>
                </div>
                <div class="orderpage-submitarea">
                    <?= CHtml::submitButton('Подтвердить заказ', array('class' => 'profile-btn')); ?>
                </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</section>
