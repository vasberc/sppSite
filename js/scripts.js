//Breadcrubs
$(document).ready(function () {
    //Get title id
	var a = $("title").attr("id");
	var b = "#"+a+"Bread";
	
	if(a == "Home"){
		
		$(".breadcrumb-item").addClass('d-none')
		$(b).removeClass('d-none');
	}
	
	//make active class
	
	$(b).addClass('active');
	$(b).children('a').detach();
	$(b).prepend(a);
	$('#BreadH3').prepend(a);
	
        
});