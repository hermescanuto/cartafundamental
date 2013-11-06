$('.navbar .dropdown').hover(function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
}, function() {
  $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp()
});

$('.dropdown-toggle').click( function() {
  var url = $(this).attr('href');

  if ( url != '#' ){
  	window.location = url;
  }
  
});


$('.dropdown-toggle').collapse('show');

$("#bt_buscar").click(function() {

			var busca=$('#buscaModal').val();

			alert( busca )

			if ( busca+"" != "") {

				window.location = 'http://cf.cartacapital.com.br/materias/paging/0/' + busca;

			}

});


$("#bt_busca_simples").click(function() {

			var busca=$('#busca').val();

			alert( busca )

			if ( busca+"" != "") {

				window.location = 'http://cf.cartacapital.com.br/materias/paging/0/' + busca;

			}

});


