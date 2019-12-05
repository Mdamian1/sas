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
        $dados['title'] = $this->query->systemName().' | AGENDAR';
        $dados['horarioDisponivel'] = $this->query->getHorarioDisponiveis();
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('view/agendar');
        $this->load->view('template/rodape');
    }
    
    public function cadastrarAgendamento() {
        $id_agendamento = $this->input->post('horario');
        $id_pessoa = $this->session->id_usuario;
        $descricao = $this->input->post('descricao');
        
        if ( $this->query->putAgendamento($id_agendamento, $id_pessoa, $descricao) ) {
            echo json_encode(true);
        } else {
            echo json_encode(false);
        }
    }
    
    public function buscarDia() {
        $data = $this->input->post('data-agendada');
        
        $existe = ( $this->query->getAgendamentoData($data) == true )?404:200;
        
        if ( $existe == 200 ) {
            $horarioDisponiveis = $this->query->getHorarioDisponiveis();
            $id_pessoa = null;
            $descricao = null;
            foreach($horarioDisponiveis as $horario):
            $dataHora = $data.' '.$horario['horario'];
            $diaHorario = $this->query->setAgendamento($id_pessoa, $dataHora, $descricao);
            endforeach;
            $retorno = $this->query->getAgendamentoDataResult($data);
            echo json_encode($retorno);
        } else {
            $retorno = $this->query->getAgendamentoDataResult($data);
            echo json_encode($retorno);
            
        }
    }
    
    public function agendamentos($id_pessoa) {
        $dados['title'] = $this->query->systemName().' | AGENDAMENTOS';
        $dados['agendamentos'] = $this->query->getAgendamentosPessoa($id_pessoa);
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('view/agendamentos');
        $this->load->view('template/rodape');
    }
    
    public function cancelar($id_agendamento) {
        $id_pessoa = null;
        $descricao = null;
        
        if ( $this->query->putAgendamento($id_agendamento, $id_pessoa, $descricao) ) {
            redirect(base_url('client/agendamentos/'.$this->session->id_usuario));
        } else {
            redirect(base_url('client/agendamentos/'.$this->session->id_usuario));
        }
    }
    
}
