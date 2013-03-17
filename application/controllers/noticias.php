<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {	
		
	public function __construct()	
	{
		parent::__construct();
		$diasemana = array('Domingo','Segunda-feira','Terça-feira','Quarta-feira', 'Quinta-feira','Sexta-feira','Sábado');
		$mes = array(
			'janeiro',
			'fevereiro',
			'março',
			'abril', 
			'maio',
			'junho',
			'julho',
			'agosto',
			'setembro',
			'outubro',
			'novembro',
			'dezembro'
			);
			
		$this->smarty->assign("mes",$mes[date('m') - 1]);
		$this->smarty->assign("dia",$diasemana[date('w')]);
		$this->smarty->assign("ano",date("Y"));		
		$this->smarty->assign("menu",'noticias');
		$this->session->userdata('logado')?$this->smarty->assign("usuario",$this->session->userdata('usuario')):$this->smarty->assign("usuario",false);
		$this->session->userdata('logado')?$this->smarty->assign("url",base_url() . $this->session->userdata('nivel')):$this->smarty->assign("nivel",false);
	}
        
	public function index()
	{				
		$this->smarty->view('noticias.tpl');		
	}
	
	public function verNoticia($view)
	{
            $this->smarty->view("noticias/" . md5($view ) . ".tpl");
	}
	
}
