<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        if (!isset($this->session)) {
            $this->session->start();
        }
        
        if (!isset($this->session->id_usuario) || $this->session->perfil != '3') {
            session_destroy();
            
            redirect('login/login');
        }
        
        $this->load->model('Query', 'query');
    }
    
    public function index() {
        $dados['title'] = $this->query->systemName().' | HOME';
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('clientes/agendamento');
        $this->load->view('template/rodape');
    }
    
}
