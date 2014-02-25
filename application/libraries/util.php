<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @package		util
 * @author		Hermes Canuto
 * @since		Version 1.1

*/


class util {

	/*
	 *
	* @autor	Hermes Canuto de Souza
	* @Descrição controle home do administrativo
	* Monta o topo administrativo do site.
	*
	*/

	function ShowADMTopPage($data)
	{
		$CI =& get_instance();
		if ( $data['title'] == '')
		{
			$data['title'] = 'VoleiSP Sistema Administrativo';
		};
		$data['who'] = $CI->session->userdata('nome'); // Nome de quem ta logado
		$data['ip'] =   $CI->input->ip_address();		// ip de quem tá logado
		$CI->parser->parse('util/top', $data ) ;	// Carrega o topo da pagina
	}


	/*
	 *
	* @autor	Hermes Canuto de Souza
	* @Descrição controle home do administrativo
	* Monta o rodape administrativo do site.
	*
	*/

	function ShowADMBottomPage()
	{
		$data['nada']='';
		$CI =& get_instance();
		$CI->parser->parse('util/bottom',$data) ;	// Carrega o topo da pagina
	}

	/*
	 *
	* @autor	Hermes Canuto de Souza
	* @Descrição controle home do administrativo
	* Monta a busca e o incluir novo registro
	*
	*/


	function ShowSearch($data )
	{
		$CI =& get_instance();
		$CI->parser->parse($data['view'],$data);
	}



	/*
	 *
	* @autor	Hermes Canuto de Souza
	* @Descrição controle home do administrativo
	* Monta o menu administrativo do site.
	*
	*/

	function ShowADMMenu($type = '')
	{
		$CI =& get_instance();
		$CI->load->model('model_util');
		$data['menu_item'] = $CI->model_util->getmenu($type);

		//print_r($data['result']);
		$data["base_url"] = base_url();
		$CI->parser->parse('util/menu',$data);
	}


	/*
	 *
	* @autor	Hermes Canuto de Souza
	* @Descrição controle home do administrativo
	* Verifica se usuario esta logado.
	*
	*/

	function LogOn()
	{

		$CI =& get_instance();
		if ( $CI->session->userdata('logged_in') != TRUE ) header('Location: ' .  base_url() . 'adm');
		if ( $_SERVER['SERVER_NAME']=='www.voleisp.com.br') header('Location: http://www.voleisp.com.br') ;
	}


	/*
	 *
	* @autor	Hermes Canuto de Souza
	* @Descrição controle home do administrativo
	* cria a paginação .
	*
	*/


	function PaginationOn($table,$page_size = 10,$page_local,$fields = '',$where= '',$orderby = '',$uri = 4,$ur_busca = 5)
	{
		$CI=& get_instance();
		$CI->load->library('pagination');
		$CI->load->model('model_util');
			
		$start = (!$CI->uri->segment($uri)) ? 0 : $CI->uri->segment($uri);
		if ( $CI->uri->segment($uri) == 1 ) {
			$start=0;
		}
			
		$search = str_replace('_',' ',$CI->uri->segment($ur_busca)); // recebe os valores da busca

		//echo $start;

		$recordset = $CI->model_util->ExecSql($table,$fields,$where,$page_size,$start,$orderby); // chamada da model


			
		//print_r($recordset);
			

		$total_de_registro = $recordset['record_count'];
			
		// Configuração basica da paginação
		$config['base_url'] 	= $page_local;
		$config['total_rows'] 	= $total_de_registro;
		$config['per_page'] 	= $page_size;
		$config['uri_segment'] 	= $uri;
		 
		$config['first_link'] 	= '<i class="icon-fast-backward"></i>';
		$config['prev_link']    = '<i class="icon-step-backward"></i>';
		$config['last_link'] 	= '<i class="icon-fast-forward"></i>';
		$config['next_link'] 	= '<i class="icon-step-forward"></i>';




		$config['full_tag_open'] = '<div class="pagination pagination-mini pagination-centered"><ul>';
		$config['full_tag_close'] = '</ul></div>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active" ><a href="#" >';
		$config['cur_tag_close'] = '</a></li>';


		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';


		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		 
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';


		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';






		$CI->pagination->initialize($config);

		$return = array(
				'paginacao' 	=> $CI->pagination->create_links($search), // paginacao
				'recordset' 	=> $recordset['recordset'], // recorset da paginacao
				'record_count' 	=> $recordset['record_count'], // total de registros
				'cursor' 		=> $start // paginal atual
		);
			
		return $return;

	}

}



