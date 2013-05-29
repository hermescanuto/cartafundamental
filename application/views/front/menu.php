

<div class="row-fluid">

	<div class="span9">
		<a href="{base_url}" id="logo"><img src="{base_url}img/logofunda.jpg"
			alt="Carta Fundamental" class="logotipo"> </a>

	</div>
</div>

<div class="row">
	<div class="span12">

		
			<div class="input-append pull-right">
				<input type="text" id="" name=""><span class="add-on"><i
					class="icon-search"></i> </span>
			</div>


		<ul class="nav nav-tabs">
			<li class="{alvo_home}"><a href="{base_url}">Home</a></li>

			<li id="fat-menu" class="dropdown">
			<a href="#" id="drop3" 	role="button" class="dropdown-toggle" data-toggle="dropdown">Máterias  <b class="caret"></b></a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{base_url}entrevistas">Entrevistas</a>
					</li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{base_url}secoes">Seções</a>
					</li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{base_url}temaaula">Tema
							Aula</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{base_url}infancia">Infancia
							em Foco</a></li>
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{base_url}materia">Máteria</a>
					</li>
				</ul>
			</li>

			<li id="fat-menu" class="dropdown" style="cursor: pointer;">
			<a href="{base_url}sobre" id="drop4" role="button" class="dropdown-toggle" data-toggle="dropdown">Sobre  <b class="caret"></b></a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="drop4">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="{base_url}expediente">Expediente</a></li>
				</ul>
			</li>

			<li class="{alvo_contato}"><a href="{base_url}contato">Contato</a></li>
		</ul>
	</div>
</div>

<script>

$('#drop4').click(function() {
	 window.location.href = href = $('#drop4').attr('href');
});

jQuery('ul.nav li.dropdown').hover(function() {
	  jQuery(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn();
	}, function() {
	  jQuery(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut();
	});




</script>


