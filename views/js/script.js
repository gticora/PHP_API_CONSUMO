function consultar(){
  
    $.get("models/model_consulta.php", {}, function (data, status) {
        $("#cuerpo").html("");
       var info = JSON.parse(data);
        for(var i=0; i<info['result'].length; i++){
           // console.log(info['result'][i]['contact_no']);
            var tr = `<tr>
            <td>`+info['result'][i]['id']+`</td>
            <td>`+info['result'][i]['contact_no']+`</td>
            <td>`+info['result'][i]['lastname']+`</td>
            <td>`+info['result'][i]['createdtime']+`</td>
            </tr>`;
            
            
            $("#cuerpo").append(tr);
        }

    });


}