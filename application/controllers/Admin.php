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
            
            redirect('login/entrar');
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
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('view/user');
        $this->load->view('template/rodape');
    }
    
    public function novo() {
        $dados['title'] = $this->query->systemName().' | NOVO USUÁRIO';
        $dados['estados'] = $this->query->getEstados();
        $dados['perfis'] = $this->query->getPerfis();
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('view/novo');
        $this->load->view('template/rodape');
    }
    
    public function cadastrarUser() {
        $nome = $this->input->post('nome');
        $sobrenome = $this->input->post('sobrenome');
        $dataNasc = $this->input->post('data-nasc');
        $celular = $this->input->post('celular');
        $email = $this->input->post('email');
        $cpf = $this->input->post('cpf');
        $rua = $this->input->post('rua');
        $numero = $this->input->post('numero');
        $complemento = $this->input->post('complemento');
        $bairro = $this->input->post('bairro');
        $cidade = $this->input->post('cidade');
        $id_estado = $this->input->post('estado');
        $cep = $this->input->post('cep');
        $usuario = $this->input->post('usuario');
        $senha = $this->input->post('senha');
        $confirmarSenha = $this->input->post('confirmar-senha');
        $id_perfil = $this->input->post('perfil');
        $k = 0;
        
        if ( $senha == $confirmarSenha ) {
            
            if ( $this->query->setLogin($usuario, md5($senha)) ) {
                
                $k++;
                
                $login = $this->query->getLoginPessoa($usuario);
                
                if ( $this->query->setEndereco($id_estado, $rua, $numero, $complemento, $bairro, $cidade, $cep) ) {
                    
                    $k++;
                    
                    $endereco = $this->query->getEnderecoPessoa($id_estado, $rua, $numero, $complemento, $bairro, $cidade, $cep);

                    if ( $this->query->setPessoa($id_perfil, $endereco[0]['id_endereco'], $login[0]['id_login'], $nome, $sobrenome, $dataNasc, $email, $cpf, $celular) ) {
                        
                        $k++;
                        
                        $pessoa = $this->query->getPessoaCadastro($id_perfil, $endereco[0]['id_endereco'], $login[0]['id_login'], $nome, $sobrenome, $dataNasc, $email, $cpf, $celular);
                    }
                }
            }
        }
        
        if ( $k == 3 ) {
            echo json_encode('Pessoa cadastrada com sucesso');
        } else {
            echo json_encode('Falha ao cadastrar pessoa');
        }
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
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('view/alterar');
        $this->load->view('template/rodape');
    }
    
    public function agendamentos() {
        $dados['title'] = $this->query->systemName().' | AGENDAMENTOS';
        
        $this->load->view('template/cabecalho', $dados);
        $this->load->view('view/admin-agendamentos');
        $this->load->view('template/rodape');
    }
    
    public function getAgendamentos() {
        $data = $this->input->post('data');
        
        $agendamentos = $this->query->getAgendamentoDataPessoa($data);
        
        echo json_encode($agendamentos);
    }
    
}
