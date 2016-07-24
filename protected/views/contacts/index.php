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
                    <form class="contact-form">
                        <div class="cb-form">
                            <div class="cb-heading">Связаться с нами</div>
                            <section>
                                <input type="text" name="name" class="cb-text-input" placeholder="Имя">
                                <div class="clearfix">
                                    <input type="tel" name="phone" class="cb-text-input phone_mask" placeholder="Телефон">
                                    <input type="email" name="email" class="cb-text-input" placeholder="Email" required>
                                </div>
                                <textarea name="message" id="" placeholder="Сообщение" required></textarea>
                                <p>Будем рады ответить на Ваши вопросы</p>
                                <input type="hidden" name="mailto" value="www.tbi.ua@gmail.com" />
                                <input type="submit" id="feedback_submit" value="Отправить">
                            </section>
                        </div>
                    </form>
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