$(document).ready(function(){	
	
	$.fn.login = $(".formLogin").submit(function(){
	
		$(".ajax").show();	
		$(".botao").hide();
		$(".resposta").hide();
		$(".recovery").hide();
		$("#ck").hide();
		
	
		
		var usuario = $("#usuario").val();
		var senha   = $("#senha").val();		
		var area = $("#area").val();	
		
		$.post(url+"/logar",{
			
			usuario : usuario,
			senha   : senha,
			area : area
			
		},function(resp){			
			if(resp != false && resp.length > 1){			
				
					$(".ajax").hide();	
					$(".botao").show();
					$(".resposta").show();
					$(".recovery").show();
					$(".resposta").text(resp);
					$("#ck").show();
				
			}
			else{
				
				document.location = url;
				
			}			
		});		
	});	
	
	
});
