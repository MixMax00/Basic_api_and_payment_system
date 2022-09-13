$(document).ready(function(){

	const post_id = $("#post-details").attr('data-post-id');
	comments(post_id);

	$("#comment-submit").submit(function(e){
		e.preventDefault();

		const formData = $(this).serialize();

		$.ajax({
			method: "POST",
			url   : "/api/comments/" + post_id,
			data  : formData,
			success : (result) => {
				$('#new_comment').val(' ');
				comments(post_id);
			}
		});

	})


	products();
	
});



function comments(post_id){
	$.ajax({
		method: "GET",
		url   : "/api/comments/" + post_id,
		success : (result) => {
			$('#post-comment').html(result);
		}
	});
};

function products(){
   $.ajax({
		method: "GET",
		url   : "/api/product",
		success : (result) => {
			$('#products').html(result);

		}
	});
};





