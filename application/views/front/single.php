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

	<div class="container">
		<!--  menu inicio -->

		<?php
		include 'menu.php';
		?>

		<!--  menu  de materias fim -->

		<!--  Carousel inicio -->

		<!--  Carousel  de materias fim -->


		
		<!--  lista de materias inicio -->
		<div class="row">
			
			<div class="span7">
			<h2>{titulo}</h2>
			<span class="data">{mes},{ano} </span><span class="autor">{autor}</span>
			<div>
				<img src="{base_url}upload/{imagem_home}" alt="{titulo}" />
				<div class="credito_foto">{credito_foto}</div>
			</div>
			<div class="texto">{texto} {pdf_free}</div>
		</div>

		<div class="span5 pull-right" style="background-color: yellow">
			  coluna extra
		</div>
	
		
		</div>
		<hr>
		<!--  lista de materias fim -->

		<!--  rodape inicio -->

		<?php
		include 'rodape.php';
		?>

		<!--  rodape fim -->


	</div>
</body>

</html>
