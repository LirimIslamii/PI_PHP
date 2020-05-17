$(function($){
			$('.netw').click(function(e){
				e.preventDefault();

				var IMEI = $('input[name=imei]').val(); 
				$.ajax({
					type: "POST",
					url: "intentbox.php",
					data: {
						"search_post_btn" : 1,
						"imei" : IMEI,
					},
 					dataType: "text",
					success:function(response){
						$("#result").html(response);
					}
				});
			});
		});