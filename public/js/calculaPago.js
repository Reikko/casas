$(document).ready(function() {

    $(':text').keyup(function() {
        var pago = $(':text:focus').val();
        var row = $(this).parents('tr');

        var id = row.data('id');
        var form = $('#form_enviar');
        var url = form.attr('action');
        var data = form.serialize();
        var este = $("#este" + id).innerHTML;
        //alert(este);

        if(pago > 0) {
            console.log(pago);
            $.get("pago/" + id + "/" + pago, function (response) {
                if(pago <=100)
                    $("#pago" + id).html(response);

                $.post(url,data,function (mensaje) {
                    console.log(mensaje);
                    if(mensaje!="")
                        $("#error" + id).html(mensaje["porcentaje."+row.index()]["0"]);
                    else
                    {
                        $("#error" + id).html("Actualizado");
                        $("#este" + id).html(pago+" %");
                        $("#total" + id).html(pago+" %");
                    }
                }).fail(function(){

                });
            });
        }
        else {

        }
    });

});