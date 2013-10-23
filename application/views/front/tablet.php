<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Carta Fundamental | {titulo}"</title>	

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
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
				<h4><span class="aspas">//</span>Miolo</h4>
			</div>
		</div>
		<!-- Barra cinza   -->


		<!-- Barra do conteudo  -->
		<div class="row fundo_branco" id='barra_conteudo'>
			<!-- coluna 1 -->
			<div class="col-lg-7 col-md-9 col-lg-offset-1 fundo_branco" id='coluna1'>	


				<a href="http://www.cartacapital.com.br"><strong >EDITORA CONFIANÇA</strong></a><br>
				<br>
				<p>O <strong>site CartaCapital</strong> está acessível em todos os tablets, netbooks, notebooks e computadores disponíveis no mercado, respeitando as limitações e características de cada sistema operacional e aparelhos. Se encontrar dificuldades em navegar em nosso portal pelo seu aparelho, informe-se pelo e-mail <a href="mailto:centraldigital@cartacapital.com.br">centraldigital@cartacapital.com.br</a><br>
					<br><strong>Revista CartaCapital - Edição digital<br>
				</strong>A versão do aplicativo da revista CartaCapital está disponível para <strong>iOS (Apple Store)</strong> e <strong>Android (Android Market)</strong>. Uma nova edição estará acessível para download sempre aos sábados, com a íntegra da edição impressa de <em>CartaCapital</em>, acrescida de uma série de conteúdos multimídia como vídeos e áudios. <br><br>
				<a class="external-link" href="https://itunes.apple.com/br/app/revista-cartacapital/id468573252?mt=8" target="_blank">Para fazer o download do aplicativo na Apple Store</a><a class="external-link" href="https://play.google.com/store/apps/details?id=air.com.editoraconfianca.revistacartacapital" target="_blank"> <br>
				Para fazer o download do aplicativo na Android Market</a><br>
				<br>
				<strong>Revista Carta Fundamental - Edição Digital<br>
				</strong>A versão do aplicativo da revista CartaFundamental está disponível para <strong>iOS (Apple Store)</strong> e <strong>Android (Android Market)</strong>.</p>
				<p><a href="https://itunes.apple.com/us/app/carta-fundamental/id620119334?mt=8&amp;ign-mpt=uo%3D2" target="_blank">Para fazer o download do aplicativo na Apple Store</a><br>
					<span><a href="https://play.google.com/store/apps/details?id=com.editoraconfianca.revistafundamental&amp;feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5lZGl0b3JhY29uZmlhbmNhLnJldmlzdGFmdW5kYW1lbnRhbCJd" target="_blank"> Para fazer o download do aplicativo na Android Market</a></span><br>
					<br>

					<strong>Revista Carta na Escola - Edição Digital<br>
					</strong>A versão do aplicativo da revista Carta na Escola está disponível para <strong>iOS (Apple Store)</strong> e <strong>Android (Android Market)</strong>.</p>
					<p><span><a href="https://itunes.apple.com/us/app/carta-na-escola/id620046962?mt=8&amp;ign-mpt=uo%3D2" target="_blank">Para fazer o download do aplicativo na Apple Store<br>
					</a></span><a href="https://play.google.com/store/apps/details?id=com.editoraconfianca.revistacartanaescola&amp;feature=more_from_developer#?t=W251bGwsMSwyLDEwMiwiY29tLmVkaXRvcmFjb25maWFuY2EucmV2aXN0YWNhcnRhbmFlc2NvbGEiXQ" target="_blank">Para fazer o download do aplicativo na Android Market</a><br>
					<br> <strong>Em caso de dúvidas acesse nosso FAQ</strong> - <a href="http://www.cartacapital.com.br/faq/">http://www.cartacapital.com.br/faq/</a>  </p>
					<p></p>
			








				<hr class='row-divider'>

			</div>
			<!-- coluna 2 -->
			<div class="col-lg-3 col-md-3 fundo_branco" id='coluna2'>
				<h4  ><span class="aspas">//</span>Edição do mês {edicao_numero} </h4>
				<a href="{base_url}edicao/{edicao_numero}" class="opener">
					<img src="{base_url}upload/capa/{edicao_capa}" alt="Capa {edicao_numero} abril Carta na Escola revista mensal" width="205" height="261"  />
				</a> 

				<h4><span class="aspas">//</span> Saiba Mais</h4>

				<p>{texto_extra}</p>
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