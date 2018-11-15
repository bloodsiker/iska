
// Заказчик выполняет задания
$('body').on('click', '.update-position', function(e){
    e.preventDefault();

    var position = $(this);
    var position_id = position.data('position');
    var data = "action=position&position_id=" + position_id;

    $('#title_position').val('');
    $('#id_position').val('');

    $.ajax({
        url: "/admin/federation/position/ajax",
        type: "POST",
        data: data,
        cache: false,
        success: function (data) {
            $('#title_position').val(data);
            $('#id_position').val(position_id);
            //var obj = jQuery.parseJSON(data);

        }
    });
});
