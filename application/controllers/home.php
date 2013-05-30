<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/**
 * Index Page for this controller.
*/

class Home extends CI_Controller {

	protected $data = array();

	function __construct() {
		parent::__construct();

		$this -> load -> library('util');
		$this -> load -> library('mobile_detect');
		$this -> load -> library('twitter');
		$this -> load -> model('Model_util');
		$this -> data['base_url'] = base_url();

		$deviceType = ($this->mobile_detect->isMobile() ? ($this->mobile_detect->isTablet() ? 'tablet' : 'phone') : 'computer');



	/*	if ( $deviceType == 'phone' ){

			redirect('/mobile/home/', 'refresh');

		} */
			

	}

	public function index() {
			

		// busca a capa

		$recordset = $this->Model_util->getCapa();

		$this->data['edicao_capa'] = $recordset['imagem_capa'];
		$this->data['edicao_numero'] = $recordset['edicao'];



		// busca as materias destaque da home
		$r = $this -> Model_util -> showHome();

		for ($i = 0; $i <= 2; $i++) {
			$this -> data["desc$i"] = $r[$i]['descricao'];


			if ( $r[$i]['imagem_home'] == null ){

				$this -> data["imagem_home$i"] = "970x483.jpg";
			}else{

				$this -> data["imagem_home$i"] = $r[$i]['imagem_home'];
			}


			$this -> data["titulo$i"] = $r[$i]['titulo'];
			$this -> data["destaque_id$i"] = $r[$i]['id'];
		}

		// busca as restantes ,por nao busca as que estao em destaque
		$recordset = $this -> Model_util -> getatualizades($this -> data["destaque_id0"], $this -> data["destaque_id1"], $this -> data["destaque_id2"]);

		 $l = array();
		
		for ($i = 0; $i <= 7; $i++) {

			$l["id"] = $recordset[$i]["id"];
			$l["data_criacao"] = date("d-m-Y", strtotime($recordset[$i]["data_criacao"]));
			$l["titulo"] = $recordset[$i]["titulo"];

			if ( strlen ( $recordset[$i]["descricao"] ) < 200 ){
				$l["olho"] = $recordset[$i]["descricao"];
			}else{
				
				$l["olho"] =  substr($recordset[$i]["descricao"],0 , 100 ) . "..."; 
			}
		
			
			
			
			if ( $recordset[$i]["imagem_fundo"] == null ){

				$l["imagem"] = "446x283.jpg";

			}else{

				$l["imagem"] = $recordset[$i]["imagem_fundo"];
			}


			if ( $recordset[$i]["sub_classificacao"].'' == ''   ){

				$l["sub"] = $recordset[$i]["tipo_conteudo"];

			}else{

				$l["sub"] = $recordset[$i]["sub_classificacao"];
			}

			$this -> data['lista_atualidades'][] =$l;
		}
		
		
		

		//$this->data["lista_Tweeter"] = $this->twitter->getTwitter('cartacapital',3);

		$this->data["alvo_home"] ='active';

		$this -> parser -> parse('front/home', $this -> data);
	}

}

