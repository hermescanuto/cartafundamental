<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Carta Fundamental "</title>	

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

	<!-- Icones para favoritos -->
	<?php include 'faveicon.php'; ?>
	
	<!-- Google Analitics -->
   <?php include 'googleanalytics.php'; ?> 
	<!-- Google Analitics -->
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
		<div class="row fundo_branco">	
			<div class="col-lg-10 col-lg-offset-1 barra_cinza" id='barra_cinza'>
				<h2><span class="aspas">//</span>Edições Digitais</h2>
			
			</div>
		</div>
		<!-- Barra cinza   -->


		<!-- Barra do conteudo  -->
		<div class="row fundo_branco" id='barra_conteudo'>
			<!-- coluna 1 -->
			<div class="col-lg-7 col-md-9 col-lg-offset-1 fundo_branco" id='coluna1'>	

				<h4><span class="aspas">//</span>Lista</h4>
				
				<p>
			{lista_edicao}
					  Edição {edicao}. <a href="{base_url}login/showpdfhtml/{edicao}/{user}/{senha}" 
					  					  target='edicao_html5'
					  					  onclick="ga('send', 'event', 'Leitura_on_line', 'Edicao', '{edicao}');" > Ler Online  </a> <br>
            {/lista_edicao}

				<p>

					
					<hr class='row-divider'>

				</div>
				<!-- coluna 2 -->
			<!-- 	<div class="col-lg-3 col-md-3 fundo_branco" id='coluna2'>
					<h4  ><span class="aspas">//</span>Edição do mês {edicao_numero} </h4>
					<a href="{base_url}edicao/{edicao_numero}" class="opener">
						<img src="{base_url}upload/capa/{edicao_capa}" alt="Capa {edicao_numero} abril Carta na Escola revista mensal" width="205" height="261"  />
					</a> 

					<h4><span class="aspas">//</span> Saiba Mais</h4>

					<p>Conteudo extra</p>
				</div> -->


			</div>
			<!-- Barra do conteudo  -->



		</div>

		<!-- rodape -->
		<?php include('rodape.php') ?>
		<!-- rodape -->

	

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>	
	<script src="{base_url}js/ajuste.js"></script>		
</body>
</html>