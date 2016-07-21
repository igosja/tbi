$(document).ready(function ($) {
    status_change();

    $('#sort-table').rowSorter({
        handler: 'tr.sorter td',
        onDrop: function (tbody, row, new_index, old_index) {
            var item_id = $(row).data('id');
            var controller_name = $(row).data('controller');
            $.ajax
            (
                {
                    url: '/' + controller_name + '/order/' + item_id + '/?order_new=' + new_index + '&order_old=' + old_index,
                }
            );
        }
    });

    $('.sort-table').rowSorter({
        handler: 'tr.sorter td',
        onDrop: function (tbody, row, new_index, old_index) {
            var item_id = $(row).data('id');
            var controller_name = $(row).data('controller');
            $.ajax
            (
                {
                    url: '/' + controller_name + '/order/' + item_id + '/?order_new=' + new_index + '&order_old=' + old_index,
                }
            );
        }
    });
});

function status_change() {
    $('.status').on('change', function () {
        var item_id = $(this).data('id');
        var controller_name = $(this).data('controller');
        $.ajax
        (
            {
                url: '/' + controller_name + '/status/' + item_id,
            }
        );
    });
}

function toogle_on() {
    $(function () {
        $('input:checkbox').bootstrapToggle();
    });
}

function CGridViewAfterAjax() {
    status_change();
    toogle_on();
}