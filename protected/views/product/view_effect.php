<section class="innerpage">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="page-heading"><?= $o_product->name; ?></h1>
        <div class="product-wrap clearfix">
            <div class="page-left clearfix ">
                <div class="clearfix">
                    <div class="effect-left effect-height">
                        <img
                            id="zoom_01"
                            src="<?= ImageIgosja::resize(
                                (isset($o_product->image[0]->image_id) ? $o_product->image[0]->image_id : 0),
                                346,
                                510
                            ); ?>"
                            data-zoom-image="<?= ImageIgosja::resize(
                                (isset($o_product->image[0]->image_id) ? $o_product->image[0]->image_id : 0),
                                1000,
                                1512
                            ); ?>"
                            alt="<?= $o_product->name; ?>"
                        />
                    </div>
                    <div class="effect-right effect-height">
                        <div class="effect-top">
                            Рассчитать стоимость:
                        </div>
                        <div class="clearfix">
                            <div class="effect-half">
                                <h4 class="effect-half__title">Тип поверхности:</h4>
                                <div class="sidebar-radiobuttons ">
                                    <input name="walls-ceiling" type="radio" value="522" id="walls">
                                    <label for="walls">Стены</label>
                                    <div class="radiobuttons radiobuttons-first">
                                        <input id="walls1" type="radio" name="heigh" value="520">
                                        <label for="walls1" class="margin-right">до 330 см</label>
                                        <input id="walls2" type="radio" name="heigh" value="521">
                                        <label for="walls2">выше 330 см</label>
                                    </div>

                                    <input name="walls-ceiling" type="radio" value="523" id="ceiling">
                                    <label for="ceiling">Потолок</label>
                                    <div class="input-with-title input-with-title-effect clearfix">
                                        <h4 class="effect-half__title">Площадь:</h4>
                                        <input type="text" class="pco-input" placeholder="300" name="square">
                                        <span>m<sup>2</sup></span>
                                    </div>
                                </div>
                            </div>
                            <div class="effect-half">
                                <h4 class="effect-half__title">Местоположение объекта:</h4>
                                <div class="radiobuttons">
                                    <input id="524" type="radio" name="town" value="524">
                                    <label for="524">Киев</label>
                                    <input id="525" type="radio" name="town" value="525">
                                    <label for="525">Область</label>
                                    <input id="city" type="radio" name="town" value="526">
                                    <label for="city">Другой город</label>
                                    <input type="text" class="effect-input" placeholder="Ваш город"/>
                                </div>
                            </div>
                        </div>
                        <div class="effect-submit">
                            <a href="javascript:;" id="effect_count" title="Рассчитать">Рассчитать</a>
                        </div>
                        <div class="effect-bottom clearfix">
                            <div class="effect-price">
                                <div id="effect_price">
                                    Цена:
                                    <strong>
                                        <?= HelperIgosja::formatPrice($o_product->price, $this->currency); ?>
                                    </strong>
                                </div>
                                <div>Выезд мастера: <?= HelperIgosja::formatPrice(500, $this->currency); ?></div>
                            </div>
                            <a
                                href="javascript:;"
                                data-id="707"
                                data-sku="35213"
                                data-type="1"
                                class="effect-tocart addtocart"
                                title="В КОРЗИНУ"
                            >
                                В КОРЗИНУ
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix effect-text">
                    <div class="pc-specifications effect-specification">
                        <span class="ps-heading">Характеристики:</span>
                        <table>
                            <tbody>
                            <tr>
                                <td>Артикул:</td>
                                <td><?= $o_product->sku; ?></td>
                            </tr>
                            <tr>
                                <td>Название декора:</td>
                                <td><?= $o_product->name; ?></td>
                            </tr>
                            <tr>
                                <td>Другие цвета:</td>
                                <td>Нет</td>
                            </tr>
                            <tr>
                                <td>Сложность нанесения:</td>
                                <td class="difficalties">
                                    <span class="difficalties__bg"></span>
                                    <span class="difficalties__bg"></span>
                                    <span class="difficalties__bg"></span>
                                    <span class="difficalties__bg-no"></span>
                                    <span class="difficalties__bg-no"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Используемые материалы:</td>
                                <td>
                                    <?= CHtml::link(
                                        'Декоративный материал Oro Puro',
                                        array('view', 'id' => '7-test_4'),
                                        array('title' => 'Декоративный материал Oro Puro')
                                    )?><br/>
                                    <?= CHtml::link(
                                        'Декоративный материал Oro Puro',
                                        array('view', 'id' => '7-test_4'),
                                        array('title' => 'Декоративный материал Oro Puro')
                                    )?>
                                </td>
                            </tr>
                            <tr>
                                <td>Используемые инструменты:</td>
                                <td class="instruments product_use">
                                    <span>
                                        <img
                                            src="/img/effect-instrument/ico-2.png"
                                            alt=""
                                        />
                                        <small style="display: none;">Шпатель</small>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>Тип помещения:</td>
                                <td>
                                    Интерьер
                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                    <h3 class="effect-title">Описание</h3>
                    <?= $o_product->text; ?>
                    <div class="socialblock"></div>
                </div>
                <div id="product-tabs" class="tab-container">
                    <ul class='etabs etabs-decor clearfix'>
                        <li class='tab'><a href="#samples" title="Другие эффекты"><span>Другие эффекты</span></a></li>
                        <li class='tab'><a href="#comments"><span>Отзывы</a></span></li>
                    </ul>
                    <div id="samples">
                        <div class="samples-grid clearfix">
                            <a href="/shop/venetsianskaya-shtukaturka-spatula-stuhhi-v-tsvete-s2nb--oro-puro/"
                               title="Венецианская штукатурка Spatula Stuhhi в цвете S2NB + Oro Puro">
                                <div style="background-image:url(http://tbi.ua/wa-data/public/shop/products/07/07/707/images/1512/1512.280x280.jpg)"></div>
                                <span>Венецианская штукатурка Spatula Stuhhi в цвете S2NB + Oro Puro</span>
                            </a>
                        </div>
                    </div>
                    <?= $this->renderPartial('/include/review', array('o_product' => $o_product)); ?>
                </div>
            </div>
            <div class="page-sidebar">
                <?= $this->renderPartial('/include/product-left-category'); ?>
                <?= $this->renderPartial('/include/product-left-link'); ?>
            </div>
        </div>
    </div>
</section>
<?= $this->renderPartial('/include/popular'); ?>