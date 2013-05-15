<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class MY_Controller extends CI_Controller 
{	
		protected $table	= ''; 
		protected $view		= ''; 	
		protected $title	='';
		protected $local	='';
		protected $jss		= array();
		protected $css		= array();
		
		protected $data;
		
		
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('parser');
	}
	
	
	public function setController($conf)
	{
		
		if ($this->db->table_exists($conf['table']))
		{
			$this->table = $conf['table'];
			$this->fields = $this->db->list_fields($this->table);
		}
		else
		{
			$this->errors[] = 'Nao existe a tabela';
			return FALSE;	
		}
		
		$this->data = $conf;
		
	
	} 
	
	function ShowADMTopPage() 
	{
		if ( $this->data['title'] == '')
		{ 
			 $this->data['title'] = 'VoleiSP Sistema Administrativo';
		};		
		$data['who'] = $this->session->userdata('nome'); // Nome de quem ta logado
		$data['ip'] =  $this->input->ip_address();		// ip de quem tá logado			
		$this->parser->parse('util/top', $data ) ;	// Carrega o topo da pagina
	}
	
}

