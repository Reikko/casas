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
    var ruta = $('input:text[name=nom_trab]').val()+"/"+$("input:text[name=ap_pat]").val()+"/"+$("input:text[name=ap_mat]").val()+"/"+$("input:text[name=puesto]").val();
    //var nom_trab = $('input:text[name=nom_trab]').val();
    $.get("obt/pdf/"+ruta+"",function(response,state){
        console.log(ruta);
        var pagina = "obt/pdf/"+ruta+"";
        location.href=pagina
    });
}

//$('input:text[name=nom_trab]').onkeydown = ValidaNombre();

function ValidaNombre()
{
    if($('input:text[name=nom_trab]') == "")
    {
        alert('El campo no puede estar vacio');
    }
}

function validar(frm) {
    frm.sub.disabled = true;

        if ($('input:text[name=nom_trab]').value =='')
            return
    frm.sub.disabled = false;
}






