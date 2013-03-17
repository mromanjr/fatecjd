<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    // <editor-fold defaultstate="collapsed" desc="Construtores">
    public function __construct() {
        parent::__construct();
        $this->load->model("admin_model", "", TRUE);
        $this->smarty->assign('usuario', $this->session->userdata("usuario"));
    }

// </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Navegação">
    public function index() {        
        if (!$this->session->userdata('logado')) {
            $this->smarty->assign("area", "admin");
            $this->smarty->assign("restrito", "Administrador");
            $this->smarty->view('login.tpl');
        } else {
            if ($this->session->userdata('nivel') == 'admin') {
                $dados = array
                    (
                    'usuario' => $this->session->userdata('usuario'),
                    'menu' => 'home'
                );
                $this->smarty->assign($dados);
                $this->smarty->view("admin/home.tpl");
            } else {
                show_404();
            }
        }
    }

    public function login() {
        if (!$this->session->userdata('logado')) {
            $this->smarty->assign("area", 1);
            $this->smarty->view('login.tpl');
        } else {
            if (base_url() . $this->session->userdata('nivel') == 1) {
                $dados = array
                    (
                    'usuario' => $this->session->userdata('usuario'),
                    'url' => base_url() . $this->session->userdata('nivel') . '/',
                    'menu' => 'home'
                );
                $this->smarty->assign($dados);
                $this->smarty->view($this->session->userdata('nivel') . "/home.tpl");
            } else {
                show_404();
            }
        }
    }

    public function noticias() {
        if ($this->session->userdata("logado")) {
            $this->smarty->assign('menu', 'noticias');

            if ($_POST) {
                $this->load->helper('ckeditor');
                $data['ckeditor_texto1'] = array(
                    'id' => 'texto1',
                    'path' => 'assets/ckeditor',
                    'config' => array
                        (
                        'toolbar' => "Full",
                        'width' => "680px",
                        'height' => "300px",
                    )
                );
                $acao = $_POST['acao'];
                switch ($acao) {
                    case 'criar': {
                            $this->smarty->display("admin/criar_noticia.tpl", $data);
                            break;
                        }
                    case 'editar': {                            
                            $this->smarty->display("admin/editar_noticia.tpl", $data);
                            break;
                        }
                    case 'deletar': {
                            $noticia = $_POST['noticia'];
                            $res = $this->admin_model->DeletarNoticia($noticia);
                            if ($res) {
                                $res = $this->paginacao();
                                $this->smarty->display("admin/noticias.tpl");

                            } 
                            else {
                                echo "Erro ao excluir a notícia";
                            }

                            break;
                        }
                    case 'salvar': {
                            $titulo = $_POST['titulo'];
                            $descricao = $_POST['descricao'];
                            $destaque = ($_POST['destaque']) ? $_POST['destaque'] : NULL;
                            $conteudo = $_POST['texto1'];
                            if (isset($_FILES['imgdestaque']) && !empty($_FILES['imgdestaque']['name'])) {
                                $nome = $this->upload();
                            }

                            if (!empty($titulo) && !empty($descricao) && !empty($conteudo)) {
                                $view = md5(str_replace(" ", "-", strtolower($titulo))) . ".tpl";
                                $dados = array(
                                    $titulo,
                                    $conteudo,
                                    ($destaque == 0) ? 0 : 1,
                                    (isset($nome)) ? $nome : NULL,
                                    $descricao,
                                    $this->session->userdata("id_usuario"),
                                    $view
                                );
                                $res = $this->admin_model->InsertNoticia($dados);
                                if ($res) {
                                    $this->load->helper('file');
                                    $path = "./application/views/templates/noticias/" . $view;

                                    $view_conteudo = '{include file="header.tpl" titulo="$titulo" config=true}';
                                    $view_conteudo .= "<link rel='stylesheet' href='{base_url()|cat: 'assets/css/estilos.css'}' type='text/css'>";
                                    $view_conteudo .= "<div class='cabecalhoMateria'><h1>" . $titulo . "</h1></div>";
                                    $view_conteudo .= "<div class='corpoMateria resizeable'>" . $conteudo . "</div>";
                                    $view_conteudo .= '<div class="clear"></div><div class="clear"></div>';
                                    $view_conteudo .= '{include file="header.tpl" titulo="Fatec Jundiaí" config=true}';

                                    if (!write_file($path, $view_conteudo)) {
                                        echo "erro";
                                    } else {
                                        $data['alerta'] = array(
                                            0 => "Not&iacute;cia cadastrada com sucesso"
                                        );

                                        $this->smarty->display("admin/criar_noticia.tpl", $data);
                                    }
                                } else {
                                    $msg = "Erro";
                                    $this->smarty->assign("msg", $msg);
                                    $this->smarty->display("admin/criar_noticia.tpl", $data);
                                }
                            } else {
                                echo "Preencha os campos corretamente";
                            }
                            break;
                        }
                }
            } else {
                $res = $this->paginacao();
                $this->smarty->display("admin/noticias.tpl");
                        }
        } else {
            redirect(base_url() . "admin");
        }
    }
    
    public function paginas() {
        if ($this->session->userdata("logado")) {
            $this->smarty->assign('menu', 'paginas');
            $this->smarty->display("admin/paginas.tpl");
        } else {
            redirect(base_url() . "admin");
        }
    }

    public function usuarios() {
        if ($this->session->userdata("logado")) {
            $this->smarty->assign('menu', 'usuarios');
            $this->smarty->display("admin/usuarios.tpl");
        } else {
            redirect(base_url() . "admin");
        }
    }
