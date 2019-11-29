<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Query', 'query');
    }
    
    public function systemName(){
        $systemName = 'SAS';
        return $systemName;
    }
    
    public function entrar() {
        $dados['title'] = $this->systemName().' | Login';
        
		$this->load->view('template/cabecalho-login', $dados);
		$this->load->view('view/login');
		$this->load->view('template/rodape-login');
	}
    
    public function fazerLogin() {
        $user = $this->input->post('user');
        $senha = $this->input->post('senha');
        
        $loginExistente = $this->query->verificaLogin($user, md5($senha));
        
        if($loginExistente['usuario'] === $user){

            $usuario = $loginExistente;
            
            $pessoa = $this->query->getPessoaLogin($usuario['id_login']);

            $session = array(
                'id_usuario' => $pessoa[0]['id_pessoa'],
                'user' => $usuario['usuario'],
                'nome' => $pessoa[0]['nome'],
                'perfil' => $pessoa[0]['id_perfil'],
                'logado' => true
            );

            $this->session->set_userdata($session);

            $mensagem = array(
                'class' => 'logado',
                'mensagem' => 'Logado com sucesso.',
                'perfil' => $pessoa[0]['id_perfil'],
                'boolean' => 'true'
            );
            
            echo json_encode($mensagem);

        }else{

            $mensagem = array(
                'class' => 'danger',
                'mensagem' => 'Login inválido, usuário ou senha incorretos.',
                'boolean' => 'false'
            );
            
            echo json_encode($mensagem);

        }
        
    }
    
    public function sair(){
		$this->session->sess_destroy();

		redirect('login/entrar');
	}
    
}