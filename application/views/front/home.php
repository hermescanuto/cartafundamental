<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Carta Fundamental | Titulo da Pagina"</title>	

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.css">
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

	<style type="text/css">

	@media (min-width: 1200px) {

		.col-lg-3 {
			width: 21%
		}
	}

	.img-responsive {

		max-width: 95%;
	}


	@media (min-width: 768px ){

		.botao_assine{
			margin-top: 30%;
		}
	}

	@media (max-width: 767px){

		.botao_assine{
			margin-top: 10px;
			margin-bottom: 10px;

		}
	}


	.carousel-caption {
		position: inherit;
		color: #000000; /*#FFFFFF;*/
		/*background: black;
		filter: alpha(opacity=50);
		opacity: 0.5;*/
		font-family: 'Open Sans', sans-serif;
		font-size: 14px;
		text-shadow: none;
	}

	</style>



	<!-- Google Analitics -->
	<?php include 'googleanalytics.php'; ?> </head>
	<body>

		<!-- Barra da simples -->

		<!-- Barra da simples  -->

		<div class="container">

			<!--  Barra do logotipo -->
			<?php include('logotipo.php') ?>
			<!--  Barra do logotipo -->

			<!-- menu  -->	
			<?php include('menu.php') ?>
			<!-- menu  -->

			<!-- Carosel  -->
			<div class="row fundo_branco">
				<div class="col-lg-10 col-lg-offset-1 fundo_branco">
					<?php include('carosel.php') ?>		

					<hr class='row-divider'>

				</div>

			</div>	
			<!-- Carosel  -->



			<!-- Barra do conteudo  -->
			<div class="row fundo_branco" id='barra_conteudo'>



				<!-- coluna 1 -->
				<div class="col-sm-4 col-md-3 col-lg-3  col-lg-offset-1" >	
					<h4><span class="aspas">//</span>{sub0}</h4>
					<a href='{base_url}single/show/{id0}' class="thumbnail"> <img src="{imagem0}" alt="{titulo0}" class='img-responsive'/></a>
					<h6>{titulo0}</h6>
					<p>{olho0}</p>				
				</div>

				<div class="col-sm-4 col-md-3 col-lg-3  " >	
					<h4><span class="aspas">//</span>{sub1}</h4>
					<a href='{base_url}single/show/{id1}' class="thumbnail"> <img src="{imagem1}" alt="{titulo1}" class='img-responsive'/></a>
					<h6>{titulo1}</h6>
					<p>{olho1}</p>				
				</div>

				<div class="col-sm-4 col-md-3 col-lg-3  " >	
					<h4><span class="aspas">//</span>{sub2}</h4>
					<a href='{base_url}single/show/{id2}' class="thumbnail"> <img src="{imagem2}" alt="{titulo2}" class='img-responsive'/></a>
					<h6>{titulo2}</h6>
					<p>{olho2}</p>				
				</div>

				<!-- coluna 2 -->
				<div class="col-sm-4 col-md-3 col-lg-3  hidden-sm hidden-xs " >
					<!-- Ultima edicao  -->
					<?php include('ultima_edicao.php') ?>
					<!-- Ultima edicao --> 
				</div>



			</div>




			<div class="row fundo_branco" id='barra_conteudo'>
				
				<div class="col-sm-4 col-md-6 col-lg-5 col-lg-offset-1" >	
					<h4><span class="aspas">//</span>{sub3}</h4>
					<a href='{base_url}single/show/{id3}' class="thumbnail"> <img src="{imagem3}" alt="{titulo3}" class='img-responsive'/></a>
					<h6>{titulo3}</h6>
					<p>{olho3}</p>				
				</div>

				<div class="col-sm-4 col-md-3 col-lg-3  " >	
					<h4><span class="aspas">//</span>{sub4}</h4>
					<a href='{base_url}single/show/{id4}' class="thumbnail"> <img src="{imagem4}" alt="{titulo4}" class='img-responsive'/></a>
					<h6>{titulo4}</h6>
					<p>{olho4}</p>				
				</div>

				<div class="col-sm-4 col-md-3 col-lg-3  " >	
					<h4><span class="aspas">//</span>{sub5}</h4>
					<a href='{base_url}single/show/{id2}' class="thumbnail"> <img src="{imagem5}" alt="{titulo5}" class='img-responsive'/></a>
					<h6>{titulo5}</h6>
					<p>{olho5}</p>				
				</div>
			</div>


			<!-- Barra visivel em celulares e tablets de telas pequenas  -->
			<div class="row fundo_branco visible-xs visible-sm ">
				<div class="col-lg-10 col-lg-offset-1 fundo_branco">
					<hr class='row-divider'>
				</div>
			</div>

			<div class="row fundo_branco visible-xs visible-sm" id='barra_conteudo'>

				<div class="col-sm-4 col-md-3 " >	
					<h4 ><span class="aspas">//</span>Edição N° {edicao_numero} </h4>
					<a href="{base_url}edicao/{edicao_numero}" class="opener">
						<img src="{base_url}upload/capa/{edicao_capa}" alt="Capa {edicao_numero} abril Carta na Escola revista mensal"  class='img-responsive' />
					</a> 
					<div style='text-align: center;'>
						<a href='{base_url}acervo' >Edições Anteriores</a>	
					</div>		

				</div>	

				<div class="col-sm-8  col-md-9 " >	
					<a href='http://www.mercadoconfianca.com.br/cartacapital.asp?Site_txt=EDITORIAL&Origem_txt=CARTANAESCOLA&Formato_txt=CAPA' class="btn btn-lg btn-warning btn-block botao_assine" target='opener' > Assine Carta Fundamental</a>
				</div>
			</div>
			<!-- Barra visivel em celulares e tablets de telas pequenas  -->

		
		</div>
		<!-- Barra do conteudo  -->


		<!-- rodape -->
		<?php include('rodape.php') ?>
		<!-- rodape -->



		<script src="//code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$('.carousel').carousel();			
		</script>	
		<script src="{base_url}/js/ajuste.js"></script>

	</body>
	</html>