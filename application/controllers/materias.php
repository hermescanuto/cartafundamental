<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');



class Materias extends CI_Controller {

	protected $data = array();
	protected $tabela = 'tb_conteudo';
	protected $view = 'vw_conteudo_publicado';

	function __construct() {
		parent::__construct();
		$this -> load -> library('util');
		$this -> load -> model('Model_util');
		$this -> data['base_url'] = base_url();
		$this -> data['local'] = $this -> uri -> segment("1");
		$this -> data['tipo_busca'] = NULL;
		$this -> data['lista_legenda'] = "Matérias";
	}

	public function index() {
		$this -> paging();
		// paginacao
	}

	/*
	 *
	* @autor   Hermes Canuto de Souza
	* paginação
	*
	*/

	function paging() {

		// Cria a busca
		$data['new_record'] = base_url() . $this -> data['local'] . '/novo';
		$data['search'] = base_url() . $this -> data['local'] . '/paging/0/';
		$data['view'] = 'util/painel_busca';

		//$data['tag']=$this->Model_localevento->localevento_autocomplete(); // autocomplete dos locais

		// Cria a busca

		$table = $this -> view;
		$fields = "*";
		$orderby = '';

		$busca = $this -> uri -> segment("4");
		if (is_numeric($busca)) {
			$campo_busca = 'edicao';
			
			$busca = array($campo_busca => urldecode($busca) );
			
		} else {

			$search = urldecode($busca);
			
			$busca = "(		titulo 			like '%$search%' 
						or 	descricao 		like '%$search%'  
						or 	descricao_home 	like '%$search%' 
						or 	autor 			like '%$search%' 
						or  titulo_home 	like '%$search%' 
						or 	descricao_home 	like '%$search%' 

						)";
		}

		if ($busca != null) {

			$where = $busca;
		} else {
			$where = null;
		}



		$result = $this -> util -> PaginationOn($table, 20, base_url() .  $this -> data['local'] . '/paging', $fields, $where, $orderby,"3","4",$this -> data['tipo_busca']);

		//echo $this->db->last_query();
		// cria a paginação
		$data = $result;

		$data['base_url'] = base_url();
		$data['local'] = $this -> data['local'];
		$data['lista_legenda'] = $this -> data['lista_legenda'] ;


		$recordset = $this->Model_util->getCapa();
		$data['edicao_capa'] = $recordset['imagem_capa'];
		$data['edicao_numero'] = $recordset['edicao'];



		$this -> parser -> parse('front/lista', $data);
		// Carrega o view de listagem de materia

	}

}
