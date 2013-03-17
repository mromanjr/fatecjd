<?php
	class Login_model extends CI_Model
	{
	
		function __construct()
		{
			parent::__construct();
		}
		
		function logar($usuario,$senha, $area) 
		{							
			$sql = "SELECT * FROM usuarios WHERE usuario = ? AND senha = ? AND nivel = ?";  
			$query = $this->db->query($sql,array($usuario,$senha,$area));
			
			if($this->db->affected_rows() == 1)
			{
				$resultado = $query->result_array();
				return $resultado;
			}
			else
			{
				return false;				
			}
		}

	
	}
?>