<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        if (!isset($this->session)) {
            $this->session->start();
        }
        
        if (!isset($this->session->id_usuario) || $this->session->perfil != '1') {
            session_destroy();
            
            redirect('login/login');
        }
        
        $this->load->model('Query', 'query');
    }

    public function index() {
        redirect(base_url('admin/dashboard'));
    }

    public function dashboard() {
        $dados['title'] = $this->query->systemName().' | DASHBOARD';
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('template/rodape');
    }

    public function users() {
        $dados['title'] = $this->query->systemName().' | USUÁRIOS';
        $dados['users'] = $this->query->getPessoas();
        $dados['perfil'] = $this->query->getPerfis();
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('view/users');
        $this->load->view('template/rodape');
    }

    public function user($id_pessoa) {
        $dados['title'] = $this->query->systemName().' | USUÁRIO';
        $dados['user'] = $this->query->getPessoa($id_pessoa);
        $dados['perfil'] = $this->query->getPerfil($dados['user'][0]['id_perfil']);
        $dados['endereco'] = $this->query->getEndereco($dados['user'][0]['id_endereco']);
        $dados['estado'] = $this->query->getEstado($dados['endereco'][0]['id_estado']);
        $dados['login'] = $this->query->getLogin($dados['user'][0]['id_login']);
        $dados['telefone'] = $this->query->getTelefone($dados['user'][0]['id_pessoa']);
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('view/user');
        $this->load->view('template/rodape');
    }

    public function deletarUser($id_pessoa) {
        $dados['title'] = $this->query->systemName().' | DELETAR USUÁRIO';
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('view/deletar');
        $this->load->view('template/rodape');
    }

    public function alterarUser($id_pessoa) {
        $dados['title'] = $this->query->systemName().' | ALTERAR USUÁRIO';
        $dados['user'] = $this->query->getPessoa($id_pessoa);
        $dados['endereco'] = $this->query->getEndereco($dados['user'][0]['id_endereco']);
        $dados['estado'] = $this->query->getEstado($dados['endereco'][0]['id_estado']);
        $dados['estados'] = $this->query->getEstados();
        $dados['perfis'] = $this->query->getPerfis();
        $dados['login'] = $this->query->getLogin($id_pessoa);
        $dados['telefone'] = $this->query->getTelefone($dados['user'][0]['id_pessoa']);
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('view/alterar');
        $this->load->view('template/rodape');
    }
    
}
