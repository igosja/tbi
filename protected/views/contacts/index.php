<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $title; ?></h1>
        <div class="catalog-wrap">
            <div class="contactswrap clearfix">
                <div class="contacts-left">
                    <div class="contacts-block">
                        <div class="cb-heading">
                            <?= $this->contacts->office_name; ?>
                        </div>
                        <section>
                            <div class="cd-addr">
                                <?= implode('<br/>', explode(';', $this->contacts->office_address)); ?>
                            </div>
                            <div class="cb-phone">
                                <?= implode('<br/>', explode(';', $this->contacts->office_phone)); ?>
                            </div>
                            <a href="javascript:;" class="cb-mail"><?= $this->contacts->office_email; ?></a>
                        </section>
                    </div>
                    <div class="contacts-block">
                        <div class="cb-heading">
                            <?= $this->contacts->salon_name; ?>
                        </div>
                        <section>
                            <div class="cd-addr">
                                <?= implode('<br/>', explode(';', $this->contacts->salon_address)); ?>
                            </div>
                            <div class="cb-phone">
                                <?= implode('<br/>', explode(';', $this->contacts->salon_phone)); ?>
                            </div>
                            <a href="javascript:;" class="cb-mail"><?= $this->contacts->salon_email; ?></a>
                        </section>
                    </div>
                    <article><?= $this->contacts->text; ?></article>
                </div>
                <div class="contacts-right">
                    <?php $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'contacts-form',
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => true,
                    )); ?>
                        <div class="cb-form">
                            <div class="cb-heading">Связаться с нами</div>
                            <section>
                                <?= $form->error($model, 'name'); ?>
                                <?= $form->error($model, 'phone'); ?>
                                <?= $form->error($model, 'email'); ?>
                                <?= $form->error($model, 'message'); ?>
                                <?= $form->textField(
                                    $model,
                                    'name',
                                    array(
                                        'class' => 'cb-text-input',
                                        'placeholder' => $model->getAttributeLabel('name')
                                    )
                                ); ?>
                                <div class="clearfix">
                                    <?= $form->telField(
                                        $model,
                                        'phone',
                                        array(
                                            'class' => 'cb-text-input phone_mask',
                                            'placeholder' => $model->getAttributeLabel('phone')
                                        )
                                    ); ?>
                                    <?= $form->emailField(
                                        $model,
                                        'email',
                                        array(
                                            'class' => 'cb-text-input',
                                            'placeholder' => $model->getAttributeLabel('email')
                                        )
                                    ); ?>
                                </div>
                                <?= $form->textArea(
                                    $model,
                                    'text',
                                    array(
                                        'placeholder' => $model->getAttributeLabel('text')
                                    )
                                ); ?>
                                <p>Будем рады ответить на Ваши вопросы</p>
                                <?= CHtml::submitButton('Отправить'); ?>
                            </section>
                        </div>
                    <?php $this->endWidget(); ?>
                </div>
                <br style="clear:both;">
                <div
                    id="contactsmap"
                    data-officelat="<?= $this->contacts->office_lat; ?>"
                    data-officelng="<?= $this->contacts->office_lng; ?>"
                    data-salonlat="<?= $this->contacts->salon_lat; ?>"
                    data-salonlng="<?= $this->contacts->salon_lng; ?>"
                ></div>
            </div>
        </div>
    </div>
</section>
<?php if(Yii::app()->user->hasFlash('contacts_success')) { ?>
    <script>
        var contacts_call_send = <?= Yii::app()->user->getFlash('contacts_success'); ?>;
    </script>
<?php } ?>