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