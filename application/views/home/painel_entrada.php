<div id='painel_campos'>

	<ul>
		<li><a href="#tabs-1">Matérias Home</a>
		</li>
		<li><a href="#tabs-2">HOME Destaque Linha 1</a>
		</li>
		<li><a href="#tabs-3">HOME Destaque Linha 2</a>
		</li>
		<li><a href="#tabs-4">HOME Destaque Linha 3</a>
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

					<input type="text" name="id_1" id="id_1" style='width:90px' value='{id_1}'  onfocusout='busca(this);' onqueijo='busca(this);' >

					<input type="text" style='width:370px' id='id_1_texto' >

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;display:none' id='id_1_gif' >


					<br>
	
					Home 2:

					<input type="text" name="id_2" id="id_2" style='width:30px' value='{id_2}'  onfocusout='busca(this);'>

					<input type="text" style='width:370px' id='id_2_texto' >

					<img src="{base_url}pics/ajax.GIF" alt="Loader" style='padding-bottom: 10px;;display:none' id='id_2_gif'>

					<br>

					Home 3:

					<input type="text" name="id_3" id="id_3" style='width:30px' value='{id_3}' onfocusout='busca(this);'>

					<input type="text" style='width:370px' id='id_3_texto' >

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

					<input type="text" style='width:100px' id='id_1_texto' >

<br>
					 Home 2:

					<input type="text" name="id_2" id="id_2" style='width:30px' value='{id_5}' >

				
<br>
					Home 3:

					<input type="text" name="id_3" id="id_3" style='width:30px' value='{id_6}' >					

				

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


				

					 <br>Home 2: <input type="text" name="id_2" id="id_2" style='width:30px' value='{id_8}' >

				

					<br> Home 3: <input type="text" name="id_3" id="id_3" style='width:30px' value='{id_9}' >
				

				</div>


				<input type="submit" value="Salvar" id="salvar" class="btn btn-mini" />
			</form>

		</div>
		
		<div id="tabs-4">
			<form name="form2" id="form1" action="{save}" method="post"
				enctype="multipart/form-data" class="form-vertical">
				<b>->HOME Destaque Linha 3</b> <br />
				<p>
					ID: 4 <input type="hidden" name='id' id='id' value="4" />
				</p>

				<div class="control-group">

					Home 1: <input type="text" name="id_1" id="id_1" style='width:30px' value='{id_10}'>

				
					 <br>Home 2: <input type="text" name="id_2" id="id_2" style='width:30px' value='{id_11}' >

					

					<br>Home 3: <input type="text" name="id_3" id="id_3" style='width:30px' value='{id_12}' >

					

				</div>


				<input type="submit" value="Salvar" id="salvar" class="btn btn-mini" />
			</form>

		</div>
	</div>

	<iframe src="{base_url}admin/conteudo" frameborder="0" style='width: 100%;height: 1100px;' id='alvo' ></iframe>

</div>

<script>




$(document).ready(function() {


	busca = function (obj){
		   $('#'+obj.id+'_gif').show();
	};


	$("#painel_campos").tabs();

});


</script>