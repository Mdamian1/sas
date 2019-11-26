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
    
    public function agendar() {
        $dados['title'] = $this->query->systemName().' | HOME';
        $dados['horarioDisponivel'] = $this->query->getHorarioDisponiveis();
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('view/agendar');
        $this->load->view('template/rodape');
    }
    
    public function cadastrarAgendamento() {
        $id_pessoa = $this->session->id_usuario;
        $id_horario = $this->input->post('horario');
        $data_agendada = $this->input->post('data-agendada');
        $descricao = $this->input->post('descricao');
        
        if ( $this->query->setAgendamento($id_horario, $id_pessoa, $data_agendada, $descricao) ) {
            echo json_encode(true);
        } else {
            echo json_encode(false);
        }
    }
    
}
