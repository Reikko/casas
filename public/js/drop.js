$("#edo_sel").change(function ( event) {
    $.get("estado/"+event.target.value+"",function(response,state){
        console.log(event);
        $("#cdad_sel").empty(response);
        $("#cdad_sel").empty(response);
        for(i=0 ; i<response.length;i++)
        {
            $("#cdad_sel").append("<option value = \""+response[i].id+"\"> "+response[i].nom_col+"</option>");
        }
    });
});




