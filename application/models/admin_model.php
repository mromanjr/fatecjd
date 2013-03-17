<?php

class Admin_model extends CI_Model {

    // <editor-fold defaultstate="collapsed" desc="Construtores">
    function __construct() {
        parent::__construct();
    }

// </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Pesquisa">
    function ConsultarNoticias($maximo, $inicio) {
        $this->db->select("*,DATE_FORMAT(dt_noticia,'%d/%m/%Y') as data", FALSE);
        $this->db->order_by("id_noticia", "desc");
        $this->db->limit($maximo, $inicio);
        $query = $this->db->get("noticias");

        return $query->result_array();
    }

    function UltimosDestaques() {
        $sql = "SELECT * FROM noticias where destaque = 1 order by id_noticia desc LIMIT 5 ";
        $query = $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    public function contaRegistros() {
        $this->db->select("*");
        $this->db->from("noticias");
        $query = $this->db->get();
        return count($query->result());
    }
// </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Persistência">
    public function InsertNoticia($dados) {
        $sql = "INSERT INTO noticias VALUES('',?,?,?,?,?,'" . date("Y-m-d") . "',?,?)";
        $query = $this->db->query($sql, $dados);
        return $query;
    }

    
    public function DeletarNoticia($id_noticia) {
        return $this->db->delete('noticias', array('id_noticia' => $id_noticia));    
    }

// </editor-fold>
}

?>