$("#edo_sel").change(function ( event) {

    $.get("estado/"+event.target.value+"",function(response,state){
        console.log(event);
        $("#cdad_sel").empty(response);
        for(i=0 ; i<response.length;i++)
        {
            $("#cdad_sel").append("<option value = \""+response[i].id+"\"> "+response[i].nom_cdad+"</option>");
        }
    });
});

$("#calle_cdad_sel").change(function ( event) {

    $.get("desa/"+event.target.value+"",function(response,state){
        console.log(event);
        $("#des_sel").empty(response);
        for(i=0 ; i<response.length;i++)
        {
            $("#des_sel").append("<option value = \""+response[i].id+"\"> "+response[i].nom_des+"</option>");
        }
    });
});

function Obten_Datos()
{

    //var nom_trab = $('input:text[name=nom_trab]').val();
    var ap_pat = $("input:text[name=ap_pat]").val();
    var ap_mat = $("input:text[name=ap_mat]").val();


    $.get("obt/pdf/"+$('input:text[name=nom_trab]').val()+"",function(response,state){
        console.log($('input:text[name=nom_trab]').val());

    });
    /*$.ajax({
        type: 'post',
        data: {"nom_trab": nom_trab, "ap_pat": ap_pat},
        url: "../obt/pdf"
    }).done(function (data) {
        console('hola');
    });*/
}





