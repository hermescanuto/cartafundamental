$(function(){

	var valor = $('#coluna2').css('height');

	var coluna1 = $('#coluna1').css('height')

	ajuste_coluna();

	function ajuste_coluna(){

		var windowWidth = $(window).width();

		if( windowWidth >= 992 ) { 

			
					var t = $('#coluna1').css('height');
					$('#coluna2').css('height',t);

		
		}else{
			$('#coluna2').css('height',valor);
		}

	}

	$(window).resize(function(){
		ajuste_coluna();
	});

});