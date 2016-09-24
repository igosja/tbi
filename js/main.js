jQuery(document).ready(function ($) {
    var top_show = 150; // В каком положении полосы прокрутки начинать показ кнопки "Наверх"
    var delay = 1000; // Задержка прокрутки

    $(window).scroll(function () { // При прокрутке попадаем в эту функцию
        /* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
        if ($(this).scrollTop() > top_show) $('#to-top').fadeIn();

        else $('#to-top').fadeOut();
    });
    $('#to-top').click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
        /* Плавная прокрутка наверх */
        $('body, html').animate({
            scrollTop: 0
        }, delay);
    });

    $(window).load(function () {
        $(".block-scroll").mCustomScrollbar();
    });
    $(".product_use span").hover(
        function () {
            $(this).children('small').fadeIn("fast");
        }, function () {
            $(this).children('small').fadeOut("fast");
        }
    );

    $(".color-check").hover(
        function () {
            $(this).children('small').fadeIn("fast");
        }, function () {
            $(this).children('small').fadeOut("fast");
        }
    );


    $('.navleft > ul li').hover(function () {
        $(this).find('> .first-m').stop().fadeIn(300);
    }, function () {
        $(this).find('> .first-m').stop().fadeOut(300);
    });

    $('.first-m li').hover(function () {
        $(this).find('> .second-m').stop().fadeIn(300);
    }, function () {
        $(this).find('> .second-m').stop().fadeOut(300);
    });

    $(".orderpage-left input[type=radio]").change(function () {
        var divId = $(this).attr("id");
        $(".check").hide();
        $(".check_" + divId).fadeIn();
    });

    $("#color-slider").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: false,
        items: 4,
        responsive: false,
        pagination: false,
        navigationText: false
    });
    $(".phone_mask").mask("(999) 999-99-99");

    $('#arch-tabs').easytabs({
        updateHash: false
    });

    $('.decorslider').bxSlider({
        minSlides: 4,
        maxSlides: 4,
        //moveSlides:1,
        controls: true,
        slideWidth: '10000%',
        pager: false
    });

    /*Начало добавления скриптиков*/
    $(".acrdn-item-body").hide();
    $(".acrdn-item-head").click(function (e) {
        e.preventDefault();
        if (!($(this).parent().hasClass("opened"))) {
            $(".acrdn-item-body").slideUp();
            $(".acrdn-item").removeClass("opened");
            $(this).parent().children(".acrdn-item-body").slideDown();
            $(this).parent().addClass("opened");
        } else {
            $(".acrdn-item-body").slideUp();
            $(this).parent().removeClass("opened");
        }
    });

    $('.vacancies-filtersblock').matchHeight();
    $('.pi-name').matchHeight();

    $(window).scroll(function () {
        fixedHeader();
    });

    function fixedHeader() {
        var offset = jQuery(document).scrollTop();
        if (offset >= 134) {
            $('nav').addClass('fixed');
        } else {
            $('nav').removeClass('fixed');
        }
    }

    /*конец*/


    $('#orderpage-tabs').easytabs({
        updateHash: false
    });

    $('.orb-select select').customSelect({customClass: 'orb-select-styled'});
    $('#order-payoption').on('change', function () {
        var payLink = $('#order-payoption option:selected').data('href');
        var payBtnText = $('#order-payoption option:selected').data('text');
        $('.order-paybtn').text(payBtnText).attr('href', payLink);
    });


    $('.flexslider-carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 100,
        itemMargin: 12,
        asNavFor: '.flexslider',
        prevText: "",
        nextText: "",
        start: function (slider) {
            if (slider.count < 4) slider.addClass('flex-centered');
        }
    });

    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        useCSS: false,
        sync: ".flexslider-carousel",
        prevText: "",
        nextText: ""
    });

    $('.effect-input').prop('disabled', true);
    $("input[name='town']").change(function () {
        if ($('.effect-half #city').is(':checked')) {
            $('.effect-input').prop('disabled', false);
        }
        else {
            $('.effect-input').prop('disabled', true);
        }
    });

    $('.radiobuttons-first input').prop('disabled', true);
    $('.input-with-title-effect input').prop('disabled', true);
    $("input[name='walls-ceiling']").change(function () {
        if ($(".effect-half #walls").is(':checked')) {
            $('.radiobuttons-first input').prop('disabled', false);
            $('.input-with-title-effect input').prop('disabled', false);
        }
        else {
            $('.radiobuttons-first input').prop('disabled', true);
            $('.input-with-title-effect input').prop('disabled', false);
            $('.input-with-title-effect input').prop('disabled', false);
        }
    });

    $('.hcurrency select').customSelect({customClass: 'hcurrency-styled'});

    $('.navleft > ul li').hover(function () {
        $(this).find('> ul').stop().fadeIn(300);
    }, function () {
        $(this).find('> ul').stop().fadeOut(300);
    });

    var mainSlider = $('.mainslider').bxSlider({
        controls: false,
        auto: true,
        mode: 'fade',
        speed: 700,
        autoStart: true,
        onSlideBefore: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
            $('.slideproduct .slideproduct-content').fadeOut(300);
        },
        onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
            var current = $('.mainslider > div').eq(currentSlideHtmlObject).data('slidenumber');
            $('.slideproduct').find('.ms-' + current).fadeIn(500);
        },
        onSliderLoad: function () {
            $('.slideproduct-content').hide();
            $('.slideproduct-content').first().show();
        }

    });

    $('.brandsslider').bxSlider({
        minSlides: 5,
        maxSlides: 5,
        controls: true,
        slideWidth: '10000%',
        pager: false
    });

    $('.pi-top').matchHeight();
    $('.samples-grid > a').matchHeight();

    $('.siteinfo-btn').on('click', function () {
        if ($('.siteinfo').hasClass('siteinfo-opened')) {
            $('.siteinfo').removeClass('siteinfo-opened');
        } else {
            $('.siteinfo').addClass('siteinfo-opened');
        }

    });

    $('.sidebar-categories > article > ul > li').on('click', function () {
        var childList = $(this).find('> ul')
        if (childList.is(':visible')) {
            $(this).removeClass('opened');
            childList.slideUp();
        } else {
            $(this).addClass('opened');
            childList.slideDown();
        }
    });

    $('.qty-input input').numeric();

    $('html').on('keyup', '.qty-input a', function () {
        if ($(this).val() <= '0' || $(this).val() < '0' || $(this).val() == '') {
            $(this).val('1');
        }
    });

    $('html').on('blur', '.qty-input a', function () {
        if ($(this).val() == '' || $(this).val() <= '0') {
            $(this).val('1');
        }
    });

    $('html').on('click', '.qty-input a', function () {
        var qtyInput = $(this).parent().find('input');
        if ($(this).hasClass('qty-less')) {
            if (qtyInput.val() > 1) {
                qtyInput.val(parseInt(qtyInput.val()) - 1);
            }
        }
        if ($(this).hasClass('qty-more')) {
            qtyInput.val(parseInt(qtyInput.val()) + 1);
        }
        if ($(this).parent().hasClass('cart-qty-input')) {
            var cart_id = $(this).parent().find('input').data('id');
            var quantity = $(this).parent().find('input').val();
            $.ajax({
                async: false,
                beforeSend: function () {
                    $('.cart-data').addClass('loading');
                },
                url: '/cart/quantity/' + cart_id + '/?quantity=' + quantity,
                success: function () {
                    get_cart();
                    count_cart();
                    $('.cart-data').removeClass('loading');
                }
            });
        }
    });

    $('.productinfo-btn').on('click', function () {
        if ($('.product-info').hasClass('product-info-opened')) {
            $('.product-info').removeClass('product-info-opened');
            $('.productinfo-btn').text($('.productinfo-btn').data('open'));
        } else {
            $('.product-info').addClass('product-info-opened');
            $('.productinfo-btn').text($('.productinfo-btn').data('close'));
        }
    });

    $('body').on('click', '.overlayElementTrigger', function () {

        if ($('.overlay-forms').is(':visible')) {
            $('.of-form').stop().fadeOut();
        } else {
            $('.overlay-forms').stop().fadeIn();
        }

        $('.' + $(this).data('selector')).stop().fadeIn();
    });
    $('#product-tabs').easytabs({
        updateHash: false
    });

    $('.product-slider').bxSlider({
        pagerCustom: '.product-slider-pager'
    });

    $('.overlayElementTrigger').on('click', function () {

        if ($('.overlay-forms').is(':visible')) {
            $('.of-form').stop().fadeOut();
        } else {
            $('.overlay-forms').stop().fadeIn();
        }

        $('.' + $(this).data('selector')).stop().fadeIn();
    });

    $('.of-close, .of-close-trigger').on('click', function () {
        $(this).parents('.of-form').stop().fadeOut();
        $('.overlay-forms').stop().fadeOut();
    });

    if ($('#contactsmap').length) {
        initializeMap();
    }

    // $('#user-tabs').easytabs({
    // 	updateHash: false
    // });

    $('.profile-select select').customSelect({customClass: 'profile-select-styled'});

    $('.profileEditToggle').on('click', function () {
        $('.profile-static').fadeOut(400, function () {
            $('.profile-editing').fadeIn();
        });
    });
    $('.profileCancelToggle').on('click', function () {
        $('.profile-editing').fadeOut(400, function () {
            $('.profile-static').fadeIn();
        });
    });

    $('.profileSaveToggle').on('click', function () {
        // ajax or standard save profile information and reload current page
    });

    $('.orb-select select').customSelect({customClass: 'orb-select-styled'});
    $('#order-payoption').on('change', function () {
        var payLink = $('#order-payoption option:selected').data('href');
        var payBtnText = $('#order-payoption option:selected').data('text');
        $('.order-paybtn').text(payBtnText).attr('href', payLink);
    });

    $('.pco-select select').customSelect({customClass: 'pco-select-styled'});

    $('body').on('click', '.attach a', function () {
        $(this).parent().find('input[type="file"]').trigger('click');
    });

    $('#contact-form').submit(function () {
        var self = $(this);
        $.post('/contact_api.php', self.serialize(), function (res) {
            var data = $.parseJSON(res);
            if (data.success) {
                if ($('.overlay-forms').is(':visible')) {
                    $('.of-form').stop().fadeOut();
                }
                else {
                    $('.overlay-forms').stop().fadeIn();
                }

                $('.form-contact').stop().fadeIn();
            }
        });

        return false;
    });
    $('.form-sendEmail-form').submit(function () {
        var self = $(this);
        $.post('/feedback_api.php', self.serialize(), function (res) {
            var data = $.parseJSON(res);
            var result = $('.form-sendEmail').find('.result');
            if (data.success) {
                result.find('.message').text(data.message);
                result.show();
            } else {
                result.find('.message').text(data.message);
                result.show();
            }

        });

        setTimeout(function () {
            $('.of-close').click()
        }, 1500);

        return false;
    });
    $("#currency").change(function () {


        //console.info('test');
        var url = location.href;
        if (url.indexOf('?') == -1) {
            url += '?';
        } else {
            url += '&';
        }

        //$.get('/shop/', {'currency': $(this).val()}, function (response) {
        //    console.info(response);
        //    //location.href = '';
        //});
        location.href = '/shop/?currency=' + $(this).val();
    });

    $('html').on('click', '.cart-remove', function () {

        //console.info(product_obj);
        //return;
        $.post('/shop/cart/delete/', {'html': 1, 'id': $(this).data('id')}, function (response) {
            updateShoppingCart('.cart-data');

        });


    });

    $('.consumption_calc_submit').on('click', function () {
        var block = $(this).parent().parent();
        var square = block.find('.square');
        var consumption = block.find('#material_products :selected');
        if (square.val() > 0 && consumption.val() > 0) {
            alert("Вам необходимо " + calcClosestUpperMultiple(square.val() * consumption.val(), 0.5) + "л материала " + consumption.text());
        } else {
            if (square.val() <= 0) {
                alert('Неверная площадь ');
            }
            if (consumption.val() <= 0) {
                alert('Для выбранного материала еще не заполнен расход ');
            }
        }
    });


    $('#material_type').on('change', function () {
        var self = $(this);
        var new_type = $(this).val();
        $.post('/shop/', {'ajax': 1, 'type_id': new_type, 'method': 'getCalcProductsList'}, function (response) {
            $('#material_products').html(response);
            $('.pco-select select').trigger('render');
        });
    });


    function calcClosestUpperMultiple(number, divisor) {

        var result = number / divisor;

        result = Math.ceil(result);
        return result * divisor;

    }

    if ($("#city_select").length) {
        var first_city = '';
        var key = $("#city_select").data('key');
        $.ajax({
            type: "POST",
            url: "http://api.novaposhta.ua/v2.0/json/",
            dataType: 'jsonp',
            crossDomain: true,
            data: {
                "apiKey": key,
                "modelName": "Address",
                "calledMethod": "getCities",
                "methodProperties": {}
            },
            success: function (data) {
                var item = jQuery(data).attr('data');
                var city_select = '';
                first_city = jQuery(item[0]).attr('Ref');
                for (var i = 0; i < item.length; i++) {
                    var desc = jQuery(item[i]).attr('DescriptionRu');
                    var city_id = jQuery(item[i]).attr('Ref');
                    city_select = city_select + '<option value="' + desc + '" data-city-id="' + city_id + '">' + desc + '</option>';
                }
                $('#Checkout_post_city').html(city_select);
                $('#Checkout_post_city').customSelect({customClass: 'orb-select-styled'});
                $.ajax({
                    type: "POST",
                    url: "http://api.novaposhta.ua/v2.0/json/",
                    dataType: 'jsonp',
                    crossDomain: true,
                    data: {
                        "apiKey": key,
                        "modelName": "Address",
                        "calledMethod": "getWarehouses",
                        "methodProperties": {
                            "CityRef": first_city
                        }
                    },
                    success: function (data) {
                        var item = jQuery(data).attr('data');
                        var warehouse_select = '';
                        var first_city = jQuery(item[0]).attr('Ref');
                        for (var i = 0; i < item.length; i++) {
                            var desc = jQuery(item[i]).attr('DescriptionRu');
                            warehouse_select = warehouse_select + '<option value="' + desc + '">' + desc + '</option>';
                        }
                        $('#Checkout_post_warehouse').html(warehouse_select);
                        $('#Checkout_post_warehouse').customSelect({customClass: 'orb-select-styled'});
                    }
                });
            }
        });
    }

    $('#Checkout_post_city').on('change', function () {
        var value_select = $('#Checkout_post_city option:selected').attr('data-city-id');
        var key = $("#city_select").data('key');
        $.ajax({
            type: "POST",
            url: "http://api.novaposhta.ua/v2.0/json/",
            dataType: 'jsonp',
            crossDomain: true, // enable this
            data: {
                "apiKey": key,
                "modelName": "Address",
                "calledMethod": "getWarehouses",
                "methodProperties": {
                    "CityRef": value_select
                }
            },
            success: function (data) {
                var item = jQuery(data).attr('data');
                var warehouse_select = '';
                var first_city = jQuery(item[0]).attr('Ref');
                for (var i = 0; i < item.length; i++) {
                    var desc = jQuery(item[i]).attr('DescriptionRu');
                    warehouse_select = warehouse_select + '<option value="' + desc + '">' + desc + '</option>';
                }
                $('#Checkout_post_warehouse').html(warehouse_select);
                $('#Checkout_post_warehouse').customSelect({customClass: 'orb-select-styled'});
            }
        });
    });

    if ($('#ytCheckout_shipping_id').length) {
        var shipping_id = $('#orderpage-tabs').data('shipping-id');
        $('#ytCheckout_shipping_id').val(shipping_id);
    }

    $('.shipping_method_link').on('click', function () {
        var shipping_id = $(this).data('shipping-id');
        $('#ytCheckout_shipping_id').val(shipping_id);
    });

    $('body').on('click', ".page-left a.compare-add", function () {
        var compare = $.cookie('shop_compare');
        if (compare && compare != 'null') {
            compare += ',' + $(this).data('product');
        } else {
            compare = '' + $(this).data('product');
        }
        if (compare.split(',').length > 0) {
            if (!$('#compare-leash').is(":visible")) {
                $('#compare-leash').css('height', 0).show().animate({height: 39}, function () {
                    var _blinked = 0;
                    setInterval(function () {
                        if (_blinked < 4)
                            $("#compare-leash a").toggleClass("just-added");
                        _blinked++;
                    }, 500);
                });
            }
            var url = $("#compare-leash").attr('href').replace(/compare\/.*$/, 'compare/' + compare + '/');
            $('#compare-leash').attr('href', url).show().find('strong').html(compare.split(',').length);
            if (compare.split(',').length > 1) {
                $("#compare-link").attr('href', url).show();
            }
        }
        $.cookie('shop_compare', compare, {expires: 30, path: '/'});
        $(this).attr('class', 'pi-compare compare-remove pi-compare-remove');
        $(this).html('Удалить<br /> из сравнения');
        // $("a.compare-remove").show();
        return false;
    });

    $('body').on('click', ".popularitems a.compare-add", function () {
        var compare = $.cookie('shop_compare');
        if (compare && compare != 'null') {
            compare += ',' + $(this).data('product');
        } else {
            compare = '' + $(this).data('product');
        }
        if (compare.split(',').length > 0) {
            if (!$('#compare-leash').is(":visible")) {
                $('#compare-leash').css('height', 0).show().animate({height: 39}, function () {
                    var _blinked = 0;
                    setInterval(function () {
                        if (_blinked < 4)
                            $("#compare-leash a").toggleClass("just-added");
                        _blinked++;
                    }, 500);
                });
            }
            var url = $("#compare-leash").attr('href').replace(/compare\/.*$/, 'compare/' + compare + '/');
            $('#compare-leash').attr('href', url).show().find('strong').html(compare.split(',').length);
            if (compare.split(',').length > 1) {
                $("#compare-link").attr('href', url).show();
            }
        }
        $.cookie('shop_compare', compare, {expires: 30, path: '/'});
        $(this).attr('class', 'pi-compare compare-remove pi-compare-remove');
        $(this).html('Удалить<br /> из сравнения');
        // $("a.compare-remove").show();
        return false;
    });

    $('body').on('click', ".page-left a.compare-remove", function () {
        var compare = $.cookie('shop_compare');
        if (compare && compare != 'null') {
            compare = compare.split(',');
        } else {
            compare = [];
        }
        var i = $.inArray($(this).data('product') + '', compare);
        if (i != -1) {
            compare.splice(i, 1)
        }
        $("#compare-link").hide();
        if (compare.length > 0) {
            $.cookie('shop_compare', compare.join(','), {expires: 30, path: '/'});
            var url = $("#compare-leash").attr('href').replace(/compare\/.*$/, 'compare/' + compare.join(',') + '/');
            $('#compare-leash').attr('href', url).show();
        } else {
            $('#compare-leash').hide();
            $.cookie('shop_compare', null, {path: '/'});
        }
        $(this).attr('class', 'pi-compare compare-add');
        $(this).html('Сравнить');
        // $("a.compare-add").show();
        return false;
    });

    $('body').on('click', ".popularitems a.compare-remove", function () {
        var compare = $.cookie('shop_compare');
        if (compare && compare != 'null') {
            compare = compare.split(',');
        } else {
            compare = [];
        }
        var i = $.inArray($(this).data('product') + '', compare);
        if (i != -1) {
            compare.splice(i, 1)
        }
        $("#compare-link").hide();
        if (compare.length > 0) {
            $.cookie('shop_compare', compare.join(','), {expires: 30, path: '/'});
            var url = $("#compare-leash").attr('href').replace(/compare\/.*$/, 'compare/' + compare.join(',') + '/');
            $('#compare-leash').attr('href', url).show();
        } else {
            $('#compare-leash').hide();
            $.cookie('shop_compare', null, {path: '/'});
        }
        $(this).attr('class', 'pi-compare compare-add');
        $(this).html('Сравнить');
        // $("a.compare-add").show();
        return false;
    });

    $('#profile_country').on('change', function () {
        profile_load_region();
        $('#profile_region select').customSelect({customClass: 'profile-select-styled'});
    });

    $('#password_change_link').on('click', function () {
        $('#password_change_block').show();
        $('#password_change_link').hide();
    });

    $('.product-option').on('change', function () {
        var cart = $('.qty-tocart');
        var name = $(this).data('name');
        var option = $(this).data('option');
        var price = $(this).data('price');
        var id = $(this).data('optionapi');
        $('.pc-price strong').text(price + ' грн.');
        cart.data('price', price);
        cart.data('name', name + ', ' + option);
        cart.data('option', id);
    });

    if ($('input').is('#checkout-new-post-address')) {
        $('#checkout-new-post-address').prop('disabled', true);
    }

    $('#Checkout_post_to_door').on('change', function () {
        if ($(this).is(':checked')) {
            $('#Checkout_post_address').prop('disabled', false);
        }
        else {
            $('#Checkout_post_address').prop('disabled', true);
        }
    });

    $('#zoom_01').elevateZoom({
        cursor: "crosshair",
        lensSize: 50
    });

    $('.pc-when, .pc-giveprice').on('click', function () {
        var img_url = $(this).data('img');
        var title = $('.page-heading').text();
        $('.ftov-cent__img img').attr('src', img_url);
        $('.ftov-cent__img div').text(title);
    });

    $('.pc-giveprice').on('click', function () {
        var price = $(this).data('price');
        var title = $('.page-heading').text();
        $('#getprice-price').val(price);
        $('#getprice-price_nologin').val(price);
        $('#getprice-product').val(title);
        $('#getprice-product_nologin').val(title);
    });

    $('.pc-when').on('click', function () {
        var id = $(this).data('id');
        var sku = $(this).data('sku');
        $('#arrive-pid').val(id);
        $('#arrive-pid-nologin').val(id);
        $('#arrive-skuid').val(sku);
        $('#arrive-skuid-nologin').val(sku);
    });

    $('#get-price-login').submit(function () {
        var self = $(this);
        $.post('/feedback_api.php', self.serialize(), function (res) {
            var data = $.parseJSON(res);
            var result = $('.form-tovPrice').find('.result');
            if (data.success) {
                result.find('.message').text(data.message);
                result.show();
            } else {
                result.find('.message').text(data.message);
                result.show();
            }
        });

        setTimeout(function () {
            $('.of-close').click()
        }, 1500);

        return false;
    });

    $('#get-price-no-login').submit(function () {
        var self = $(this);
        $.post('/signup/', self.serialize(), function (res) {
        });
        $.post('/login/', self.serialize(), function (res) {
        });
        $.post('/feedback_api.php', self.serialize(), function (res) {
            var data = $.parseJSON(res);
            var result = $('.form-tovPrice').find('.result');
            if (data.success) {
                result.find('.message').text(data.message);
                result.show();
            } else {
                result.find('.message').text(data.message);
                result.show();
            }
        });
        setTimeout(function () {
            $('.of-close').click()
        }, 1500);

        return false;
    });

    $('#product-arived-login').submit(function () {
        var self = $(this);
        $.post('/shop/arrivedAdd/', self.serialize(), function (res) {
            var result = $('.form-tovAv').find('.result').show();
        });

        setTimeout(function () {
            $('.of-close').click()
        }, 1500);

        return false;
    });

    $('#product-arived-nologin').submit(function () {
        var self = $(this);
        $.post('/signup/', self.serialize(), function (res) {
        });
        $.post('/login/', self.serialize(), function (res) {
        });
        $.post('/shop/arrivedAdd/', self.serialize(), function (res) {
        });
        $.post('/feedback_api.php', self.serialize(), function (res) {
            var result = $('.form-tovAv').find('.result').show();
        });

        setTimeout(function () {
            $('.of-close').click()
        }, 1500);

        return false;
    });

    $('#arrive-data-email').on('change', function ()
        //Форма сообщить когда появится, поле email
    {
        var email_value = $(this).val();
        $('#arrive-email').val(email_value);
    });

    $('#product-review-form').submit(function ()
        //Написать отзыв
    {
        var self = $(this);
        var product_id = $('#comment-product').val();
        $.ajax({
            type: 'POST',
            url: '/product/review/' + product_id,
            data: self.serialize(),
            success: function (data) {
                $('.comments-posts').html(data);
            }
        });
        return false;
    });

    $('.comment-more').on('click', function ()
        //Комментарии - загрузить еще
    {
        var current_id = $(this).data('current');
        var all_id = $(this).data('all');

        $('#comment-' + current_id).show();
        $('#comment-answer-' + current_id).show();

        console.log(current_id);
        current_id++;
        console.log(current_id);
        console.log(all_id);

        $(this).data('current', current_id);

        if (all_id <= current_id) {
            $('.catalog-btns').hide();
        }
    });

    $('.comment-all').on('click', function ()
        //Комментарии - загрузить все
    {
        $('.comment').show();
        $('.catalog-btns').hide();
    });

    $('.color-footer').on('change', function ()
        //Синхронная смена цвета
    {
        var color_value = $(this).data('color');
        var color_name = $(this).data('name');
        $('#color-' + color_value).trigger('click');
        $('.color-choise strong').text(color_name);
    });

    $('.decor-color').on('change', function ()
        //Синхронная смена цвета
    {
        var color_value = $(this).data('color');
        $('#color-footer-' + color_value).trigger('click');
    });

    $('#blog-all').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: '/blog/ajaxall/' + id,
            success: function (data) {
                $('.list-blog-div').html(data);
                $('#blog-more').remove();
                $('#blog-all').remove();
                $('.catalog-pagination').remove();
            }
        });
    });

    $('#blog-more').on('click', function () {
        var id = $(this).data('id');
        var page = $(this).data('page');
        $.ajax({
            url: '/blog/ajaxmore/' + id + '?page=' + page,
            success: function (data) {
                $('.list-blog-div').append(data);
                page++;
                $('.page-' + page).addClass('current');
                $('#blog-more').data('page', page);
                var count_page = $('#blog-info').data('count');
                if (count_page <= page) {
                    $('#blog-more').remove();
                    $('.catalog-pagination').remove();
                }
                $('#blog-info').remove();
            }
        });
    });

    $('#category-all').on('click', function () {
        var id = $(this).data('id');
        var order = $(this).data('order');
        var asc = $(this).data('asc');
        $.ajax({
            url: '/category/ajaxall/' + id + '?order=' + order + '&asc=' + asc,
            success: function (data) {
                $('.list-product-div').html(data);
                $('#category-more').remove();
                $('#category-all').remove();
                $('.catalog-pagination').remove();
            }
        });
    });

    $('#category-more').on('click', function () {
        var id = $(this).data('id');
        var page = $(this).data('page');
        var order = $(this).data('order');
        var asc = $(this).data('asc');
        $.ajax({
            url: '/category/ajaxmore/' + id + '?page=' + page + '&order=' + order + '&asc=' + asc,
            success: function (data) {
                $('.list-product-div').append(data);
                page++;
                $('.page-' + page).addClass('current');
                $('#category-more').data('page', page);
                var count_page = $('#category-info').data('count');
                if (count_page <= page) {
                    $('#category-more').remove();
                    $('.catalog-pagination').remove();
                }
                $('#category-info').remove();
            }
        });
    });

    $('#User_country_id').on('change', function () {
        var country_id = $(this).val();
        $.ajax({
            url: '/account/region/' + country_id,
            dataType: 'json',
            success: function (data) {
                select_html = '';
                $.each(data, function (key, value) {
                    select_html = select_html + '<option value="' + key + '">' + value + '</option>';
                });
                $('#User_region_id').html(select_html);
                //$('#User_region_id').customSelect({customClass: 'profile-select-styled'});
            }
        });
    });

    $('.add-to-cart').on('click', function () {
        var product = $(this).data('product');
        var name = $(this).data('name');
        var price = $(this).data('price');
        var option = $(this).data('option');
        var quantity = 1;
        if ($(this).hasClass('qty-tocart')) {
            quantity = $('.pc-qty .qty-input input').val();
        }
        $.ajax({
            url: '/cart/add/' + product,
            dataType: 'json',
            data: 'name=' + name + '&price=' + price + '&quantity=' + quantity + '&option=' + option,
            success: function (data) {
                if (1 == data.status) {
                    var cart = $('.navcart');
                    cart.find('span').text(data.count);
                    if (0 == data.count) {
                        cart.addClass('empty');
                    } else {
                        cart.removeClass('empty');
                    }
                }
            }
        });
    });

    $('.navcart').on('click', function () {
        get_cart();
        $('.overlay-forms').stop().fadeIn();
        $('.form-cart').stop().fadeIn();
    });

    if ('undefined' !== typeof(user_account_edit) && user_account_edit) {
        $('.profileEditToggle').click();
    }

    if ('undefined' !== typeof(user_account_password) && user_account_password) {
        $('#password_change_link').click();
    }

    if ('undefined' !== typeof(contacts_call_send) && contacts_call_send) {
        $('#form-contact-link').click();
    }

    if ('undefined' !== typeof(register_success) && register_success) {
        $('#form-register-link').click();
    }

    if ('undefined' !== typeof(resume_success) && resume_success) {
        $('#form-vacancies-link').click();
    }

    if ('undefined' !== typeof(checkout_success) && checkout_success) {
        $('#form-checkout-link').click();
    }

    $('#sertificate_select').on('change', function () {
        var product_id = $(this).val();
        $.ajax({
            url: '/certificate/ajax/' + product_id,
            dataType: 'json',
            success: function (data) {
                $('.sub_sertificate_select').html(data.select);
                $('span.sub_sertificate_select').remove();
                $('.sub_sertificate_select').removeClass('hasCustomSelect');
                $('.sub_sertificate_select').attr('style', '');
                $('.sub_sertificate_select').customSelect({customClass: 'pco-select-styled'});
                $('#rules').html(data.rules);
                $('#description').html(data.description);
            }
        });
    });

    $('#search-input').on('keyup', function(){
        var search_value = $(this).val();
        $.ajax({
            url:'/product/ajaxsearch',
            method: 'POST',
            data: {name: search_value},
            success: function (data) {
                if (data) {
                    $('.autocomplete-suggestions').html(data);
                    $('.autocomplete-suggestions').show();
                } else {
                    $('.autocomplete-suggestions').hide();
                }
            }
        });
    });
});

