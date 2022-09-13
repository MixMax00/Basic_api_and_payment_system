$(document).ready(function(){

  $(document).ready(function(){
  		$("#sslPay").click(function(){
  			$.ajax({
  				method : "POST",
  				url    : "/api/sslPay",
  				data   : "data",
  				success: function(result){
  					console.log(result);
  				}
  			});
  		});
  });

});