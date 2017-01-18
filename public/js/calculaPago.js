
$(document).ready(function() {
    $(':text').keyup(function() {
        var pago = $(':text:focus').val();
        var id = $(':text:focus').attr("id");

        if(pago>0) {
            $.get("pago/" + id + "/" + pago, function (response, state) {
                $("#pago" + id).html(response);
                console.log($("#pago" + id).html());
                /*$.ajax({
                    type: "post",
                    url: "",
                    data: {
                        nombre: nombre
                    }, success: function (msg) {
                        alert("Se ha realizado el POST con exito "+msg);
                    }
                });*/
                $("#envia").click();

            });
        }
    });

});