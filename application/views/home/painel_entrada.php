<div id='painel_campos'>

	<ul>
		<li><a class='tabs' href="#tabs-1">Matérias Home</a>
		</li>
		<li><a class='tabs' href="#tabs-2">HOME Destaque Linha 1</a>
		</li>
		<li><a class='tabs' href="#tabs-3">HOME Destaque Linha 2</a>
		</li>
		<li><a class='tabs' href="#tabs-4">HOME Destaque Linha 3</a>
		</li>
	</ul>


	<div class="container-fluid">



		<div id="tabs-1">
			<form name="form1" id="form1" action="{save}" method="post"	enctype="multipart/form-data" class="form-vertical">
				<b>->HOME</b> <br />
				<p>
					ID: 1 <input type="hidden" name='id' id='id' value="1" />
				</p>

				<div class="control-group">

					Home 1:

					<input type="text" name="id_1" id="id_1" style='width:30px' value='{id_1}'   >

					<input type="text" style='width:370px' id='id_1_texto' value='{legenda1}' readonly>

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;display:none' id='id_1_gif' >


					<br>
	
					Home 2:

					<input type="text" name="id_2" id="id_2" style='width:30px' value='{id_2}'  >

					<input type="text" style='width:370px' id='id_2_texto' value='{legenda2}' readonly>

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;;display:none' id='id_2_gif'>

					<br>

					Home 3:

					<input type="text" name="id_3" id="id_3" style='width:30px' value='{id_3}' >

					<input type="text" style='width:370px' id='id_3_texto' value='{legenda3}' readonly>

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;;display:none' id='id_3_gif'>
		
				</div>


				<input type="submit" value="Salvar" id="salvar" class="btn btn-mini" />
			</form>
		</div>

		<div id="tabs-2">

			<form name="form2" id="form2" action="{save}" method="post"
				enctype="multipart/form-data" class="form-vertical">
				<b>->HOME Destaque Linha 1</b> <br />
				<p>
					ID: 2 <input type="hidden" name='id' id='id' value="2" />
				</p>

				<div class="control-group">


					Home 1:

					<input type="text" name="id_1" id="id_1" style='width:30px' value='{id_4}' >

					<input type="text" style='width:370px' id='id_1_texto' value='{legenda4}' readonly>

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;display:none' id='id_1_gif' >

<br>
					 Home 2:

					<input type="text" name="id_2" id="id_2" style='width:30px' value='{id_5}' >

					<input type="text" style='width:370px' id='id_2_texto' value='{legenda5}' readonly>

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;display:none' id='id_2_gif' >
				
<br>
					Home 3:

					<input type="text" name="id_3" id="id_3" style='width:30px' value='{id_6}' >	

					<input type="text" style='width:370px' id='id_3_texto' value='{legenda6}' readonly>

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;display:none' id='id_3_gif' >				

				

				</div>


				<input type="submit" value="Salvar" id="salvar" class="btn btn-mini" />
			</form>
		</div>

		<div id="tabs-3">
			<form name="form3" id="form3" action="{save}" method="post"
				enctype="multipart/form-data" class="form-vertical">
				<b>->HOME Destaque Linha 2</b> <br />
				<p>
					ID: 3 <input type="hidden" name='id' id='id' value="3" />
				</p>

				<div class="control-group">

					Home 1: <input type="text" name="id_1" id="id_1" style='width:30px' value='{id_7}' >

					<input type="text" style='width:370px' id='id_1_texto' value='{legenda7}' readonly>

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;display:none' id='id_1_gif' >


				

					 <br>Home 2: <input type="text" name="id_2" id="id_2" style='width:30px' value='{id_8}' >

					 <input type="text" style='width:370px' id='id_2_texto' value='{legenda8}' readonly>

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;display:none' id='id_2_gif' >
				

				

					<br> Home 3: <input type="text" name="id_3" id="id_3" style='width:30px' value='{id_9}' >

					<input type="text" style='width:370px' id='id_3_texto' value='{legenda9}' readonly>

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;display:none' id='id_3_gif' >	
				

				</div>


				<input type="submit" value="Salvar" id="salvar" class="btn btn-mini" />
			</form>

		</div>
		
		<div id="tabs-4">
			<form name="form4" id="form4" action="{save}" method="post"
				enctype="multipart/form-data" class="form-vertical">
				<b>->HOME Destaque Linha 3</b> <br />
				<p>
					ID: 4 <input type="hidden" name='id' id='id' value="4" />
				</p>

				<div class="control-group">

					Home 1: <input type="text" name="id_1" id="id_1" style='width:30px' value='{id_10}'>

					<input type="text" style='width:370px' id='id_1_texto' value='{legenda10}' readonly>

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;display:none' id='id_1_gif' >

				
					 <br>Home 2: <input type="text" name="id_2" id="id_2" style='width:30px' value='{id_11}' >

					 <input type="text" style='width:370px' id='id_2_texto' value='{legenda11}' readonly>

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;display:none' id='id_2_gif' >

					

					<br>Home 3: <input type="text" name="id_3" id="id_3" style='width:30px' value='{id_12}' >

					<input type="text" style='width:370px' id='id_3_texto' value='{legenda12}' readonly>

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;display:none' id='id_3_gif' >	
					

				</div>


				<input type="submit" value="Salvar" id="salvar" class="btn btn-mini" />
			</form>

		</div>
	</div>

	<iframe src="{base_url}admin/conteudo" frameborder="0" style='width: 100%;height: 1100px;' id='alvo' ></iframe>

</div>

<script>




$(document).ready(function() {



	$("#painel_campos").tabs();


	$( "form input[id^='id']" ).focusout( function() {

		var  valor  = $(this).val();
		var xid     = $(this).attr("id") ;
		var forme   = $(this).closest('form').attr("id");


		var obj     = '#' + xid + '_gif';
		var img   	 = '#' + forme + ' ' + obj;
		var legenda = '#' + forme + ' #' + xid  + '_texto';


		$( img ).show();

		console.log( '--------------------------------------------'  );
		console.log( obj  );
		console.log( forme  );
		console.log( 'img = ' + img);
		console.log( 'legenda= ' + legenda );
		console.log( 'valor_id= '  + valor );

		$.getJSON( "{base_url}admin/conteudo/ajaxshow/" + valor  )

		.done(function( data) {
			console.log( "JSON Data: " + data.titulo );

			if ( data.visivel == 0 ){

				$( img ).hide();
				alert('Matéria não existe !');

				$("input[id='salvar']").hide();
				$("#painel_campos").tabs( "disable" );

				console.log( 'Matéria não existe = '  + xid  );			

			}else{

				if( data.publicar == 1){

					$( img ).hide();
					$(legenda).val( data.titulo ) ;	

					$("input[id='salvar']").show();
					$("#painel_campos").tabs( "enable" );

					console.log( 'Matéria escolhida = '  + xid  );

				}else{

					$( img ).hide();

					alert('Matéria não está publicada!');

					$("input[id='salvar']").hide();					
					$("#painel_campos").tabs( "disable" );

					console.log( 'Matéria não está publicada = '  + xid  );

				}


			}


		})


		.fail(function( jqxhr, textStatus, error ) {
			var err = textStatus + ", " + error;
			console.log( "Request Failed: " + err );
		});



	});


});


</script>