// </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Métodos">
    private function paginacao() {
        $this->load->library('pagination');



        if ($_GET) {
            $maximo = $_GET['p'];
            $inicio = $_GET['registros'];
        } else {
            $maximo = 5;
            $inicio = 0;
        }

        $config['base_url'] = base_url() . "admin/noticias?p=$maximo";

        $config['total_rows'] = $this->admin_model->contaRegistros();

        $config['per_page'] = $maximo;
        $config['num_links'] = 10;

        $config['num_tag_open'] = '<span>';
        $config['num_tag_close'] = '</span>';


        $config['enable_query_strings'] = TRUE;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'registros';
        $config['first_link'] = 'Primeiro';
        $config['cur_tag_open'] = '<span id="cur">';
        $config['cur_tag_close'] = '</span>';
        $config['last_link'] = '&Uacute;ltimo';
        $config['next_link'] = 'Pr&oacute;ximo';
        $config['prev_link'] = 'Anterior';
        $config['full_tag_open'] = '<div id="paginacao">';
        $config['full_tag_close'] = '</div>';
        $config['display_pages'] = true;

        $this->pagination->initialize($config);



        $res = $this->admin_model->ConsultarNoticias($maximo, isset($inicio) ? $inicio : 0);
        $this->smarty->assign("paginacao", $this->pagination->create_links());
        $this->smarty->assign("p", $maximo);

        if ($res != FALSE) {
            $this->smarty->assign("noticias", $res);
            return $res;
        } else {
            $msg = "Nenhuma notícia cadastrada";
            return $msg;
        }
    }

    function upload() {
        //parametriza as prefer�ncias
        $this->load->helper('file');
        $config["upload_path"] = "./uploads/destaques";
        $config["allowed_types"] = "gif|jpg|png";
        $config["overwrite"] = FALSE;

        $this->load->library("upload", $config);
        //em caso de sucesso no upload
        if ($this->upload->do_upload("imgdestaque")) {
            //renomeia a foto
            $nomeorig = $config["upload_path"] . "/" . $this->upload->file_name;
            $nome_tmp = md5(rand());
            $nomedestino = $config["upload_path"] . "/" . $nome_tmp . $this->upload->file_ext;
            rename($nomeorig, $nomedestino);

            $config["image_library"] = "gd2";
            $config["source_image"] = $nomedestino;
            $config["width"] = 600;
            $config["height"] = 215;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = FALSE;
            $this->load->library("image_lib", $config);
            $this->image_lib->resize();
        } else {
            print_r($this->upload->data());
        }
        return $nome_tmp . "_thumb" . $this->upload->file_ext;
    }
// </editor-fold>
}
