<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Carta Fundamental | {titulo}</title>	

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="{base_url}css/cartafundamental.css">

	<!--fontes -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{base_url}css/jquery.share.css">

	
	
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
				<div style='width: 100%;text-align: left;font-size: 10px;margin-bottom: 4px;'>{credito_foto} </div>
				<img src="{base_url}upload/{imagem_fundo}" alt="{titulo}" class='img-responsive' >
				<p class="legenda_foto">{legenda_foto} </p>
			</div>
		</div>
		<!-- Barra da imagem da materia  -->


		<!-- Barra cinza -->
		<div class="row barra_cinza">	
			<div class="col-lg-10 col-lg-offset-1 barra_cinza" id='barra_cinza'>
				<h2 style="font-family: verdana" ><span class="aspas">//</span>{titulo}</h2>
				<span style="font-family: verdana">{descricao}</span>
			</div>
		</div>
		<!-- Barra cinza   -->


		<!-- Barra do conteudo  -->
		<div class="row fundo_branco" id='barra_conteudo'>
			<!-- coluna 1 -->
			<div class="col-lg-7 col-md-9 col-lg-offset-1 fundo_branco" id='coluna1'>	


			  <div id="mysocial"></div>


				<h5 style=" font-family: verdana;  font-size: 13px;"><span class="aspas">//</span>Por {autor} </h5>


				<div class="texto_geral" style='font-size:15px'>
					

					{texto} {texto_extra}


				</div>
				
				

				
					
					<i>Publicado na edição {edicao}, de {edicao_mes} de {ano} </i>

					<br><br><br>

					<button type="button" class="btn btn-default"><a href="http://www.mercadoconfianca.com.br/" target='_blank'>Assine Carta Fundamental</a></button>
					<br>

					<hr class='row-divider'>

					<!-- painel_discussao -->
					<?php include('painel_discussao.php') ?>
					<!-- painel_discussao -->

				</div>
				<!-- coluna 2 -->
				<div class="col-lg-3 col-md-3 fundo_branco" id='coluna2'>
							<!-- Ultima edicao  -->
								<?php include('ultima_edicao.php') ?>
							<!-- Ultima edicao  -->

					<!-- <h4><span class="aspas">//</span> Saiba Mais</h4> -->
					<span style='font-size: 11px;'>Envie comentário, sugestão ou crítica<br> para
						<a href="mailto:fundamental@cartacapital.com.br">fundamental@cartacapital.com.br</a>
					<span>

						<br>

					  <br>
					  <div class='text-center'>

					  	<center>

					  	
					  		<br>

					  		<a href="http://www.mercadoconfianca.com.br/CartaFundamental.asp?Site_txt=EDITORIAL&Origem_txt=CARTA&Formato_txt=MENUTOPO&Banner_txt=&Versao_txt="><img src="{base_url}pics/Botao_Assinar.jpg" alt="Assine CartaFundamental" class='img-responsive'></a>

					  		<br>

					  		<a href="http://editoraconfianca.com.br/acesso/cartafundamental"><img src="{base_url}pics/Botao_RevistaDigital2.jpg" alt="Área do assinante" class='img-responsive'></a>
					  	

						
						</center>

					  </div>
					 
				</div>


				


			</div>
			<!-- Barra do conteudo  -->



		</div>

		<!-- rodape -->
		<?php include('rodape.php') ?>
		<!-- rodape -->

	

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>	
	<script src="{base_url}/js/jquery.share.js"></script>	

	<script>

	$('#mysocial').share({
        networks: ['facebook','pinterest','googleplus','twitter','linkedin','tumblr','in1','email','stumbleupon','digg']
    });


	</script>
		
</body>
</html>
