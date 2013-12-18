<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/**
 * Index Page for this controller.
*/

class acervo extends CI_Controller {

	protected $data = array();

	function __construct() {
		parent::__construct();
		$this -> load -> library('util');
		$this -> load -> library('twitter');
		$this -> load -> model('Model_util');
		$this -> data['base_url'] = base_url();
	}

	public function index() {

		
		$recordset = $this->Model_util->getCapa();

		$this->data['edicao_capa'] = $recordset['imagem_capa'];
		$this->data['edicao_numero'] = $recordset['edicao'];
		
		$this -> data["lista_acervo"] = $this->Model_util->lista_acervo();

		$this -> data["alvo_acervo"] = 'current-menu-item';
		$this -> parser -> parse('front/acervo', $this -> data);
	}


}
