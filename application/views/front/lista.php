<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Carta Fundamental | {titulo}"</title>	

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="{base_url}css/cartafundamental.css">

	<!--fontes -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


	<base href="{url}"/>
	<link rel="image_src" href="{base_url}upload/{imagem_fundo}"/>
	<meta name="description" content="{descricao}" />
	<meta property="og:site_name" content="Carta Fundamental"/>
	<meta property="og:type" content="website" />
	<meta property="og:title" content="{titulo}" />
	<meta property="og:description" content="{descricao}"/>
	<meta property="og:image" content="{base_url}upload/{imagem_fundo}"/>
	<meta property="og:image:height" content="133"/>
	<meta property="og:image:width" content="200"/>
	<meta property="og:url"	content="{url}"/>

	<style type="text/css">

	.barra_cinza {
		padding: 10px 30px;
	}

	</style>

	<!-- Icones para favoritos -->
	<?php include 'faveicon.php'; ?>

	<!-- Google Analitics -->
	<?php include 'googleanalytics.php'; ?> 
</head>
<body>

	<!-- Barra da simples -->
	<?php include 'barra_simples.php'; ?>
	<!-- Barra da simples  -->

	<div class="container">

		<!--  Barra do logotipo -->
		<?php include('logotipo.php') ?>
		<!--  Barra do logotipo -->

		<!-- menu  -->	
		<?php include('menu.php') ?>
		<!-- menu  -->


		<!-- Barra cinza -->
		<div class="row barra_cinza">	
			<div class="col-lg-10 col-lg-offset-1 barra_cinza" id='barra_cinza'>
				<h4><span class="aspas">//</span>{lista_legenda}</h4>
			</div>
		</div>
		<!-- Barra cinza   -->


		<!-- Barra do conteudo  -->
		<div class="row fundo_branco" id='barra_conteudo'>
			<!-- coluna 1 -->
			<div class="col-lg-7 col-md-9 col-lg-offset-1 fundo_branco" id='coluna1'>	


 		    {recordset}
			<div class="row clearfix" style='margin-top:10px; margin-bottom:10px'>

				<div class="col-sm-2 col-md-2 col-lg-2 ">
										
				</div>


				<div class="col-sm-10  col-md-10 col-lg-10">
					<span style="font-size: 12px">Edição: {edicao} </span>										
					<h4>{titulo}</h4>
                    <br>
					{descricao} 
					<a href="{base_url}single/show/{id}"> leia mais...</a>
				</div>	


			</div>
		    {/recordset}


				<hr class='row-divider'>

			</div>
			<!-- coluna 2 -->
			<div class="col-lg-3 col-md-3 fundo_branco" id='coluna2'>
				<!-- Ultima edicao  -->
				<?php include('ultima_edicao.php') ?>
				<!-- Ultima edicao  -->
			</div>


		</div>
		<!-- Barra do conteudo  -->



	</div>

	<!-- rodape -->
	<?php include('rodape.php') ?>
	<!-- rodape -->



	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="{base_url}/js/ajuste.js"></script>	

</body>
</html>