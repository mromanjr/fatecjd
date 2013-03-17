<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function logar() {
        if (!$this->session->userdata('logado')) {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            $area = $_POST['area'];
            if (!empty($usuario) && !empty($senha)) {
                $this->load->model("login_model", "", TRUE);
                $res = $this->login_model->logar($usuario, $senha, $area);
                if ($res != FALSE) {

                    $dados = array
                        (
                        'logado' => TRUE,
                        'id_usuario' => $res[0]['id_usuario'],
                        'usuario' => $res[0]['usuario'],
                        'nivel' => $res[0]['nivel']
                    );

                    $this->session->set_userdata($dados);
                } else {
                    echo "Usuário não encontrado";
                }
            } else {
                echo "Preencha seu usuário e senha";
            }
        } else {
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }

}
?>