function get_cart() {
    $.ajax({
        async: false,
        beforeSend: function () {
            $('.navcart').addClass('loading');
        },
        url: '/cart/',
        dataType: 'json',
        success: function (data) {
            table_body = '';
            for (var i = 0; i < data.product.length; i++) {
                table_body = table_body
                    + '<tr>'
                    + '<td><a href="' + data.product[i].url + '">' + data.product[i].name + '</a></td>'
                    + '<td>'
                    + '<div class="qty-input cart-qty-input clearfix">'
                    + '<a href="javascript:;" class="qty-less"></a>'
                    + '<input type="text" value="' + data.product[i].quantity + '" data-id="' + data.product[i].id + '">'
                    + '<a href="javascript:;" class="qty-more"></a>'
                    + '</div>'
                    + '</td>'
                    + '<td>' + data.product[i].price + ' UAH</td>'
                    + '<td><a href="javascript:;" data-id="' + data.product[i].id + '" class="cart-remove"></a></td>'
                    + '</tr>';
            }
            $('#cart-table tbody').html(table_body);
            $('#cart-total-price').html(data.total);
            $('.qty-input input').numeric();
            $('.navcart').removeClass('loading');
            change_cart_change();
            remove_cart();
        }
    });
}

function change_cart_change() {
    $('.cart-qty-input input').on('change', function () {
        var cart_id = $(this).data('id');
        var quantity = $(this).val();
        if (quantity < 1) {
            quantity = 1;
        }
        $.ajax({
            async: false,
            beforeSend: function () {
                $('.cart-data').addClass('loading');
            },
            url: '/cart/quantity/' + cart_id + '/?quantity=' + quantity,
            success: function () {
                get_cart();
                count_cart();
                $('.cart-data').removeClass('loading');
            }
        });
    });
}

