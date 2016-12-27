function seleccionarCalle()
{
    if( $('#allCalle').prop('checked') ) {
        var calle = $('#calle option:selected').index();

        //var filas = $('#formSelect select').length;
        var filas = $("[name|='id_calle[]']");;
        for(var i =0 ;i < filas.length;i++)
        {
            filas[i].selectedIndex = calle;
        }
    }
}

function seleccionNumExt()
{
    if( $('#allExt').prop('checked') ) {
        var num = $('#a_ext').val();
        var filas = $("[name|='num_ext[]']");
        for(var i = 0 ;i < filas.length; i++)
        {
            filas[i].value = num;
        }
    }
}