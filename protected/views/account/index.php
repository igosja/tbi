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
                                    <span><?= $o_user->country; ?></span>
                                </li>
                                <li>
                                    <small><?= $o_user->getAttributeLabel('region_id'); ?>:</small>
                                    <span><?= $o_user->region; ?></span>
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
                    <form action="" method="post" class="profile-form profile-editing" style="display: block;">
                        <div class="clearfix">
                            <div class="profile-form__left" style="padding-left:20px;">
                                <h4 class="profile-list__title">Контактные данные:</h4>
                                <label for="">Имя :</label>
                                <input type="text" value="Максим" name="profile[firstname]">
                                <label for="">Фамилия :</label>
                                <input type="text" value="Adminovich" name="profile[lastname]">
                                <label for="">Телефон :</label>
                                <input type="tel" value="0679625526" name="profile[phone]" class="phone_mask">
                                <label for="">Email :</label>
                                <input type="email" value="www.tbi.ua@gmail.com" name="profile[email]" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                <div id="password_change_block" style="display:none;">
                                    <label for="">Новый пароль :</label>
                                    <input type="password" name="profile[password]">
                                    <label for="">Подтвердите пароль :</label>
                                    <input type="password" name="profile[password_confirm]">
                                </div>
                                <a href="javascript:;" class="profile-btn__pasw" id="password_change_link" title="Изменить пароль">Изменить пароль</a>
                            </div>
                            <div class="profile-form__right_big">
                                <h4 class="profile-list__title">Адрес:</h4>
                                <div class="clearfix">
                                    <div class="profile-inleft">
                                        <label for="">Страна</label>
                                        <div class="profile-select">
                                            <select name="profile[address][country]" id="profile_country">
                                                <option value="can">Канада</option>
                                                <option value="rus">Российская Федерация</option>
                                                <option value="usa">Соединенные Штаты Америки (США)</option>
                                                <option value="ukr" selected>Украина</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="profile-inright">
                                        <label for="">Область</label>
                                        <div class="profile-select" id="profile_region">
                                            <select name="profile[address][region]">
                                                <option value="09"
                                                >
                                                    Івано-Франківська область
                                                </option>
                                                <option value="01"
                                                >
                                                    Автономна Республіка Крим
                                                </option>
                                                <option value="02"
                                                >
                                                    Вінницька область
                                                </option>
                                                <option value="03"
                                                >
                                                    Волинська область
                                                </option>
                                                <option value="04"
                                                >
                                                    Дніпропетровська область
                                                </option>
                                                <option value="05"
                                                >
                                                    Донецька область
                                                </option>
                                                <option value="06"
                                                >
                                                    Житомирська область
                                                </option>
                                                <option value="07"
                                                >
                                                    Закарпатська область
                                                </option>
                                                <option value="08"
                                                >
                                                    Запорізька область
                                                </option>
                                                <option value="12"
                                                >
                                                    Кіровоградська область
                                                </option>
                                                <option value="10"
                                                >
                                                    Київська область
                                                </option>
                                                <option value="13"
                                                >
                                                    Луганська область
                                                </option>
                                                <option value="14"
                                                >
                                                    Львівська область
                                                </option>
                                                <option value="11"
                                                        selected
                                                >
                                                    місто Київ
                                                </option>
                                                <option value="27"
                                                >
                                                    місто Севастополь
                                                </option>
                                                <option value="15"
                                                >
                                                    Миколаївська область
                                                </option>
                                                <option value="16"
                                                >
                                                    Одеська область
                                                </option>
                                                <option value="17"
                                                >
                                                    Полтавська область
                                                </option>
                                                <option value="18"
                                                >
                                                    Рівненська область
                                                </option>
                                                <option value="19"
                                                >
                                                    Сумська область
                                                </option>
                                                <option value="20"
                                                >
                                                    Тернопільська область
                                                </option>
                                                <option value="21"
                                                >
                                                    Харківська область
                                                </option>
                                                <option value="22"
                                                >
                                                    Херсонська область
                                                </option>
                                                <option value="23"
                                                >
                                                    Хмельницька область
                                                </option>
                                                <option value="24"
                                                >
                                                    Черкаська область
                                                </option>
                                                <option value="26"
                                                >
                                                    Чернівецька область
                                                </option>
                                                <option value="25"
                                                >
                                                    Чернігівська область
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="profile-inleft">
                                        <label for="">Город</label>
                                        <input type="text" value="Коростень" name="profile[address][city]">
                                    </div>
                                    <div class="profile-inright">
                                        <label for="">Индекс</label>
                                        <input type="text" value="07500" name="profile[address][zip]">
                                    </div>
                                    <div class="profile-inleft__full">
                                        <label for="">Улица, дом, квартира</label>
                                        <input type="text" value="Отделение №2 (до 30 кг на одно место): ул. Сосновського 25" name="profile[address][street]">
                                    </div>
                                </div>
                                <div class="profile-choiseuser">
                                </div>
                            </div>
                        </div>
                        <section>
                            <input type="hidden" name="_csrf" value="57a2dfc475c859.29567258" />
                            <input type="hidden" name="profile[address][id]" value="1">
                            <a href="javascript:;" class="profile-link profileCancelToggle" title="Отмена">Отмена</a>
                            <input type="submit" class="profile-btn profile-btn_margin profileSaveToggle" value="Сохранить">
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
