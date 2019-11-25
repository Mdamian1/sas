<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        if (!isset($this->session)) {
            $this->session->start();
        }
        
        if (!isset($this->session->id_usuario) || $this->session->perfil != '2') {
            session_destroy();
            
            redirect('login/entrar');
        }
        
        $this->load->model('Query', 'query');
    }
    
    public function index() {
        redirect(base_url('client/dashboard'));
    }

    public function dashboard() {
        $dados['title'] = $this->query->systemName().' | HOME';
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('view/dashboard');
        $this->load->view('template/rodape');
    }
    
}
