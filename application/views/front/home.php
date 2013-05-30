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
		
		<div id="this-carousel-id" class="carousel slide">

			<div class="carousel-inner">
				<div class="item active">
					<a href="{base_url}mobile/single/{id0}"><img
						src="{base_url}upload/{imagem_home0}" alt="{titulo0}" /> </a>
					<div class="carousel-caption">
						<p>{titulo0}</p>
					</div>
				</div>
				<div class="item">
					<a href="{base_url}mobile/single/{id1}"><img
						src="{base_url}upload/{imagem_home1}" alt="{titulo1}" /> </a>
					<div class="carousel-caption">
						<p>{titulo1}</p>
					</div>
				</div>
				<div class="item">
					<a href="{base_url}mobile/single/{id2}"><img
						src="{base_url}upload/{imagem_home2}" alt="{titulo2}" /> </a>
					<div class="carousel-caption">

						<p>{titulo2}</p>
					</div>
				</div>

			</div>
			<a class="carousel-control left" href="#this-carousel-id"
				data-slide="prev">&lsaquo;</a> <a class="carousel-control right"
				href="#this-carousel-id" data-slide="next">&rsaquo;</a>
		</div>
		
		

		<!--  Carousel  de materias fim -->


		<!--  lista de materias inicio -->
		<div class="row">



			{lista_atualidades}

			<div class="span3"  style='margin-bottom: 15px; height:300px'>
			
			<div style='border: 1px solid grey; padding: 5px'>
			
					<h5>{titulo}</h5>
					<a href="{base_url}single/show/{id}"><img
						src="{base_url}upload/{imagem}" alt="Alt text" /> </a>
					<p class="olho">{olho}</p>
					<p class="leiamais">
						<a class="btn btn-mini" href="{base_url}single/show/{id}">leia
							mais</a>
					</p>
				</div>
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
