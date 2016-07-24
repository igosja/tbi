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
                    <form class="vacancies__form">
                        <div class="cb-form clearfix">
                            <div class="vacancies__form__left">
                                <section>
                                <label>Ф.И.О.</label>
                                <input type="name" class="cb-text-input" name="name" required>
                                <label>Телефон</label>
                                <input type="tel" class="cb-text-input phone_mask" name="phone" required>
                                <label>Email</label>
                                <input type="email" class="cb-text-input" name="email" required>
                                <label>Должность</label>
                                <div class="pco-select vacancy__pco-select">
                                    <select name="position">
                                        <?php foreach ($a_vacancy as $item) { ?>
                                            <option value="<?= $item->position; ?>"><?= $item->position; ?></option>
                                        <?php } ?>
                                        <option value="Продавец">Продавец</option>
                                    </select>
                                </div>
                                </section>
                            </div>
                            <div class="vacancies__form__right clearfix">
                                <section>
                                Сопроводительное письмо
                                <textarea name="letter" id="" required></textarea>
                                <div class="attach">
                                    <a class="attach__link" href="javascript:;">Прикрепить файл</a>
                                    <input type="file" id="vacancies-attach" name="uploadfile" style="display:none;">
                                    .pdf
                                    .doc
                                    .word
                                </div>
                                <input type="hidden" name="mailto" value="www.tbi.ua@gmail.com">
                                <input type="submit" value="Отправить">
                                </section>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>