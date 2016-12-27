//Genera PDF
function genPDF()
{
    var ruta = $('input:text[name=nom_trab]').val()+"/"+$("input:text[name=ap_pat]").val()+"/"+$("input:text[name=ap_mat]").val()+"/"+$("input:text[name=puesto]").val();
    //var nom_trab = $('input:text[name=nom_trab]').val();
    $.get("obt/pdf/"+ruta+"",function(response,state){
        console.log(ruta);
        var pagina = "obt/pdf/"+ruta+"";
        location.href=pagina
    });
}

function Valida_Campos() {
    var nombre = $('input:text[name=nom_trab]');
    var ap_pat = $('input:text[name=ap_pat]');
    var ap_mat = $('input:text[name=ap_mat]');
    var puesto = $('input:text[name=puesto]');

    if (nombre.val().length<1) {
        //alert('El nombre no puede estar vacio');
        nombre.select();
        nombre.css({'border-color':'red'});
    }
    else
    {
        $('input:text[name=nom_trab]').css({'border-color':'gray'});
        if (ap_pat.val().length<1) {
            //alert('El nombre no puede estar vacio');
            ap_pat.select();
            ap_pat.css({'border-color':'red'});
        }
        else
        {
            ap_pat.css({'border-color':'gray'});
            if (ap_mat.val().length<1) {
                //alert('El nombre no puede estar vacio');
                ap_mat.select();
                ap_mat.css({'border-color':'red'});
            }
            else
            {
                ap_mat.css({'border-color':'gray'});
                if (puesto.val().length<1) {
                    //alert('El nombre no puede estar vacio');
                    puesto.select();
                    puesto.css({'border-color':'red'});
                }
                else
                {
                    puesto.css({'border-color':'gray'});
                    genPDF();
                }
            }
        }
    }
}
