<!doctype html>
<html class="no-js">

<head>

<?php
include 'script_css.php';
?>

<style type="text/css">
</style>

</head>

<body lang="en">

	<div class="container ">


		<!--  menu inicio -->

		<?php
		include 'menu.php';
		?>

		<!--  menu   fim -->

		<!--  Carousel inicio -->

		<!--  Carousel  de materias fim -->


		<!--  lista de materias inicio -->
		<div class="row">



			{lista_atualidades}
			<div class="span3">
				<h5>{titulo}</h5>
				<a href="{base_url}single/show/{id}"><img
					src="{base_url}upload/{imagem}" alt="Alt text" /> </a>
				<p class="olho">{olho}</p>
				<p class="leiamais">
					<a class="btn btn-mini" href="{base_url}single/show/{id}">leia mais</a>
				</p>
			</div>
			{/lista_atualidades}


		</div>
		<!--  lista de materias fim -->
		<hr>
		<!--  rodape inicio -->

		<?php
		include 'rodape.php';
		?>

		<!--  rodape fim -->


	</div>
</body>

</html>
