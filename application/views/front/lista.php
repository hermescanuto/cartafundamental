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

		<!--  lista de materias inicio -->
		<div class="row">

		<div style='padding-left: 40px'>
			<h2>{lista_legenda}</h2>
		</div>

			
		
			
		
			{recordset}


			<div class="span3" style='margin-bottom: 15px; height: 300px'>

				<div style='border: 1px solid grey; padding: 5px'>

					<h5>{titulo}</h5>
					<a href="{base_url}single/show/{id}"><img
						src="{base_url}upload/{imagem_fundo}" alt="{titulo}" /> </a>
					<p class="olho">{descricao}</p>
					<p class="leiamais">
						<a class="btn btn-mini" href="{base_url}single/show/{id}">leia
							mais</a>
					</p>
				</div>
			</div>


			{/recordset}

			


		</div>
		<div class="row">{paginacao}</div>
		
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
