<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h2 class="page-heading"><?= $title; ?></h2>
        <div class="userwrap clearfix">
            <div id="user-tabs" class="tab-container">
                <ul class='etabs clearfix'>
                    <li class='tab active'>
                        <a class="active" href="javascript:;" title="Мой профиль">Мой профиль</a>
                    </li>
                    <li class='tab'>
                        <a href="javascript:;" title="Мои заказы">Мои заказы</a>
                    </li>
                </ul>
                <div class="profile-form profile-static">
                    <div class="user-type">
                        <small>Тип клиента:</small> Конечный потребитель
                    </div>
                    <div class="clearfix">
                        <div class="profile-form__left">
                            <ul class="profile-list">
                                <li>
                                    <h4 class="profile-list__title">Контактные данные:</h4>
                                </li>
                                <li>
                                    <small><?= $o_user->getAttributeLabel('name'); ?>:</small>
                                    <span><?= $o_user->name; ?></span>
                                </li>
                                <li>
                                    <small><?= $o_user->getAttributeLabel('surname'); ?>:</small>
                                    <span><?= $o_user->surname; ?></span>
                                </li>
                                <li>
                                    <small><?= $o_user->getAttributeLabel('phone'); ?>:</small>
                                    <span><?= $o_user->phone; ?></span>
                                </li>
                                <li>
                                    <small><?= $o_user->getAttributeLabel('email'); ?>:</small>
                                    <span><?= $o_user->email; ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="profile-form__center">
                            <ul class="profile-list">
                                <li>
                                    <h4 class="profile-list__title">Адрес:</h4>
                                </li>
                                <li>
                                    <small><?= $o_user->getAttributeLabel('country_id'); ?>:</small>
                                    <span><?= isset($o_user->country->name) ? $o_user->country->name : ''; ?></span>
                                </li>
                                <li>
                                    <small><?= $o_user->getAttributeLabel('region_id'); ?>:</small>
                                    <span><?= isset($o_user->region->name) ? $o_user->region->name : ''; ?></span>
                                </li>
                                <li>
                                    <small><?= $o_user->getAttributeLabel('zip'); ?>:</small>
                                    <span><?= $o_user->zip; ?></span>
                                </li>
                                <li>
                                    <small><?= $o_user->getAttributeLabel('city'); ?>:</small>
                                    <span><?= $o_user->city; ?></span>
                                </li>
                                <li>
                                    <small><?= $o_user->getAttributeLabel('street'); ?>:</small>
                                    <span><?= $o_user->street; ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="profile-form__right">
                            <h4 class="profile-list__title">Присоедините соц. сети:</h4>
                            <div class="profile-soclist clearfix">
                                <a href="javascript:;" class="profile-soclist__link profile-soclist__link_tw" title="Подключено">
                                    Подключено
                                </a>
                            </div>
                            <div class="profile-soclist clearfix">
                                <a href="javascript:;" class="profile-soclist__link profile-soclist__link_vk" title="Подключено">
                                    Подключено
                                </a>
                            </div>
                            <div class="profile-soclist clearfix">
                                <a href="javascript:;" class="profile-soclist__link profile-soclist__link_fb" title="Подключено">
                                    Подключено
                                </a>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $("div.profile-form__right a").click(function () {
                                var left = (screen.width - 600) / 2;
                                var top = (screen.height - 500) / 2;
                                window.open($(this).attr('href'),'oauth', "width=600,height=500,left="+left+",top="+top+",status=no,toolbar=no,menubar=no");
                                return false;
                            });
                        </script>
                    </div>
                    <section class="clearfix">
                        <a href="javascript:;" class="profile-btn profileEditToggle profile-btn-center" title="Редактировать Данные">
                            Редактировать Данные
                        </a>
                    </section>
                </div>
                <div class="profile-form profile-editing">
                    <?php $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'account-form',
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => true,
                        'htmlOptions' => array('class' => 'profile-form profile-editing'),
                    )); ?>
                        <div class="clearfix">
                            <div class="profile-form__left" style="padding-left:20px;">
                                <h4 class="profile-list__title">Контактные данные:</h4>
                                <?= $form->labelEx($o_user, 'name'); ?>
                                <?= $form->textField($o_user, 'name'); ?>
                                <?= $form->error($o_user, 'name'); ?>
                                <?= $form->labelEx($o_user, 'surname'); ?>
                                <?= $form->textField($o_user, 'surname'); ?>
                                <?= $form->error($o_user, 'surname'); ?>
                                <?= $form->labelEx($o_user, 'phone'); ?>
                                <?= $form->telField($o_user, 'phone', array('class' => 'phone_mask')); ?>
                                <?= $form->error($o_user, 'phone'); ?>
                                <?= $form->labelEx($o_user, 'email'); ?>
                                <?= $form->emailField($o_user, 'email'); ?>
                                <?= $form->error($o_user, 'email'); ?>
                                <div id="password_change_block" style="display:none;">
                                    <?= $form->labelEx($o_user, 'password_new'); ?>
                                    <?= $form->passwordField($o_user, 'password_new'); ?>
                                    <?= $form->error($o_user, 'password_new'); ?>
                                    <?= $form->labelEx($o_user, 'password_repeat'); ?>
                                    <?= $form->passwordField($o_user, 'password_repeat'); ?>
                                    <?= $form->error($o_user, 'password_repeat'); ?>
                                </div>
                                <a
                                    href="javascript:;"
                                    class="profile-btn__pasw"
                                    id="password_change_link"
                                    title="Изменить пароль"
                                >Изменить пароль</a>
                            </div>
                            <div class="profile-form__right_big">
                                <h4 class="profile-list__title">Адрес:</h4>
                                <div class="clearfix">
                                    <div class="profile-inleft">
                                        <?= $form->labelEx($o_user, 'country_id'); ?>
                                        <div class="profile-select">
                                            <?= $form->dropDownList(
                                                $o_user,
                                                'country_id',
                                                CHtml::listData($a_country, 'id', 'name')
                                            ); ?>
                                        </div>
                                        <?= $form->error($o_user, 'country_id'); ?>
                                    </div>
                                    <div class="profile-inright">
                                        <?= $form->labelEx($o_user, 'region_id'); ?>
                                        <div class="profile-select">
                                            <?= $form->dropDownList(
                                                $o_user,
                                                'region_id',
                                                CHtml::listData($a_region, 'id', 'name')
                                            ); ?>
                                        </div>
                                        <?= $form->error($o_user, 'region_id'); ?>
                                    </div>
                                    <div class="profile-inleft">
                                        <?= $form->labelEx($o_user, 'city'); ?>
                                        <?= $form->textField($o_user, 'city'); ?>
                                        <?= $form->error($o_user, 'city'); ?>
                                    </div>
                                    <div class="profile-inright">
                                        <?= $form->labelEx($o_user, 'zip'); ?>
                                        <?= $form->textField($o_user, 'zip'); ?>
                                        <?= $form->error($o_user, 'zip'); ?>
                                    </div>
                                    <div class="profile-inleft__full">
                                        <?= $form->labelEx($o_user, 'street'); ?>
                                        <?= $form->textField($o_user, 'street'); ?>
                                        <?= $form->error($o_user, 'street'); ?>
                                    </div>
                                </div>
                                <div class="profile-choiseuser"></div>
                            </div>
                        </div>
                        <section>
                            <a href="javascript:;" class="profile-link profileCancelToggle" title="Отмена">Отмена</a>
                            <?= CHtml::submitButton('Сохранить', array('class' => 'profile-btn profile-btn_margin')); ?>
                        </section>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if ($o_user->hasErrors()) { ?>
<script>
    var user_account_edit = true;
    <?php if ($o_user->hasErrors('password_new')) { ?>
        var user_account_password = true;
    <?php } ?>
</script>
<?php } ?>
