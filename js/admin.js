$(document).ready(function ($) {
    $('#sort-table').rowSorter({
        handler: 'tr.sorter td',
        onDrop: function (tbody, row, new_index, old_index) {
            var item_id = $(row).data('id');
            var controller_name = $(row).data('controller');
            $.ajax({
                url: '/' + controller_name + '/order/' + item_id + '/?order_new=' + new_index + '&order_old=' + old_index,
            });
        }
    });

    $('.sort-table').rowSorter({
        handler: 'tr.sorter td',
        onDrop: function (tbody, row, new_index, old_index) {
            var item_id = $(row).data('id');
            var controller_name = $(row).data('controller');
            $.ajax({
                url: '/' + controller_name + '/order/' + item_id + '/?order_new=' + new_index + '&order_old=' + old_index,
            });
        }
    });

    CGridViewAfterAjax();

    $('#product-option-add').on('click', function () {
        var element_id = $(this).data('id');
        $.ajax({
            url: '/admin/product/option/' + element_id,
            success: function (data) {
                $('#product-option-list').append(data);
            }
        });
        element_id++;
        $(this).data('id', element_id);
    });

    if ($('#product-form').length) {
        hide_show_product_form();
    }

    $('#Product_view_id').on('change', function () {
        hide_show_product_form();
    });

    var index_order_chart = $('#index-order-chart');
    if (index_order_chart.length) {
        $('#index-order-chart').highcharts({
            title: {
                text: 'Заказы за последний месяц',
                x: -20 //center
            },
            xAxis: {
                categories: order_date
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Заказы'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: ' грн.'
            },
            legend: {
                enabled: false
            },
            series: [{
                name: 'Суммы заказов',
                data: order_summ
            }],
            credits: {
                enabled: false
            }
        });
    }
});

function status_change() {
    $('.status').on('change', function () {
        var item_id = $(this).data('id');
        var controller_name = $(this).closest('.grid-view').data('controller');
        $.ajax({
            url: '/' + controller_name + '/status/' + item_id,
        });
    });
}

function toogle_on() {
    $(function () {
        $('input:checkbox[data-toggle="toggle"]').bootstrapToggle();
    });
}

function filter_css_class() {
    $('.filters input').addClass('form-control');
    $('.filters select').addClass('form-control');
}

function CGridViewAfterAjax() {
    status_change();
    toogle_on();
    filter_css_class();
}

function hide_show_product_form() {
    var view_id = $('#Product_view_id').val();

    var tr_brand = $('#tr-brand_id');
    var tr_image = $('#tr-image_id');
    var tr_rules = $('#tr-rules');
    var tr_text = $('#tr-text');
    var tr_infliction = $('#tr-infliction');
    var tr_equipment = $('#tr-equipment');
    var tr_characteristics = $('#tr-technical_characteristics');
    var tr_youtube = $('#tr-youtube');
    var tr_sheet = $('#tr-sheet_id');
    var tr_catalog = $('#tr-catalog_id');
    var tr_color = $('#tr-color');
    var tr_application = $('#tr-application');
    var tr_openoption = $('#tr-openoption');
    var tr_incision = $('#tr-incision_id');
    var tr_set = $('#tr-set');

    if (1 == view_id) {
        tr_brand.show();
        tr_image.show();
        tr_rules.hide();
        tr_text.show();
        tr_infliction.hide();
        tr_equipment.hide();
        tr_characteristics.hide();
        tr_youtube.show();
        tr_sheet.hide();
        tr_catalog.hide();
        tr_color.hide();
        tr_application.hide();
        tr_openoption.hide();
        tr_incision.hide();
        tr_set.hide();
    } else if (2 == view_id) {
        tr_brand.show();
        tr_image.show();
        tr_rules.hide();
        tr_text.show();
        tr_infliction.hide();
        tr_equipment.show();
        tr_characteristics.show();
        tr_youtube.show();
        tr_sheet.show();
        tr_catalog.hide();
        tr_color.hide();
        tr_application.show();
        tr_openoption.show();
        tr_incision.show();
        tr_set.hide();
    } else if (3 == view_id) {
        tr_brand.hide();
        tr_image.hide();
        tr_rules.hide();
        tr_text.hide();
        tr_infliction.hide();
        tr_equipment.hide();
        tr_characteristics.hide();
        tr_youtube.hide();
        tr_sheet.hide();
        tr_catalog.hide();
        tr_color.show();
        tr_application.hide();
        tr_openoption.hide();
        tr_incision.hide();
        tr_set.show();
    } else if (4 == view_id) {
        tr_brand.show();
        tr_image.show();
        tr_rules.hide();
        tr_text.show();
        tr_infliction.show();
        tr_equipment.hide();
        tr_characteristics.hide();
        tr_youtube.show();
        tr_sheet.hide();
        tr_catalog.show();
        tr_color.show();
        tr_application.hide();
        tr_openoption.hide();
        tr_incision.hide();
        tr_set.hide();
    } else if (5 == view_id) {
        tr_brand.show();
        tr_image.hide();
        tr_rules.show();
        tr_text.show();
        tr_infliction.hide();
        tr_equipment.hide();
        tr_characteristics.hide();
        tr_youtube.hide();
        tr_sheet.hide();
        tr_catalog.hide();
        tr_color.hide();
        tr_application.hide();
        tr_openoption.hide();
        tr_incision.hide();
        tr_set.hide();
    } else if (6 == view_id) {
        tr_brand.hide();
        tr_image.show();
        tr_rules.hide();
        tr_text.show();
        tr_infliction.hide();
        tr_equipment.hide();
        tr_characteristics.hide();
        tr_youtube.hide();
        tr_sheet.hide();
        tr_catalog.hide();
        tr_color.hide();
        tr_application.hide();
        tr_openoption.hide();
        tr_incision.hide();
        tr_set.hide();
    } else if (7 == view_id) {
        tr_brand.show();
        tr_image.show();
        tr_rules.hide();
        tr_text.show();
        tr_infliction.show();
        tr_equipment.hide();
        tr_characteristics.hide();
        tr_youtube.show();
        tr_sheet.hide();
        tr_catalog.hide();
        tr_color.hide();
        tr_application.hide();
        tr_openoption.hide();
        tr_incision.hide();
        tr_set.hide();
    } else if (8 == view_id) {
        tr_brand.show();
        tr_image.show();
        tr_rules.hide();
        tr_text.show();
        tr_infliction.show();
        tr_equipment.hide();
        tr_characteristics.hide();
        tr_youtube.show();
        tr_sheet.hide();
        tr_catalog.hide();
        tr_color.hide();
        tr_application.hide();
        tr_openoption.hide();
        tr_incision.hide();
        tr_set.hide();
    } else {
        tr_brand.hide();
        tr_image.hide();
        tr_rules.hide();
        tr_text.hide();
        tr_infliction.hide();
        tr_equipment.hide();
        tr_characteristics.hide();
        tr_youtube.hide();
        tr_sheet.hide();
        tr_catalog.hide();
        tr_color.hide();
        tr_application.hide();
        tr_openoption.hide();
        tr_incision.hide();
        tr_set.hide();
    }
}