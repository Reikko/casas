$(document).ready(function() {

    $(':text').keyup(function() {
        var pago = $(':text:focus').val();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form_enviar');
        var url = form.attr('action');
        var data = form.serialize();


        if(pago>0) {
            $.get("pago/" + id + "/" + pago, function (response) {
                $("#pago" + id).html(response);
                $.post(url,data,function (mensaje) {
                    console.log(mensaje);

                }).fail(function(){

                });
            });
        }
        else {

        }
    });

});