function remove_cart() {
    $('.cart-remove').on('click', function () {
        var cart_id = $(this).data('id');
        $.ajax({
            async: false,
            beforeSend: function () {
                $('.cart-data').addClass('loading');
            },
            url: '/cart/remove/' + cart_id + '/',
            success: function () {
                get_cart();
                count_cart();
                $('.cart-data').removeClass('loading');
            }
        });
    });
}

function count_cart() {
    $.ajax({
        beforeSend: function () {
            $('.navcart').addClass('loading');
        },
        dataType: 'json',
        url: '/cart/',
        success: function (data) {
            var cart = $('.navcart');
            cart.find('span').text(data.count);
            if (0 == data.count) {
                cart.addClass('empty');
            } else {
                cart.removeClass('empty');
            }
            $('.navcart').removeClass('loading');
        }
    });
}

var marker, i;
var markersArray = [];
var map;

function initializeMap() {

    map = new google.maps.Map(document.getElementById('contactsmap'), {
        zoom: 17,
        center: new google.maps.LatLng(50.449936, 30.523078),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var locations = [
        [$('#contactsmap').data('officelat'), $('#contactsmap').data('officelng'), 'Офис'],
        [$('#contactsmap').data('salonlat'), $('#contactsmap').data('salonlng'), 'Салон']
    ];

    var infowindow = new google.maps.InfoWindow({maxWidth: 400});

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][0], locations[i][1]),
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(
                    '<div class="infowindow">' +
                    '<p>' + locations[i][2] + '</p>' +
                    '</div>'
                );
                infowindow.open(map, marker);
            }
        })(marker, i));
        markersArray.push(marker);
        map.setCenter(new google.maps.LatLng(locations[0][0], locations[0][1]));
    }

    function AutoCenter() {
        //  Create a new viewpoint bound
        var bounds = new google.maps.LatLngBounds();
        //  Go through each...
        $.each(markersArray, function (index, marker) {
            bounds.extend(marker.position);
        });
        //  Fit these bounds to the map
        map.fitBounds(bounds);
        var listener = google.maps.event.addListener(map, "idle", function () {
            if (map.getZoom() > 16) map.setZoom(17);
            google.maps.event.removeListener(listener);
        });
    }

    AutoCenter();

}

