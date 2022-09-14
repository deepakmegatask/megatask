// Contact Us 
// ==============================================================
$("#contactForm").submit(function(){	
	
		var arr = $(this).serializeArray();
		$.ajax(
		{
			type:"POST",
			url:"ajax.php",
			data:arr,
			success:function(returnVal)
			{

				if(returnVal == 1){
					$("#contactForm .AlertSec").html('<h3 class="text-success text-center py-m2" >Message Sent</h3>');
					$("#contactForm .AlertSec").removeClass("hidden");
					document.getElementById("contactForm").reset();
				}
				else{
					$("#contactForm .AlertSec").html('<h3 class="text-danger text-center py-m2" >Something Went Wrong Try Again.</h3>');
					$("#contactForm .AlertSec").removeClass("hidden");
				}	
				
			}
		});
		return false;
	});