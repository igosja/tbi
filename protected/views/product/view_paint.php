<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $o_product->name; ?></h1>
        <div class="product-wrap clearfix">
            <div class="page-left clearfix">
                <div class="page-left__left">
                    <div class="pco-main-img">
                        <img
                            src="<?= ImageIgosja::resize(
                                (isset($o_product->image[0]->image_id) ? $o_product->image[0]->image_id : 0),
                                410,
                                410
                            ); ?>"
                            alt=""
                        />
                    </div>
                    <div class="tovar-photos">
                        <div class="flexslider">
                            <ul class="slides">
                                <?php $a_image = array_slice($o_product->image, 1);
                                foreach ($a_image as $item) { ?>
                                    <li>
                                        <a href="<?= ImageIgosja::resize($item->image_id, 600, 600); ?>"
                                           data-lightbox="1">
                                            <img src="<?= ImageIgosja::resize($item->image_id, 600, 600); ?>" alt=""/>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="flexslider-carousel">
                            <ul class="slides">
                                <?php foreach ($a_image as $item) { ?>
                                    <li>
                                        <img src="<?= ImageIgosja::resize($item->image_id, 100, 100); ?>" alt=""/>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="socialblock"></div>
                </div>
                <div class="product-card">
                    <div class="pc-price">
                        <span>Цена: </span>
                        <strong><?= HelperIgosja::productPrice($o_product); ?> грн.</strong>
                        <div class="pc-availability">В наличии</div>
                    </div>
                    <div class="pc-qty">
                        <span>Количество:</span>
                        <div class="qty-input clearfix">
                            <a href="javascript:;" class="qty-less"></a>
                            <input type="text" value="1">
                            <a href="javascript:;" class="qty-more"></a>
                        </div>
                        <span>шт.</span>
                        <a
                            class="qty-tocart add-to-cart"
                            data-name="<?= HelperIgosja::productName($o_product); ?>"
                            data-price="<?= HelperIgosja::productPrice($o_product); ?>"
                            data-product="<?= $o_product->id; ?>"
                            data-option="<?= HelperIgosja::productOption($o_product); ?>"
                            href="javascript:;"
                            title="В КОРЗИНУ"
                        >
                            В КОРЗИНУ
                        </a>
                    </div>
                    <div class="pc-options">
                        <div class="pco-heading">Выбор варианта:</div>
                        <div class="pc-rashod">
                            <strong>Расход: </strong>1,4 -2 кг/кв.м в 1-2 слоя
                        </div>
                        <?php if (count($o_product->option)) { ?>
                            <section>
                                <div class="sidebar-checkboxes">
                                    <?php $checked = 'checked'; ?>
                                    <?php foreach ($o_product->option as $item) { ?>
                                        <?php
                                        if (0 == $item->plus) { $price = $o_product->price - $item->price; }
                                        elseif (1 == $item->plus) { $price = $o_product->price + $item->price; }
                                        else { $price = $item->price; }
                                        ?>
                                        <input
                                            class="decor-weight product-option"
                                            data-name="<?= $o_product->name; ?>"
                                            data-option="<?= $item->name; ?>"
                                            data-price="<?= $price; ?>"
                                            data-id="<?= $item->id; ?>"
                                            id="<?= $item->id; ?>"
                                            name="product-option"
                                            type="radio"
                                            <?= $checked; ?>
                                        >
                                        <label for="<?= $item->id; ?>">
                                            <?= $o_product->name; ?>, <?= $item->name; ?>
                                        </label>
                                        <?php $checked = ''; ?>
                                    <?php } ?>
                                </div>
                            </section>
                        <?php } ?>
                    </div>
                    <div class="pc-specifications pc-colors clearfix bxunstyled">
                        <span class="ps-heading">Возможные цвета</span>
                        <a href="javascript:;" class="pc-all-colors overlayElementTrigger" data-selector="form-Color">
                            Все цвета
                        </a>
                        <form>
                            <div id="color-slider" class="owl-carousel">
                                <div class="item">
                                    <div class="color-radio">
                                        <input type="radio" id="color-2557" name="color" class="decor-color"
                                               data-color="2557" value="2557" checked>
                                        <label for="color-2557">
                                            <div class="color-radio__i">
                                                <div>
                                                    <img
                                                        src="http://www.tbi.ua/wa-data/public/photos/69/20/2069/2069.76.jpg"
                                                        alt=""/>
                                                </div>
                                            </div>
                                            <div class="color-radio__r">I1AA</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="color-radio">
                                        <input type="radio" id="color-2558" name="color" class="decor-color"
                                               data-color="2558" value="2558">
                                        <label for="color-2558">
                                            <div class="color-radio__i">
                                                <div>
                                                    <img
                                                        src="http://www.tbi.ua/wa-data/public/photos/70/20/2070/2070.76.jpg"
                                                        alt=""/>
                                                </div>
                                            </div>
                                            <div class="color-radio__r">I2AA</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="color-radio">
                                        <input type="radio" id="color-2559" name="color" class="decor-color"
                                               data-color="2559" value="2559">
                                        <label for="color-2559">
                                            <div class="color-radio__i">
                                                <div>
                                                    <img
                                                        src="http://www.tbi.ua/wa-data/public/photos/71/20/2071/2071.76.jpg"
                                                        alt=""/>
                                                </div>
                                            </div>
                                            <div class="color-radio__r">I3AA</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="color-radio">
                                        <input type="radio" id="color-2560" name="color" class="decor-color"
                                               data-color="2560" value="2560">
                                        <label for="color-2560">
                                            <div class="color-radio__i">
                                                <div>
                                                    <img
                                                        src="http://www.tbi.ua/wa-data/public/photos/72/20/2072/2072.76.jpg"
                                                        alt=""/>
                                                </div>
                                            </div>
                                            <div class="color-radio__r">I4AA</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="color-radio">
                                        <input type="radio" id="color-2561" name="color" class="decor-color"
                                               data-color="2561" value="2561">
                                        <label for="color-2561">
                                            <div class="color-radio__i">
                                                <div>
                                                    <img
                                                        src="http://www.tbi.ua/wa-data/public/photos/78/20/2078/2078.76.jpg"
                                                        alt=""/>
                                                </div>
                                            </div>
                                            <div class="color-radio__r">I1AL</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="pc-specifications">
                        <span class="ps-heading">Характеристики:</span>
                        <table>
                            <tbody>
                            <tr>
                                <td>Артикул:</td>
                                <td><?= $o_product->sku; ?></td>
                            </tr>
                            <tr>
                                <td>Расход при нанесении</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Тип упаковки</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Тип материала</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Тип помещения</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Страна происхождения</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Бренд</td>
                                <td><?= $o_product->brand->name; ?></td>
                            </tr>
                            <tr>
                                <td>Цвет</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="product-info">
                    <a href="javascript:;" class="productinfo-btn" data-open="Развернуть описание"
                       data-close="Свернуть описание" title="Развернуть описание">Развернуть описание</a>
                    <div class="productinfo-content">
                        <span class="ps-heading">Описание</span>
                        <?= $o_product->text; ?>
                    </div>
                </div>
                <div id="product-tabs" class="tab-container">
                    <ul class='etabs etabs-decor clearfix'>
                        <li class='tab'>
                            <a href="#samples" title="Готовые образцы"><span>Готовые образцы</span></a>
                        </li>
                        <li class='tab'>
                            <a href="#colors" title="Цветовая гамма"><span>Цветовая гамма</span></a>
                        </li>
                        <li class='tab'>
                            <a href="#infliction" title="Нанесение"><span>Нанесение</span></a>
                        </li>
                        <li class='tab'>
                            <a
                                href="#technical-pdf"
                                onclick="javascript:window.open('http://www.tbi.ua/wa-data/public/site/PDF/pdf%20decor/12_GRAESAN%20Istinto%20WEB%20mid.pdf','_blank')"
                                title="Каталог"
                            >
                                <span>
                                    Каталог
                                    <img src="/img/pdf.png" alt="" style="margin-left:0px; vertical-align:middle;"/>
                                </span>
                            </a>
                        </li>
                        <li class='tab youtube-tab'>
                            <a href="#youtube-s">
                                <span><img src="/img/youtube-tab.png" alt=""/></span>
                            </a>
                        </li>
                        <li class='tab'>
                            <a href="#comments"><span>Отзывы</span></a>
                        </li>
                    </ul>
                    <div id="samples">
                        <div class="samples-grid clearfix">
                            <a href="/shop/effekt-travertina-s-serebristym-otlivom/"
                               title="Эффект травертина с серебристым отливом">
                                <div style="background-image:url(http://tbi.ua/wa-data/public/shop/products/20/07/720/images/1525/1525.280x280.jpg)"></div>
                                <span>Эффект травертина с серебристым отливом</span>
                            </a>
                            <a href="/shop/effekt-travertina-v-stile-granzh/"
                               title="Эффект травертина в стиле &quot;гранж&quot;">
                                <div style="background-image:url(http://tbi.ua/wa-data/public/shop/products/17/07/717/images/1522/1522.280x280.jpg)"></div>
                                <span>Эффект травертина в стиле &quot;гранж&quot;</span>
                            </a>
                        </div>
                    </div>
                    <div id="colors">
                        <div class="more-effects clearfix">
                            <h3 class="effect-title">Возможные цвета</h3>
                            <div class="more-effects__item">
                                <a href="http://www.tbi.ua/wa-data/public/photos/69/20/2069/2069.500.jpg"
                                   data-lightbox="2" data-title="I1AA">
                                    <img src="http://www.tbi.ua/wa-data/public/photos/69/20/2069/2069.156.jpg" alt=""/>
                                    <span>I1AA</span>
                                </a>
                            </div>
                            <div class="more-effects__item">
                                <a href="http://www.tbi.ua/wa-data/public/photos/70/20/2070/2070.500.jpg"
                                   data-lightbox="2" data-title="I2AA">
                                    <img src="http://www.tbi.ua/wa-data/public/photos/70/20/2070/2070.156.jpg" alt=""/>
                                    <span>I2AA</span>
                                </a>
                            </div>
                            <div class="more-effects__item">
                                <a href="http://www.tbi.ua/wa-data/public/photos/71/20/2071/2071.500.jpg"
                                   data-lightbox="2" data-title="I3AA">
                                    <img src="http://www.tbi.ua/wa-data/public/photos/71/20/2071/2071.156.jpg" alt=""/>
                                    <span>I3AA</span>
                                </a>
                            </div>
                            <div class="more-effects__item">
                                <a href="http://www.tbi.ua/wa-data/public/photos/72/20/2072/2072.500.jpg"
                                   data-lightbox="2" data-title="I4AA">
                                    <img src="http://www.tbi.ua/wa-data/public/photos/72/20/2072/2072.156.jpg" alt=""/>
                                    <span>I4AA</span>
                                </a>
                            </div>
                            <div class="more-effects__item">
                                <a href="http://www.tbi.ua/wa-data/public/photos/78/20/2078/2078.500.jpg"
                                   data-lightbox="2" data-title="I1AL">
                                    <img src="http://www.tbi.ua/wa-data/public/photos/78/20/2078/2078.156.jpg" alt=""/>
                                    <span>I1AL</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="infliction">
                        <p>test</p>
                    </div>
                    <div id="technical-pdf"></div>
                    <div id="youtube-s">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/R8jUS8zbgRI" frameborder="0"
                                allowfullscreen></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/7nzMMtORHZI" frameborder="0"
                                allowfullscreen></iframe>
                    </div>
                    <div id="comments">
                        <div class="comments-posts"></div>
                        <div class="add-comment">
                            <span class="ps-heading">Добавить отзыв</span>
                            <form id="product-review-form">
                                <div class="clearfix">
                                    <input type="text" class="comment-input" placeholder="Имя"
                                           value="Максим Adminovich Adminovich">
                                    <input type="hidden" name="title" value="Заголовок отзыва">
                                    <input type="hidden" name="rate" value="5">
                                    <input type="hidden" name="parent_id" value="0">
                                    <input type="hidden" name="product_id" value="52">
                                    <input type="hidden" name="auth_provider" value="guest">
                                    <input type="hidden" name="count" value="0">
                                    <div class="comment-soc"></div>
                                </div>
                                <textarea class="comment-area" name="text" placeholder="Ваш комментарий"></textarea>
                                <div class="clearfix">
                                    <div class="comment-check">
                                        <input type="radio" id="men" name="sex">
                                        <label for="men">Мужчина</label>
                                    </div>
                                    <div class="comment-check">
                                        <input type="radio" id="women" name="sex">
                                        <label for="women" class="women">Женщина</label>
                                    </div>
                                    <input type="submit" class="comment__sbmt" value="Отправить отзыв"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-sidebar">
                <div class="filtersblock sidebar-categories">
                    <section>
                        <span class="cr-subheading">Каталог продукции</span>
                    </section>
                    <article>
                        <ul>
                            <li class="haschildren">
                                <a href="javascript:;" title="Декоративные материалы">Декоративные материалы</a>
                                <ul>
                                    <li>
                                        <a href="/shop/category/dekorativnye-materialy/grunty/"
                                           title="Грунты">Грунты</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/dekorativnye-materialy/fonovye-kraski/"
                                           title="Фоновые краски">Фоновые краски</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/dekorativnye-materialy/dekorativnye-kraski/"
                                           title="Декоративные краски">Декоративные краски</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/dekorativnye-materialy/dekorativnye-shtukaturki/"
                                           title="Декоративные штукатурки">Декоративные штукатурки</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/dekorativnye-materialy/zashchitnye-materialy/"
                                           title="Защитные материалы">Защитные материалы</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/dekorativnye-materialy/instrumenty/"
                                           title="Инструменты">Инструменты</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/dekorativnye-materialy/drugoe/"
                                           title="Другое">Другое</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/dekorativnye-materialy/dekory-sten/"
                                           title="Декоры стен">Декоры стен</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="haschildren">
                                <a href="javascript:;" title="Карнизы и солнцезащитные системы">Карнизы и солнцезащитные
                                    системы</a>
                                <ul>
                                    <li>
                                        <a href="/shop/category/karnizy-i-solntsezashchitnye-sistemy/vertikalnye-zhalyuzi/"
                                           title="Вертикальные жалюзи">Вертикальные жалюзи</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/karnizy-i-solntsezashchitnye-sistemy/tekhnicheskie-karnizy/"
                                           title="Технические карнизы">Технические карнизы</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/karnizy-i-solntsezashchitnye-sistemy/dekorativnye-karnizy/"
                                           title="Декоративные карнизы">Декоративные карнизы</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/karnizy-i-solntsezashchitnye-sistemy/rulonnye-shtory/"
                                           title="Рулонные шторы">Рулонные шторы</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/karnizy-i-solntsezashchitnye-sistemy/derevyannye-zhalyuzi/"
                                           title="Деревянные жалюзи">Деревянные жалюзи</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/karnizy-i-solntsezashchitnye-sistemy/lambrekennaya-planka/"
                                           title="Ламбрекенная планка">Ламбрекенная планка</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/karnizy-i-solntsezashchitnye-sistemy/aksessuary-dlya-shtor/"
                                           title="Аксессуары для штор">Аксессуары для штор</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="haschildren">
                                <a href="javascript:;" title="Ткани">Ткани</a>
                                <ul>
                                    <li>
                                        <a href="/shop/category/tkani/dekorativnye-tkani/" title="Декоративные ткани">Декоративные
                                            ткани</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/tkani/tekhnicheskie-tkani/" title="Технические ткани">Технические
                                            ткани</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/tkani/tkani-atelier-mottura/"
                                           title="Ткани Atelier Mottura">Ткани Atelier Mottura</a>
                                    </li>
                                    <li>
                                        <a href="/shop/category/tkani/tkani-blekaut-blackout/"
                                           title="Ткани Блекаут (Blackout)">Ткани Блекаут (Blackout)</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/shop/category/oboi" title="Обои">Обои</a>
                            </li>
                            <li>
                                <a href="/shop/category/drugoe" title="Другое">Другое</a>
                            </li>
                            <li>
                                <a href="/shop/category/sertificate" title="Сертификаты">Сертификаты</a>
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="pc-options pc-options_r">
                    <div class="pco-heading">Рассчитать количество:</div>
                    <section>
                        <label for="" class="label-block">Материал:</label>
                        <div class="pco-select">
                            <select name="material_type" id="material_type">
                                <option value="2">Грунты</option>
                                <option value="3" disabled>Гладкие краски</option>
                                <option value="4">Тонкослойные материалы</option>
                                <option value="5">Декоративные штукатурки</option>
                                <option value="6">Защитные материалы</option>
                            </select>
                        </div>
                        <div class="pco-select">
                            <select name="material_products" id="material_products">
                                <option value="">Грунт Primus Naturale</option>
                                <option value="">Грунт Primus Sabbia</option>
                                <option value="">Грунт Acrilak</option>
                                <option value="">Грунт Novaprimer</option>
                                <option value="">Грунт Decofix</option>
                                <option value="">Новый товар</option>
                            </select>
                        </div>
                        <div class="pco-label-and-input clearfix">
                            <label for="" class="label-inline">Площадь м<sup>2</sup>:</label>
                            <input type="text" class="square" value="10">
                        </div>
                    </section>
                    <div class="pco-submit">
                        <a href="javascript:;" class="consumption_calc_submit" title="Рассчитать">Рассчитать</a>
                    </div>
                </div>
                <div class="filtersblock links3">
                    <section>
                        <a href="/shop/category/dekorativnye-materialy/effekty/">
                            <span>Купить</span>
                            <div>готовый декор стен</div>
                        </a>
                    </section>
                </div>
                <div class="filtersblock links3">
                    <section>
                        <a href="/dostavka" title="Доставка по всей Украине">
                            <span>Доставка</span>
                            <div>по всей Украине</div>
                        </a>
                    </section>
                    <section>
                        <a href="/razlichnye-sposoby-oplaty" title="Различные способы оплаты">
                            <span>Различные</span>
                            <div>способы оплаты</div>
                        </a>
                    </section>
                    <section>
                        <a href="/cooperation" title="Партнерские программы">
                            <span>Партнерские</span>
                            <div>программы</div>
                        </a>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->renderPartial('/include/popular'); ?>