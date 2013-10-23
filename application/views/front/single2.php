<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Carta Fundamental</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<meta name="apple-mobile-web-app-capable" content="yes">    

<link href="{base_url}focus_data/bootstrap.css" rel="stylesheet">
<link href="{base_url}focus_data/bootstrap-responsive.css" rel="stylesheet">
<link href="{base_url}focus_data/font-awesome.css" rel="stylesheet">
<link href="{base_url}focus_data/css.css" rel="stylesheet">
<link href="{base_url}focus_data/focus-1_002.css" rel="stylesheet"> 
<link href="{base_url}focus_data/focus-1.css" rel="stylesheet">
<link href="{base_url}focus_data/homepage.css" rel="stylesheet">    

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>

	<div id="wrapper" class="clearfix">

		<div id="header">

			<div class="container">

				<img src="{base_url}focus_data/lonovo_cf.png" />

			</div> 
			<!-- /container -->

		</div> <!-- /header -->

		<!-- menu -->

		<?php include ('menu.php') ?>

		<!-- menu -->


		<div id="masthead">

			<div class="container">

				<!-- imagem destaque da home inicio-->
				<div >
					<img src="{base_url}upload/{imagem_fundo}" alt="{legenda_foto}">
					<br>
					<p>{legenda_foto}</p>
					<p>&nbsp;</p>
					<br>
				</div> 
				<!-- imagem destaque da home  fim-->

			</div> <!-- /container -->

		</div> <!-- /masthead -->

		<div id="page-title">
			<h1><span class="slash">//</span>
				{titulo}
			</h1>
			<p>
				{descricao} .
			</p>
			<p>{credito_foto}</p>
		</div>



		<div class="row work-container">

			<!-- /grid-3 -->

			<div class="grid-9">
				<div class="work-item">

					<h3><span class="slash">//</span>Por {autor} — publicado na edição {edicao}, de {edicao_mes} de {ano} </h3>
					<!-- /img -->
					<p>		{texto}

						<p>
						</div>

					</div> 
					<!-- /grid-3 --><!-- /grid-3 --><!-- /grid-3 -->
					<div class="grid-3">

						<div>
							<h3><span class="slash">//</span> Edição do mês</h3>
							<a class="thumbnail"><img src="{base_url}focus_data/Capa_v.png" alt="">
							</a> <!-- /img -->
						</div>
						<div class="service-item">

							<h3><span class="slash">//</span> Saiba Mais</h3>

							<p>{texto_extra}</p>


						</div> <!-- /service -->	

					</div> 

				</div> 
				<!-- /row -->

				<div class="row work-container"><!-- /grid-3 --><!-- /grid-3 --><!-- /grid-3 --><!-- /grid-3 -->

				</div> 
				<!-- /row -->

				<button class="btn btn-lg btn-primary btn-block" type="submit">

					Assine Carta Fundamental

				</button>


				<hr class="row-divider"><!-- /row -->

			</div> 
			<!-- /container -->

		</div> <!-- /content -->

		<!-- rodape -->

		<?php include ("rodape.php"); ?>

		<!-- rodape -->



<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{base_url}focus_data/jquery-1.js"></script>

	<script src="{base_url}focus_data/bootstrap.js"></script>
	<script src="{base_url}focus_data/focus.js"></script>



</body>
</html>