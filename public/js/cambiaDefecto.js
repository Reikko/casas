
//Funcion para Relaizar los cambios de defecto
$("#tipoDef").change(function ( event) {

    $.get("defecto/"+event.target.value+"",function(response,state){
        //console.log(response);
        $("#defecto").empty(response);
        for(i=0 ; i < response.length;i++)
        {
            $("#defecto").append("<option value = \""+response[i].id+"\"> "+response[i].descripcion+"</option>");
        }
    });
});