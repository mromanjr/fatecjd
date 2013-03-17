<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller 
{	
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
		$this->smarty->assign("menu",'home');
		$this->smarty->assign("area",$this->session->userdata('nivel'));
		$this->session->userdata('logado')?$this->smarty->assign("usuario",$this->session->userdata('usuario')):$this->smarty->assign("usuario",false);
		$this->session->userdata('logado')?$this->smarty->assign("url",base_url() . $this->session->userdata('nivel')):$this->smarty->assign("nivel",false);
	}
        
	public function index()
	{				
		$msg = $this->getMsg();	
		$this->smarty->assign("msg",$msg);	
		
		$this->load->model("noticias_model","",	TRUE);
		$ultimasnoticias = $this->noticias_model->UltimasNoticias();		
		$destaques = $this->noticias_model->UltimosDestaques();

		
		$this->smarty->assign("ultimasnoticias",$ultimasnoticias);			
		$this->smarty->assign("destaques",$destaques);			
		
		$this->smarty->view('home.tpl');		
	}

	public function paginas($pagina,$subpagina = null)
	{			
		if(!file_exists('application/views/templates/' . $pagina . ".tpl"))
		{
			show_404();
			exit;
		}
		else
		{
			$this->smarty->assign("menu",$pagina);
			if(isset($subpagina))
			{
				$this->smarty->display("paginas/" . $pagina . "-$subpagina.tpl");
			}
			else
			{
								
				$this->smarty->display("$pagina.tpl");	
			}
		}
		
		
		
	}
	private function getMsg(){		
		switch($hora = date("G")) {
			case $hora > 0 && $hora <= 6: return "Boa noite"; break;
			case $hora > 6 && $hora <= 12: return "Bom dia"; break;
			case $hora > 12 && $hora <= 18: return "Boa tarde"; break;
			case $hora > 18 && $hora <= 23: return "Boa noite"; break;
		}
	
	}
	
	
	
}

