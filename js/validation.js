function validate(){


			$("#unlocking").submit(function(e){
				e.preventDefault();

				var iphone = document.getElementById("iPhone");
				var imei = document.getElementById("IMEI").value;

		if(!iphone.options.namedItem("select").selected){
			if(imei.length < 15){

				$("#err").text("IMEI must be 15 digits!").css("margin","0");

				if(imei == "" || imei == null)
					$("#err").text("IMEI required!").css("margin","0");

			}

			else {

			$("#err").text("");
			$('.modal').modal({
				fadeDuration: 500,
				fadeDelay:0.400    
			   });

		$("#btn_1").click(function(){


			var email = $("#email").val();

				if(email == ""){
					swal("Insert an  Email 🤨",{
						buttons: "OK"
					});
					return false;
				}

				else {

			$.ajax({
			url: "https://formspree.io/mpzyqaey", 
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
								}
						});
					}
				}
		else{
				swal("Please Choose an iPhone 😀!",{
						buttons: "OK"
				});
			}
	});
}

