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




