<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $title; ?></h1>
        <div class="catalog-wrap">
            <div class="product-wrap clearfix">
                <?= $o_cooperationpage->text_header; ?>
                <div class="clearfix">
                    <div class="arch-l">
                        <img src="/img/arch-l-1.png" alt="" data-pin-nopin="true">
                        <h2 class="arch-l__title">Архитекторам и дизайнерам</h2>
                        <?= $o_cooperationpage->designer; ?>
                        <img src="/img/arch-l-2.png" alt="" data-pin-nopin="true">
                        <h2 class="arch-l__title">Дилерам</h2>
                        <?= $o_cooperationpage->dealer; ?>
                    </div>
                    <div class="arch-r">
                        <div class="arch-r__title">
                            Анкета для потенциальных партнеров
                        </div>
                        <div id="arch-tabs" class="tab-container">
                            <ul class="etabs etabs_arch clearfix">
                                <li class="tab tab_arch"><a href="#designer">Дизайнер/Архитектор</a></li>
                                <li class="tab tab_arch"><a href="#diller">Дилер</a></li>
                            </ul>
                            <div id="designer">
                                <form action="/designer_api.php" method="post">
                                    <div class="clearfix">
                                        <div class="arch__half">
                                            <label class="arch__label">Ф.И.О.: <sup>*</sup></label>
                                            <input type="text" name="name" class="arch__input" required="">
                                        </div>
                                        <div class="arch__half">
                                            <label class="arch__label">Название Компании:</label>
                                            <input type="text" name="company" class="arch__input">
                                        </div>
                                        <div class="arch__half">
                                            <label class="arch__label">Телефон: <sup>*</sup></label>
                                            <input type="tel" name="phone" class="arch__input phone_mask" required="">
                                        </div>
                                        <div class="arch__half">
                                            <label class="arch__label">Email: <sup>*</sup></label>
                                            <input type="email" name="email" class="arch__input" required="">
                                        </div>
                                        <div class="arch__half">
                                            <label class="arch__label">Область: <sup>*</sup></label>
                                            <div class="pco-select">
                                                <select name="area">
                                                    <option value="1" disabled="">Выбрать</option>
                                                    <option value="Черниговская">Черниговская</option>
                                                    <option value="Киевская">Киевская</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="arch__half">
                                            <label class="arch__label">Город: <sup>*</sup></label>
                                            <div class="pco-select">
                                                <select name="city" required="">
                                                    <option value="1" disabled="">Выбрать</option>
                                                    <option value="Чернигов">Чернигов</option>
                                                    <option value="Киев">Киев</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="arch__label">Дополнительно:</label>
                                    <textarea name="message" id="" cols="30" rows="10" class="arch__textarea"></textarea>
                                    <div class="arch__note">
                                        <sup>*</sup> Поля обязательны<br>к заполнению!
                                    </div>
                                    <input type="hidden" name="mailto" value="www.tbi.ua@gmail.com">
                                    <input type="submit" class="arch__submit" value="Отправить заявку">
                                </form>
                            </div>
                            <div id="diller">
                                <form action="/diller_api.php" method="post">
                                    <div class="clearfix">
                                        <div class="arch__half">
                                            <label class="arch__label">Ф.И.О.: <sup>*</sup></label>
                                            <input type="text" name="name" class="arch__input" required="">
                                        </div>
                                        <div class="arch__half">
                                            <label class="arch__label">Название Компании:</label>
                                            <input type="text" name="company" class="arch__input">
                                        </div>
                                        <div class="arch__half">
                                            <label class="arch__label">Телефон: <sup>*</sup></label>
                                            <input type="tel" name="phone" class="arch__input phone_mask" required="">
                                        </div>
                                        <div class="arch__half">
                                            <label class="arch__label">Email: <sup>*</sup></label>
                                            <input type="email" name="email" class="arch__input" required="">
                                        </div>
                                        <div class="arch__half">
                                            <label class="arch__label">Область: <sup>*</sup></label>
                                            <div class="pco-select">
                                                <select name="area" required="">
                                                    <option value="1" disabled="">Выбрать</option>
                                                    <option value="Черниговская">Черниговская</option>
                                                    <option value="Киевская">Киевская</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="arch__half">
                                            <label class="arch__label">Город: <sup>*</sup></label>
                                            <div class="pco-select">
                                                <select name="city" required="">
                                                    <option value="1" disabled="">Выбрать</option>
                                                    <option value="Чернигов">Чернигов</option>
                                                    <option value="Киев">Киев</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="arch__label">Адрес: <sup>*</sup></label>
                                    <input type="text" name="address" class="arch__input" required="">
                                    <label class="arch__label">Дополнительно:</label>
                                    <textarea name="message" id="" cols="30" rows="10" class="arch__textarea"></textarea>
                                    <div class="arch__note">
                                        <sup>*</sup> Поля обязательны<br>к заполнению!
                                    </div>
                                    <input type="hidden" name="mailto" value="www.tbi.ua@gmail.com">
                                    <input type="submit" class="arch__submit" value="Отправить заявку">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $o_cooperationpage->text_footer; ?>
            </div>
        </div>
    </div>
</section>