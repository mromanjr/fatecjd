<?php

class Noticias_model extends CI_Model {

    // <editor-fold defaultstate="collapsed" desc="Construtores">
    function __construct() {
        parent::__construct();
    }

// </editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="Propriedades">
    private $titulo;
    private $noticia;
    private $destaque;
    private $imgdestaque;
    private $descr;
    private $dt_noticia;
    private $id_usuario;
    private $view_noticia; // </editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="Pesquisa">
    function UltimasNoticias() {
        $sql = "SELECT *, DATE_FORMAT(dt_noticia, '%d/%m') as data FROM noticias WHERE destaque = 0 order by id_noticia desc LIMIT 5 ";
        $query = $this->db->query($sql);
        if ($this->db->affected_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
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

// </editor-fold>
    
    // <editor-fold defaultstate="collapsed" desc="Persistência">    
    
    public function InsertNoticia($dados)
    {
        $sql = "INSERT INTO noticias VALUES('',?,?,?,?,?,'" . date("Y-m-d") . "',?,?)";
        $query = $this->db->query($sql, $dados);
        return $query;
    }

    
    public function DeletarNoticia($id_noticia)
    {
        return $this->db->delete('noticias', array('id_noticia' => $id_noticia));    
    }

    // </editor-fold>
}

?>