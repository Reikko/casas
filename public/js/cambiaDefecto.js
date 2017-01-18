
//Funcion para Relaizar los cambios de defecto
$("#tipoDef").change(function ( event) {

    $.get("defecto/"+event.target.value+"",function(response,state){
        $("#defecto").empty(response);
        for(i=0 ; i < response.length;i++)
        {
            $("#defecto").append("<option value = \""+response[i].id+"\"> "+response[i].descripcion+"</option>");
        }
        console.log($("#tipoDef option:selected").text());
        $("#descrip").attr({
            'href': '../../tipofallo/'+event.target.value
        });

        $("#descrip").text("Ver : "+$("#tipoDef option:selected").text());
    });

});