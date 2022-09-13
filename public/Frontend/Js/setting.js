$(document).ready(function(){
	$.ajax({
		method: "GET",
		url   : "/api/setting",
		success : (result) => {
			$('body').css("background-color", result.bg_color);
			$('.bg-title').css("color", result.secondery_color);
			$('.card').css("background-color", result.primary_color);
			$('.text-color').css("color", result.text_color);
			

			//console.log('result',result);
		}
	});
});