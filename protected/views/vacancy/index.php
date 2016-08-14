<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $title; ?></h1>
        <div class="catalog-wrap">
            <div class="clearfix">
                <div class="description_text">
                    <div class="vacancies__title">
                        <?= $o_vacancypage->name; ?>
                    </div>
                    <?= $o_vacancypage->text; ?>
                </div>
                <?php foreach ($a_vacancy as $item) { ?>
                    <?php if ($item->id == $a_vacancy[0]->id) { ?>
                        <div class="vacancies__left">
                    <?php } else { ?>
                        <div class="vacancies__right">
                    <?php } ?>
                        <div class="filtersblock sidebar-categories vacancies-filtersblock">
                            <section>
                            <span class="cr-subheading">Должность <strong><?= $item->position; ?></strong></span>
                            </section>
                            <div class="vacancies__list clearfix">
                                <div class="vacansies__list__titile">Место работы:</div>
                                <div class="vacancies__list__right"><?= $item->city; ?></div>
                            </div>
                            <div class="vacancies__list clearfix">
                                <div class="vacansies__list__titile">Оплата труда:</div>
                                <div class="vacancies__list__right"><?= number_format($item->salary, 0, ',', ' '); ?> грн.</div>
                            </div>
                            <div class="vacancies__list clearfix">
                                <div class="vacansies__list__titile">Требования:</div>
                                <div class="vacancies__list__right"><?= $item->requirements; ?></div>
                            </div>
                            <div class="vacancies__list clearfix">
                                <div class="vacansies__list__titile">Условия труда:</div>
                                <div class="vacancies__list__right"><?= $item->conditions; ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="grey-wrap">
                <div class="customers description_text">
                    <div class="cb-heading cb-heading_center">
                        Отправить резюме
                    </div>
                    <?php $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'resume-form',
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => true,
                        'htmlOptions' => array('class' => 'vacancies__form', 'enctype' => 'multipart/form-data'),
                    )); ?>
                        <div class="cb-form clearfix">
                            <div class="vacancies__form__left">
                                <section>
                                    <?= $model->getAttributeLabel('name'); ?>
                                    <?= $form->textField(
                                        $model,
                                        'name',
                                        array('class' => 'cb-text-input')
                                    ); ?>
                                    <?= $form->error($model, 'name'); ?>
                                    <?= $model->getAttributeLabel('phone'); ?>
                                    <?= $form->telField(
                                        $model,
                                        'phone',
                                        array('class' => 'cb-text-input phone_mask')
                                    ); ?>
                                    <?= $form->error($model, 'phone'); ?>
                                    <?= $model->getAttributeLabel('email'); ?>
                                    <?= $form->emailField(
                                        $model,
                                        'email',
                                        array('class' => 'cb-text-input')
                                    ); ?>
                                    <?= $form->error($model, 'email'); ?>
                                    <?= $model->getAttributeLabel('position'); ?>
                                    <div class="pco-select vacancy__pco-select">
                                        <?= $form->dropDownList(
                                            $model,
                                            'position',
                                            CHtml::listData($a_vacancy, 'position', 'position'),
                                            array('empty' => 'Выберите должность')
                                        ); ?>
                                    </div>
                                    <?= $form->error($model, 'position'); ?>
                                </section>
                            </div>
                            <div class="vacancies__form__right clearfix">
                                <section>
                                    <?= $model->getAttributeLabel('text'); ?>
                                    <?= $form->textArea($model, 'text'); ?>
                                    <div class="attach">
                                        <a class="attach__link" href="javascript:;">Прикрепить файл</a>
                                        <input type="file" id="vacancies-attach" name="file" style="display:none;">
                                        <?= $model->getAttributeLabel('file'); ?>
                                    </div>
                                    <?= CHtml::submitButton('Отправить'); ?>
                                </section>
                            </div>
                        </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if(Yii::app()->user->hasFlash('resume_success')) { ?>
    <script>
        var resume_success = <?= Yii::app()->user->getFlash('resume_success'); ?>;
    </script>
<?php } ?>