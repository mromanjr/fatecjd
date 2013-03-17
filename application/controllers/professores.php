<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Professores extends CI_Controller {	
	
	
	public function index()
	{
		if(!$this->session->userdata('logado'))
		{		
			$this->smarty->assign("area","professores");
			$this->smarty->assign("restrito","Professores");
			$this->smarty->view('login.tpl');			
		}
		else
		{
			if ($this->session->userdata('nivel') == 'professores')
			{
				$dados = array
				(				
					'usuario' => $this->session->userdata('usuario'),					
					'menu' => 'home'
				);
				$this->smarty->assign($dados);
				$this->smarty->view("professores/home.tpl");
			}
			else
			{
				show_404();
			}
			
		}
		
	}
	
	public function login()
	{
		if(!$this->session->userdata('logado'))
		{		
			$this->smarty->assign("area",2);
			$this->smarty->view('login.tpl');			
		}
		else
		{
			if (base_url() . $this->session->userdata('nivel') == 2)
			{
				$dados = array
				(				
					'usuario' => $this->session->userdata('usuario'),
					'url' => base_url() . $this->session->userdata('nivel') . '/',
					'menu' => 'home'
				);
				$this->smarty->assign($dados);
				$this->smarty->view($this->session->userdata('nivel') . "/home.tpl");
			}
			else
			{
				show_404();
			}
			
		}
	}
	
	public function paginasAdmin($pagina)
	{			
		if($this->session->userdata("logado"))
		{			
			$this->smarty->assign('usuario', $this->session->userdata("usuario"));
			$this->smarty->assign('url', base_url() . "professores");
			if(!file_exists('application/views/templates/professores/' . $pagina . ".tpl"))
			{
				show_404();
				exit;
			}
			else
			{
				$this->smarty->assign('usuario', $this->session->userdata("usuario"));
				$this->smarty->assign('url', base_url() . "professores/");
				$this->smarty->assign('menu',$pagina);
				$this->smarty->display("professores/$pagina.tpl");	
			}
		}
		else
		{
			redirect(base_url() . "professores");
		}
		
		
		
	}

	
}

