$(document).ready(function(){
	
	
		var tb_usuario_area_id = $('#tb_usuario_area_id_db').val();
		
		$("#tb_usuario_area_id").val( tb_usuario_area_id );	 
	
	
		var config = {
			
					language : 'pt_br',
					toolbar:
					[
						['Bold','Italic','Underline','Strike','-','Subscript','Superscript', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','Source'],
						['UIColor'],
						['Cut','Copy','Paste','PasteText','PasteFromWord','-','SpellChecker', 'Scayt'],
						['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
						['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock']
					]
		};
		
		$('#texto').ckeditor(config);		
		
		$('#salvar').click(function(){	
			
				$('#texto_ckeditor').val(  $('#texto').val() ) ;
			
				erro = "";			
				//erro += valid_field('titulo','','Favor inserir um titulo');
				erro += valid_field('tb_usuario_area_id','-1','Favor escolher uma área');	
				erro += valid_field('texto','','Favor inserir o texto');				
				valid_error('form1',erro);			
		});	
		
	
		
});

