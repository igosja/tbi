<section class="overlay-forms">
    <div class="form-overlay"></div>
    <div class="wrap">
        <div class="of-form form-vacancies thank-form">
            <section class="of-header thank_title">
                Благодарим за Ваше резюме!
                <a href="javascript:;" class="of-close"></a>
            </section>
            <span>Мы внимательно ознакомимся с Вашим резюме и наш Hr-специалист свяжется с Вами.</span>
        </div>

        <div class="of-form form-success thank-form">
            <section class="of-header thank_title">
                Благодарим за заказ!
                <a href="javascript:;" class="of-close"></a>
            </section>
            <span>В ближайшее время с Вами свяжется наш менеджер.</span>
        </div>

        <div class="of-form form-contact thank-form">
            <section class="of-header thank_title">
                Благодарим за Ваше обращение!
                <a href="javascript:;" class="of-close"></a>
            </section>
            <span>Наши консультанты свяжутся с Вами в ближайшее время.</span>
        </div>

        <div class="of-form form-password thank-form">
            <section class="of-header thank_title">
                Внимание!
                <a href="javascript:;" class="of-close"></a>
            </section>
            <span>Вы ввели неправильный е-мейл или пароль.
            </span>
        </div>

        <div class="of-form form-register thank-form">
            <section class="of-header thank_title">
                Благодарим за регистрацию!
                <a href="javascript:;" class="of-close"></a>
            </section>
            <span>Информация об этом выслана на Ваш е-мейл.
            </span>
        </div>

        <div class="of-form form-subscribe thank-form">
            <section class="of-header thank_title">
                Благодарим за подписку!
                <a href="javascript:;" class="of-close"></a>
            </section>
            <span>Каждую неделю мы будем отправлять Вам интересные новости, информацию о новых товарах и акциях.
            </span>
        </div>

        <div class="of-form form-signIn">
            <section class="of-header">
                Вход
                <a href="javascript:;" class="of-close"></a>
            </section>
            <section>
                <div class="social-sign clearfix">
                    <a href="/oauth.php?app=site&provider=twitter" class="tw"></a>
                    <a href="/oauth.php?app=site&provider=vkontakte" class="vk"></a>
                    <a href="/oauth.php?app=site&provider=facebook" class="fb"></a>
                    <p>Авторизуйтесь, указав свои контактные данные, или воспользовавшись перечисленными выше сервисами.</p>
                </div>
                <script type="text/javascript">
                    $("div.social-sign a").click(function () {
                        var left = (screen.width - 600) / 2;
                        var top = (screen.height - 500) / 2;
                        window.open($(this).attr('href'), 'oauth', "width=600,height=500,left=" + left + ",top=" + top + ",status=no,toolbar=no,menubar=no");
                        return false;
                    });
                </script>
            </section>
            <section>
                <?php $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'login-form',
                    'enableAjaxValidation' => false,
                    'enableClientValidation' => false,
                )); ?>
                    <?= $form->textField(
                        $this->model_login,
                        'username',
                        array('class' => 'of-input input-fluid', 'placeholder' => 'Логин')
                    ); ?>
                    <?= $form->passwordField(
                        $this->model_login,
                        'password',
                        array('class' => 'of-input input-fluid', 'placeholder' => 'Пароль')
                    ); ?>
                    <?= CHtml::ajaxSubmitButton(
                        'Войти',
                        '/site/login',
                        array(
                            'type' => 'POST',
                            'success' => 'function(data) {
                                
                            }'
                        ),
                        array('class' => 'of-form-btn')
                    ); ?>
                <?php $this->endWidget(); ?>
                <div class="of-signIn-bottom clearfix">
                    <a href="javascript:;" class="overlayElementTrigger" data-selector="form-lostPasw" title="Забыли пароль?">Забыли пароль?</a>
                    <a href="javascript:;" class="overlayElementTrigger" data-selector="form-signUp" title="Регистрация">Регистрация</a>
                </div>
            </section>
        </div>

        <div class="of-form form-signUp">
            <section class="of-header">
                Вход
                <a href="javascript:;" class="of-close"></a>
            </section>
            <section>
                <div class="social-sign clearfix">
                    <a href="/oauth.php?app=site&provider=twitter" class="tw"></a>
                    <a href="/oauth.php?app=site&provider=vkontakte" class="vk"></a>
                    <a href="/oauth.php?app=site&provider=facebook" class="fb"></a>
                    <p>Авторизуйтесь, указав свои контактные данные, или воспользовавшись перечисленными выше сервисами.</p>
                </div>
                <script type="text/javascript">
                    $("div.social-sign a").click(function () {
                        var left = (screen.width - 600) / 2;
                        var top = (screen.height - 500) / 2;
                        window.open($(this).attr('href'), 'oauth', "width=600,height=500,left=" + left + ",top=" + top + ",status=no,toolbar=no,menubar=no");
                        return false;
                    });
                </script>
            </section>
            <section>
                <div class="wa-form">
                    <form>
                        <div class="wa-field wa-field-firstname">
                            <div class="wa-name">Имя</div>
                            <div class="wa-value"><input type="text" name="data[firstname]"></div>
                        </div>
                        <div class="wa-field wa-field-lastname">
                            <div class="wa-name">Фамилия</div>
                            <div class="wa-value"><input type="text" name="data[lastname]"></div>
                        </div>
                        <div class="wa-field wa-field-email">
                            <div class="wa-name">Email</div>
                            <div class="wa-value"><input type="text" name="data[email]"
                                                         pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"></div>
                        </div>
                        <div class="wa-field wa-field-password">
                            <div class="wa-name">Пароль</div>
                            <div class="wa-value"><input type="password" name="data[password]"></div>
                        </div>
                        <div class="wa-field wa-field-password_confirm">
                            <div class="wa-name">Подтвердите пароль</div>
                            <div class="wa-value"><input type="password" name="data[password_confirm]"></div>
                        </div>
                        <div class="wa-field">
                            <div class="wa-value wa-submit">
                                <input type="submit" value="Регистрация"></div>
                        </div>
                    </form>
                </div>
                <div class="of-signup-bottom clearfix">
                    <p>или <a href="javascript:;" class="overlayElementTrigger" data-selector="form-signIn" title="войдите">войдите</a>,<br>если у вас уже есть аккаунт</p>
                </div>
            </section>
        </div>

        <div class="of-form form-cart">
            <section class="of-header">
                ОФОРМИТЬ ЗАКАЗ
                <a href="javascript:;" class="of-close"></a>
            </section>
            <section class="cart-data"></section>
            <section>
                <a href="javascript:;" class="backtopage of-close-trigger" title="Продолжить покупки">Продолжить покупки</a>
                <a href="javascript:;" style="text-decoration: none;" class="of-form-btn of-form-btn-small" title="Оформить заказ">Оформить заказ</a>
            </section>
        </div>

        <div class="of-form form-sizeLong">
            <section class="of-header">
                Вес/длина
                <a href="javascript:;" class="of-close"></a>
            </section>
            <section>
                <center><img src="" alt="" width="340px"/></center>
            </section>
        </div>

        <div class="of-form form-choseColor">
            <section class="of-header">
                Выбор цвета
                <a href="javascript:;" class="of-close"></a>
            </section>
            <section>
                <div class="block-scroll">
                    <div class="mCustomScrollbar">
                        <ul>
                            <li class="clearfix">
                                <div class="color-left" style="background:#ccc58f;"></div>
                                <div class="color-right">
                                    <a href="javascript:;" data-id="386" data-sku="20736" data-type="1" class="addtocart">RAL 1000</a>
                                    <br/>
                                    Зелёно-бежевый
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class="of-form form-lokalization">
            <section class="of-header">
                Выбор локализации
                <a href="javascript:;" class="of-close"></a>
            </section>
            <section>
                <div class="radiobuttons">
                    <input id="kiev" type="radio" name="payment" value="kiev">
                    <label for="kiev"><span>Киев</span></label><br>
                    <input id="region" type="radio" name="payment" value="region">
                    <label for="region"><span>Область</span></label><br>
                    <input id="your-city" type="radio" name="payment" value="your-city">
                    <label for="your-city"><span>Другой город</span></label>
                    <div class="orb-select">
                        <select name="" id="order-payoption">
                            <option value="" selected disabled>Ваш город</option>
                            <option value="">Чернигов</option>
                            <option value="">Одеса</option>
                            <option value="">Бердянск</option>
                        </select>
                    </div>
                </div>
                <input type="submit" class="of-form-btn of-form-btn-small" value="Выбрать">
            </section>
        </div>

        <div class="of-form form-lostPasw">
            <section class="of-header of-header__biglet">
                Востановить пароль
                <a href="javascript:;" class="of-close"></a>
            </section>
            <section>
                <p class="of-textbig">Введите Ваш E-mail и новый пароль будет<br/>выслан на указанный почтовый адрес</p>
                <form action="/forgotpassword/" method="POST">
                    <input type="email" class="of-input" placeholder="E-mail" name="login"
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    <input type="submit" class="of-form-btn of-form-btn_long" value="Востановить">
                </form>
            </section>
        </div>

        <div class="of-form form-sendEmail">
            <section class="of-header">
                Заказать звонок
                <a href="javascript:;" class="of-close"></a>
            </section>
            <section>
                <div class="social-sign clearfix">
                    <p>Отправьте запрос, и мы свяжемся с вами в самое ближайшее время.</p>
                </div>
            </section>
            <section class="result" style="display:none;">
                <div>
                    <p class="message"></p>
                </div>
            </section>
            <section>
                <form action="" class="form-sendEmail-form">
                    <input type="text" class="of-input" name="name" placeholder="Имя" required>
                    <input type="email" name="email" class="of-input" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    <input type="tel" name="phone" class="of-input phone_mask" placeholder="Телефон" required>
                    <input type="hidden" name="mailto" value="www.tbi.ua@gmail.com">
                    <input type="submit" class="of-form-btn" value="Отправить">
                </form>
            </section>
        </div>
    </div>

    <div class="of-form form-Color">
        <section class="of-header">
            Возможные цвета
            <a href="javascript:;" class="of-close"></a>
        </section>
        <section>
            <div class="block-scroll">
                <div class="mCustomScrollbar clearfix"></div>
            </div>
        </section>
        <section class="of-bottom">
            <div class="color-choise"></div>
            <a href="javascript:;" class="qty-tocart addtocart-choise">В КОРЗИНУ</a>
        </section>
    </div>

    <div class="of-form form-tovAv">
        <section class="of-header">
            Сообщить когда появится
            <a href="javascript:;" class="of-close"></a>
        </section>
        <section>
            <div class="ftov-cent">
                <section class="result" style="display:none;">
                    <div>
                        <p class="message">Вы получите уведомление о поступлении товара в продажу на указанные Вами контакты</p>
                    </div>
                </section>
                <div class="ftov-cent__text">
                    Как только появится товар:
                </div>
                <div class="ftov-cent__img">
                    <img src="" alt=""/>
                    <div></div>
                </div>
                <form id="product-arived-nologin">
                    <div class="ftov-cent__inputs clearfix">
                        <input type="text" name="data[firstname]" class="of-input" placeholder="Имя">
                        <input type="text" name="data[lastname]" class="of-input" placeholder="Фамилия">
                        <input type="email" name="data[email]" class="of-input of-input_half" placeholder="E-mail"
                               id="arrive-data-email">
                        <input type="hidden" name="email" class="of-input of-input_half" placeholder="E-mail"
                               id="arrive-email">
                        <input type="tel" name="phone" class="of-input of-input_half of-input_half_m phone_mask"
                               placeholder="Телефон">
                        <input type="hidden" name="data[password]" value="a65b">
                        <input type="hidden" name="data[password_confirm]" value="a65b">
                        <input type="hidden" name="arrive_email_nologin" value="mail@mail.com">
                        <input type="hidden" id="arrive-pid-nologin" name="plugin_arrived_pid" value="">
                        <input type="hidden" id="arrive-skuid-nologin" name="plugin_arrived_skuid" value="">
                        <input type="hidden" name="expiration" value="360">
                    </div>
                    <script>
                        window.onload = function () {

                            $('.ftov-cent__regged').on('click', function () {
                                $(this).next('.ftov-cent__hide').slideDown(500);
                            });
                        };
                    </script>
                    <div class="ftov-cent__reg">
                        <a href="javascript:;" class="ftov-cent__regged">Я зарегистрирован на сайте</a>
                        <div class="ftov-cent__hide">
                            <input type="text" name="login" class="of-input" placeholder="E-mail">
                            <input type="password" name="password" class="of-input" placeholder="Пароль">
                            <input type="hidden" name="wa_auth_login" value="1">
                            <a href="javascript:;" class="ftov-cent__a overlayElementTrigger" data-selector="form-lostPasw">Забыли пароль? </a>
                            <a href="javascript:;" class="ftov-cent__a overlayElementTrigger" data-selector="form-signUp">Регистрация</a>
                        </div>
                    </div>
                    <input type="submit" class="of-form-btn" value="Отправить">
                </form>
            </div>
        </section>
    </div>

    <div class="of-form form-tovPrice">
        <section class="of-header">
            Запросить стоимость
            <a href="javascript:;" class="of-close"></a>
        </section>
        <section>
            <div class="ftov-cent">
                <section class="result" style="display:none;">
                    <div>
                        <p class="message"></p>
                    </div>
                </section>
                <div class="ftov-cent__text">
                    Как только появится товар:
                </div>
                <div class="ftov-cent__img">
                    <img src="" alt=""/>
                    <div></div>
                </div>
                <form id="get-price-no-login">
                    <div class="ftov-cent__inputs clearfix">
                        <input type="text" name="data[firstname]" class="of-input" placeholder="Имя">
                        <input type="text" name="data[lastname]" class="of-input" placeholder="Фамилия">
                        <input type="email" name="data[email]" class="of-input of-input_half" placeholder="E-mail">
                        <input type="tel" name="data[phone]" class="of-input of-input_half of-input_half_m phone_mask" placeholder="Телефон">
                        <input type="hidden" name="data[password]" value="d83a">
                        <input type="hidden" name="data[password_confirm]" value="d83a">
                        <input type="hidden" name="getprice_email_nologin" value="www.tbi.ua@gmail.com">
                        <input type="hidden" name="getprice_product" id="getprice-product_nologin" value=""/>
                        <input type="hidden" name="getprice_price" id="getprice-price_nologin" value=""/>
                    </div>
                    <script>
                        window.onload = function () {
                            $('.ftov-cent__regged').on('click', function () {
                                $(this).next('.ftov-cent__hide').slideDown(500);
                            });
                        };
                    </script>
                    <div class="ftov-cent__reg">
                        <a href="javascript:;" class="ftov-cent__regged">Я зарегистрирован на сайте</a>
                        <div class="ftov-cent__hide">
                            <input type="text" name="login" class="of-input" placeholder="E-mail">
                            <input type="password" name="password" class="of-input" placeholder="Пароль">
                            <input type="hidden" name="wa_auth_login" value="1">
                            <a href="javascript:;" class="ftov-cent__a overlayElementTrigger" data-selector="form-lostPasw">Забыли пароль? </a>
                            <a href="javascript:;" class="ftov-cent__a overlayElementTrigger" data-selector="form-signUp">Регистрация</a>
                        </div>
                    </div>
                    <input type="submit" class="of-form-btn" value="Отправить">
                </form>
            </div>
        </section>
    </div>
</section>