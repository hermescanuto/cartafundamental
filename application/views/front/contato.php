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



			<div class="span6">

				<h3>Contato</h3>

				<form id="contactForm" action="{base_url}contato/enviar"method="post">
					<div class="controls controls-row">
						<input id="name" name="name" type="text" class="span3"    placeholder="Seu nome"> 
						<input id="email" name="email" type="email" class="span3" placeholder="Seu email">
					</div>
					<div class="controls">
						<textarea id="comments" name="comments" class="span6" placeholder="Sua mensagem" rows="5"></textarea>
					</div>

					<div class="controls">
						<button id="contact-submit" type="submit" class="btn btn-primary input-medium pull-right">Enviar</button>
					</div>
				</form>
			</div>

			<div class="span5 pull-right" style="background-color: yellow">coluna extra</div>
			
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
