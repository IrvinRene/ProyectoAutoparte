$("#modelo").change(function(event){
	$.get("agnos/"+event.target.value+"",function(response, agno)){
		console.log(response);
		for(i=0; i<response.length; i++){
			$("#agnos").append("<option value='"+response[i].id+"'>"response[i].name+"</option>");
		}
	};
});