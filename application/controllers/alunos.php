<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alunos extends CI_Controller {		
	
	public function index()
	{
		if($this->session->userdata("logado"))
		{			
			$this->smarty->assign('usuario', $this->session->userdata("usuario"));
			$this->smarty->assign('url', base_url() . "alunos");
			$this->smarty->display("alunos/home.tpl");	
		}
		
	}
	public function paginasAlunos($pagina)
	{			
		if($this->session->userdata("logado"))
		{			
			$this->smarty->assign('usuario', $this->session->userdata("usuario"));
			$this->smarty->assign('url', base_url() . "alunos");
			if(!file_exists('application/views/templates/alunos/' . $pagina . ".tpl"))
			{
				show_404();
				exit;
			}
			else
			{
				$this->smarty->assign('usuario', $this->session->userdata("usuario"));
				$this->smarty->assign('url', base_url() . "alunos/");
				$this->smarty->assign('menu',$pagina);
				$this->smarty->display("alunos/$pagina.tpl");	
			}
		}
		else
		{
			redirect(base_url());
		}
		
		
		
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
