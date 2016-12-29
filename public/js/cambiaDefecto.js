
//Funcion para Relaizar los cambios de defecto
$("#tipoDef").change(function ( event) {

    $.get("defecto/"+event.target.value+"",function(response,state){
        $("#defecto").empty(response);
        for(i=0 ; i < response.length;i++)
        {
            $("#defecto").append("<option value = \""+response[i].id+"\"> "+response[i].descripcion+"</option>");
        }

        $("#descrip").attr({
            'href': '../../tipodefecto/'+event.target.value,
            'value': ''+event.target.innerHTML
        });

    });

});