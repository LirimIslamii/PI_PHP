function validate(){

			$("#unlocking").submit(function(e){
				e.preventDefault();
			var imei = $('#IMEI').val();
			var phone = $('#iPhone').val();

		if(imei.length < 15){
				$("#err").text("IMEI must be 15 digits!").css("margin", "0");
			if(imei == "" || imei == null)
				$("#err").text("IMEI required!").css("margin", "0");
			}
		else {
			$('.modal').modal({
			fadeDuration: 600,
			fadeDelay: 0.100        
			   });

			$("#btn_1").click(function(){

			$.ajax({
			url: "https://formspree.io/xyykaobe", 
			method: "POST",
			data: {
			   	iPhone: $("#iPhone").val(),
			    IMEI: $("#IMEI").val(),
			    Email: $("#email").val()
			},
			dataType: "json"
				}).done(function(){
					$("#iPhone").val("");
					$("#IMEI").val("");
					$("#email").val("");
					swal("Të dhënat u dërguan me sukses!",{
							icon: "success",
							button:false,
							timer: 3000
						});
							setTimeout(function() {
								location.reload();	
							},3000);
				}).fail(function(){
					swal("Dështoi dërgimi i të dhënave, provo përsëri!",{
							icon: "error",
							button:false,
							timer: 3000
						});
							setTimeout(function() {
								location.reload();	
							},3000);
					});
					});
				}
			});
		}