$(window).resize(function () {
});
$(window).load(function () {
});
// $().on('', function() {});

(function () {
    var $wrapper = $('#wa-my-info-wrapper'),
        $form = $wrapper.find('#wa-my-info-edit-wrapper'),
        $info = $wrapper.find('#wa-my-info-read-wrapper'),
        $password = $form.find('.wa-field-password'),
        $photo = $form.find('.wa-field-photo');

    if ($password.length) {
        var $change_link = $('<span><a href="#">[s`Change password`]</a></span>'),
            $password_inputs = $password.find('p');

        $password.find('.wa-value').prepend($change_link);

        $change_link.on('click', 'a', function (e) {
            e.preventDefault();
            $change_link.hide();
            $password_inputs.slideDown();
        });
    }

    if ($photo.length) {
        var $delete_photo = $('<span><a href="#">[s`Delete photo`]</a></span>'),
            $photo_input = $photo.find('[name="profile[photo]"]'),
            $user_photo = $photo.find('img:first'),
            $default_photo = $photo.find('img:last');

        if ($user_photo[0] != $default_photo[0]) {
            $default_photo
                .hide()
                .after($delete_photo);

            $delete_photo.on('click', 'a', function (e) {
                e.preventDefault();
                $default_photo.show();
                $user_photo.hide();
                $delete_photo.hide();
                $photo_input.val('');
            });
        } else {
            $default_photo.show();
        }
    }

    $wrapper
        .on('click', '#wa-my-info-edit', function (e) {
            e.preventDefault();
            if ($password.length) {
                $change_link.show();
                $password_inputs.hide();
            }
            if ($photo.length) {
                if ($user_photo[0] != $default_photo[0]) {
                    $delete_photo.show();
                    $default_photo.hide();
                }
            }
            $form.show();
            $info.hide();
        })
        .on('click', '#wa-my-info-cancel', function (e) {
            e.preventDefault();
            $form.hide();
            $info.show();
        });
})();