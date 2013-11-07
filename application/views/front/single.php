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

	<link href='http://fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>


	
	
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
   <?php include 'googleanalytics.php'; ?> </head>
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

		<!-- Barra da imagem da materia  -->
		<div class="row fundo_branco">	
			<div class="col-lg-10 col-lg-offset-1 fundo_branco">
				<img src="{base_url}upload/{imagem_fundo}" alt="{titulo}" class='img-responsive' >
				<p class="legenda_foto">{legenda_foto} -  Foto:{credito_foto} </p>
			</div>
		</div>
		<!-- Barra da imagem da materia  -->


		<!-- Barra cinza -->
		<div class="row barra_cinza">	
			<div class="col-lg-10 col-lg-offset-1 barra_cinza" id='barra_cinza'>
				<h2 style="font-family: 'Raleway Dots', cursive; font-weight: bolder;" ><span class="aspas">//</span>{titulo}</h2>
				<span style="font-family: verdana">{descricao}</span>
			</div>
		</div>
		<!-- Barra cinza   -->


		<!-- Barra do conteudo  -->
		<div class="row fundo_branco" id='barra_conteudo'>
			<!-- coluna 1 -->
			<div class="col-lg-7 col-md-9 col-lg-offset-1 fundo_branco" id='coluna1'>	

				<h5 style=" font-family: verdana;  font-size: 13px;"><span class="aspas">//</span>Por {autor} </h5>
				
				<p>{texto}<p>

					
					<i>Publicado na edição {edicao}, de {edicao_mes} de {ano} </i>

					<br><br><br>

					<button type="button" class="btn btn-default"><a href="http://www.mercadoconfianca.com.br/" target='_blank'>Assine Carta Fundamental</a></button>
					<br>

					<hr class='row-divider'>

				</div>
				<!-- coluna 2 -->
				<div class="col-lg-3 col-md-3 fundo_branco" id='coluna2'>
					<h4  ><span class="aspas">//</span>Edição {edicao_numero} </h4>
					<a href="{base_url}edicao/{edicao_numero}" class="opener">
						<img src="{base_url}upload/capa/{edicao_capa}" alt="Capa {edicao_numero} abril Carta na Escola revista mensal" width="205" height="261"  />
					</a> 

					<!-- <h4><span class="aspas">//</span> Saiba Mais</h4> -->
					<br>
					<br>
					<span style='font-size: 11px;'>Envie comentário, sugestão ou crítica<br> para
						<a href="mailto:fundamental@cartacapital.com.br">fundamental@cartacapital.com.br</a>
					<span>
				</div>


			</div>
			<!-- Barra do conteudo  -->



		</div>

		<!-- rodape -->
		<?php include('rodape.php') ?>
		<!-- rodape -->

	

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>	
		
</body>
</html>




Saiba mais

CANDIDO, Antonio. Estudo Analítico do Poema. SP: FFLCH/USP, 1987.
GEBARA, Ana Elvira. A Poesia na Escola: Leitura e análise de poesia para crianças. SP: Cortez, 3ªed., 2012.
 GOLDSTEIN, Norma. Versos, Sons, Ritmos. SP: Ática, 2008.
FERRAZ, Eucanaã  et al. Vinicius de Moraes. Caderninho de Leituras.  SP: Cia. das Letras.

Envie comentários, sugestões ou críticas para
fundamental@cartacapital.com.br
