<?php

class Query extends CI_Model {
    
/* --------------------- */
/* -------Insert-------- */
/* --------------------- */

    public function setPessoa($id_perfil, $id_endereco, $id_login, $nome, $sobrenome, $data_nasc, $email, $cpf, $telefone) {
        $data = array(
            'id_perfil' => $id_perfil,
            'id_endereco' => $id_endereco,
            'id_login' => $id_login,
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'data_nasc' => $data_nasc,
            'email' => $email,
            'cpf' => $cpf,
            'telefone' => $telefone
        );

        if ( $this->db->insert('pessoa', $data) ) {
            return true;
        } else {
            return false;
        }
    }
    
    public function setEndereco($id_estado, $rua, $numero, $complemento, $bairro, $cidade, $cep) {
        $data = array(
            'id_estado' => $id_estado,
            'rua' => $rua,
            'numero' => $numero,
            'complemento' => $complemento,
            'bairro' => $bairro,
            'cidade' => $cidade,
            'cep' => $cep
        );

        if ( $this->db->insert('endereco', $data) ) {
            return true;
        } else {
            return false;
        }
    }
    
    public function setPerfil($descricao) {
        $data = array(
            'descricao' => $descricao
        );

        if ( $this->db->insert('perfil', $data) ) {
            return true;
        } else {
            return false;
        }
    }
    
    public function setLogin($usuario, $senha) {
        $data = array(
            'usuario' => $usuario,
            'senha' => $senha
        );

        if ( $this->db->insert('login', $data) ) {
            return true;
        } else {
            return false;
        }
    }
    
    public function setEstado($nome, $sigla) {
        $data = array(
            'nome' => $nome,
            'sigla' => $sigla
        );

        if ( $this->db->insert('login', $data) ) {
            return true;
        } else {
            return false;
        }
    }
    
    public function setHorarioDisponivel($horario) {
        $data = array(
            'horario' => $horario
        );

        if ( $this->db->insert('horario_disponivel', $data) ) {
            return true;
        } else {
            return false;
        }
    }
    
    public function setAgendamento($id_pessoa, $data_horario, $descricao) {
        $data = array(
            'id_pessoa' => $id_pessoa,
            'data_horario' => $data_horario,
            'descricao' => $descricao
        );

        if ( $this->db->insert('agendamento', $data) ) {
            return true;
        } else {
            return false;
        }
    }
    
/* --------------------- */
/* --------Select------- */
/* --------------------- */
    
    public function systemName() {
        $name = 'SAS';
        return $name;
    }
    
    public function getPessoas() {
        $this->db->select('pessoa.id_pessoa');
        $this->db->select('pessoa.id_perfil');
        $this->db->select('pessoa.id_endereco');
        $this->db->select('pessoa.id_login');
        $this->db->select('pessoa.nome');
        $this->db->select('pessoa.sobrenome');
        $this->db->select('pessoa.data_nasc');
        $this->db->select('pessoa.email');
        $this->db->select('pessoa.cpf');
        $this->db->from('pessoa');
        $this->db->where('pessoa.id_pessoa > 0');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getPessoa($id_pessoa) {
        $this->db->select('pessoa.id_pessoa');
        $this->db->select('pessoa.id_perfil');
        $this->db->select('pessoa.id_endereco');
        $this->db->select('pessoa.id_login');
        $this->db->select('pessoa.nome');
        $this->db->select('pessoa.sobrenome');
        $this->db->select('pessoa.data_nasc');
        $this->db->select('pessoa.email');
        $this->db->select('pessoa.cpf');
        $this->db->select('pessoa.telefone');
        $this->db->from('pessoa');
        $this->db->where('pessoa.id_pessoa', $id_pessoa);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getPessoaCadastro($id_perfil, $id_endereco, $id_login, $nome, $sobrenome, $data_nasc, $email, $cpf) {
        $this->db->select('pessoa.id_pessoa');
        $this->db->select('pessoa.id_perfil');
        $this->db->select('pessoa.id_endereco');
        $this->db->select('pessoa.id_login');
        $this->db->select('pessoa.nome');
        $this->db->select('pessoa.sobrenome');
        $this->db->select('pessoa.data_nasc');
        $this->db->select('pessoa.email');
        $this->db->select('pessoa.cpf');
        $this->db->select('pessoa.telefone');
        $this->db->from('pessoa');
        $this->db->where('pessoa.id_perfil', $id_perfil);
        $this->db->where('pessoa.id_endereco', $id_endereco);
        $this->db->where('pessoa.id_login', $id_login);
        $this->db->where('pessoa.nome', $nome);
        $this->db->where('pessoa.sobrenome', $sobrenome);
        $this->db->where('pessoa.data_nasc', $data_nasc);
        $this->db->where('pessoa.email', $email);
        $this->db->where('pessoa.cpf', $cpf);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getEnderecos() {
        $this->db->select('endereco.id_endereco');
        $this->db->select('endereco.id_estado');
        $this->db->select('endereco.rua');
        $this->db->select('endereco.numero');
        $this->db->select('endereco.complemento');
        $this->db->select('endereco.bairro');
        $this->db->select('endereco.cidade');
        $this->db->select('endereco.cep');
        $this->db->from('endereco');
        $this->db->where('endereco.id_endereco > 0');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getEndereco($id_endereco) {
        $this->db->select('endereco.id_endereco');
        $this->db->select('endereco.id_estado');
        $this->db->select('endereco.rua');
        $this->db->select('endereco.numero');
        $this->db->select('endereco.complemento');
        $this->db->select('endereco.bairro');
        $this->db->select('endereco.cidade');
        $this->db->select('endereco.cep');
        $this->db->from('endereco');
        $this->db->where('endereco.id_endereco', $id_endereco);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getEnderecoPessoa($id_estado, $rua, $numero, $complemento, $bairro, $cidade, $cep) {
        $this->db->select('endereco.id_endereco');
        $this->db->select('endereco.id_estado');
        $this->db->select('endereco.rua');
        $this->db->select('endereco.numero');
        $this->db->select('endereco.complemento');
        $this->db->select('endereco.bairro');
        $this->db->select('endereco.cidade');
        $this->db->select('endereco.cep');
        $this->db->from('endereco');
        $this->db->where('endereco.id_estado', $id_estado);
        $this->db->where('endereco.rua', $rua);
        $this->db->where('endereco.numero', $numero);
        $this->db->where('endereco.complemento', $complemento);
        $this->db->where('endereco.bairro', $bairro);
        $this->db->where('endereco.cidade', $cidade);
        $this->db->where('endereco.cep', $cep);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getEstados() {
        $this->db->select('estado.id_estado');
        $this->db->select('estado.nome');
        $this->db->select('estado.sigla');
        $this->db->from('estado');
        $this->db->where('estado.id_estado > 0');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getEstado($id_estado) {
        $this->db->select('estado.id_estado');
        $this->db->select('estado.nome');
        $this->db->select('estado.sigla');
        $this->db->from('estado');
        $this->db->where('estado.id_estado', $id_estado);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getLogins() {
        $this->db->select('login.id_login');
        $this->db->select('login.usuario');
        $this->db->select('login.senha');
        $this->db->from('login');
        $this->db->where('login.id_login > 0');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getLogin($id_login) {
        $this->db->select('login.id_login');
        $this->db->select('login.usuario');
        $this->db->select('login.senha');
        $this->db->from('login');
        $this->db->where('login.id_login', $id_login);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getLoginPessoa($usuario) {
        $this->db->select('login.id_login');
        $this->db->select('login.usuario');
        $this->db->select('login.senha');
        $this->db->from('login');
        $this->db->where('login.usuario', $usuario);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getPerfis() {
        $this->db->select('perfil.id_perfil');
        $this->db->select('perfil.descricao');
        $this->db->from('perfil');
        $this->db->where('perfil.id_perfil > 0');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getPerfil($id_perfil) {
        $this->db->select('perfil.id_perfil');
        $this->db->select('perfil.descricao');
        $this->db->from('perfil');
        $this->db->where('perfil.id_perfil', $id_perfil);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getAgendamentos() {
        $this->db->select('agendamento.id_pessoa');
        $this->db->select('agendamento.data_horario');
        $this->db->select('agendamento.descricao');
        $this->db->from('agendamento');
        $this->db->where('agendamento.id_agendamento > 0');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getAgendamento($id_agendamento) {
        $this->db->select('agendamento.id_agendamento');
        $this->db->select('agendamento.id_pessoa');
        $this->db->select('agendamento.data_horario');
        $this->db->select('agendamento.descricao');
        $this->db->from('agendamento');
        $this->db->where('agendamento.id_agendamento', $id_agendamento);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getAgendamentosPessoa($id_pessoa) {
        $this->db->select('agendamento.id_agendamento');
        $this->db->select('agendamento.id_pessoa');
        $this->db->select('agendamento.data_horario');
        $this->db->select('agendamento.descricao');
        $this->db->from('agendamento');
        $this->db->where('agendamento.id_pessoa', $id_pessoa);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getAgendamentoData($data) {
        $this->db->select('agendamento.id_agendamento');
        $this->db->select('agendamento.id_pessoa');
        $this->db->select('agendamento.data_horario');
        $this->db->select('agendamento.descricao');
        $this->db->from('agendamento');
        $this->db->like('agendamento.data_horario', $data);
        $query = $this->db->get();
        
        if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
    }
    
    public function getAgendamentoDataResult($data) {
        $this->db->select('agendamento.id_agendamento');
        $this->db->select('agendamento.id_pessoa');
        $this->db->select('agendamento.data_horario');
        $this->db->select('agendamento.descricao');
        $this->db->from('agendamento');
        $this->db->like('agendamento.data_horario', $data);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getAgendamentoDataPessoa($data) {
        $this->db->select('agendamento.id_agendamento');
        $this->db->select('agendamento.id_pessoa');
        $this->db->select('agendamento.data_horario');
        $this->db->select('agendamento.descricao');
        $this->db->select('pessoa.nome as cliente');
        $this->db->from('agendamento');
        $this->db->join('pessoa', 'pessoa.id_pessoa = agendamento.id_pessoa', 'inner');
        $this->db->like('agendamento.data_horario', $data);
        $this->db->order_by('agendamento.data_horario');
//        $this->db->where('agendamento.id_pessoa != null');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getHorarioDisponiveis() {
        $this->db->select('horario_disponivel.id_horario');
        $this->db->select('horario_disponivel.horario');
        $this->db->from('horario_disponivel');
        $this->db->where('horario_disponivel.id_horario > 0');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getHorarioDisponivel($id_horario) {
        $this->db->select('horario_disponivel.id_horario');
        $this->db->select('horario_disponivel.horario');
        $this->db->from('horario_disponivel');
        $this->db->where('horario_disponivel.id_horario', $id_horario);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getPessoaLogin($id_login) {
        $this->db->select('pessoa.id_pessoa');
        $this->db->select('pessoa.id_perfil');
        $this->db->select('pessoa.id_endereco');
        $this->db->select('pessoa.id_login');
        $this->db->select('pessoa.nome');
        $this->db->select('pessoa.sobrenome');
        $this->db->select('pessoa.data_nasc');
        $this->db->select('pessoa.email');
        $this->db->select('pessoa.cpf');
        $this->db->from('pessoa');
        $this->db->join('login', 'pessoa.id_login = login.id_login', 'inner');
        $this->db->where('pessoa.id_login', $id_login);
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function verificaLogin($inputUser, $inputSenha){
        
		$this->db->from('login');
		$this->db->where('login.usuario', $inputUser);
		$this->db->where('login.senha', $inputSenha);
		$usuario = $this->db->get();

		if($usuario->num_rows() > 0){
			$user = $usuario->result_array();
			return $user[0];
		}else{
			return false;
		}
	}

/* --------------------- */
/* ---------Put--------- */
/* --------------------- */

    public function putPessoa($id_pessoa, $id_perfil, $id_endereco, $id_login, $nome, $sobrenome, $data_nasc, $email, $cpf, $telefone) {
        $data = array(
            'pessoa.id_perfil' => $id_perfil,
            'pessoa.id_endereco' => $id_endereco,
            'pessoa.id_login' => $id_login,
            'pessoa.nome' => $nome,
            'pessoa.sobrenome' => $sobrenome,
            'pessoa.data_nasc' => $data_nasc,
            'pessoa.email' => $email,
            'pessoa.cpf' => $cpf,
            'pessoa.telefone' => $telefone
        );
        
        $this->db->where('pessoa.id_pessoa', $id_pessoa);
        $this->db->update('pessoa', $data);
    }
    
    public function putLogin($id_login, $usuario, $senha) {
        $data = array(
            'login.id_login' => $id_login,
            'login.usuario' => $usuario,
            'login.senha' => $senha
        );
        
        $this->db->where('login.id_login', $id_login);
        $this->db->update('login', $data);
    }
    
    public function putEndereco($id_endereco, $id_estado, $rua, $numero, $complemento, $bairro, $cidade, $cep) {
        $data = array(
            'endereco.id_endereco' => $id_endereco, 
            'endereco.id_estado' => $id_estado, 
            'endereco.rua' => $rua, 
            'endereco.numero' => $numero, 
            'endereco.complemento' => $complemento, 
            'endereco.bairro' => $bairro, 
            'endereco.cidade' => $cidade, 
            'endereco.cep' => $cep
        );
        
        $this->db->where('endereco.id_endereco', $id_endereco);
        $this->db->update('endereco', $data);
    }
    
    public function putEstado($id_estado, $nome, $sigla) {
        $data = array(
            'estado.id_estado' => $id_estado,
            'estado.nome' => $nome, 
            'estado.sigla' => $sigla
        );
        
        $this->db->where('estado.id_estado', $id_estado);
        $this->db->update('estado', $data);
    }
    
    public function putTelefone($id_telefone, $id_pessoa, $numero) {
        $data = array(
            'telefone.id_telefone' => $id_telefone,
            'telefone.id_pessoa' => $id_pessoa,
            'telefone.numero' => $numero
        );
        
        $this->db->where('telefone.id_telefone', $id_telefone);
        $this->db->update('telefone', $data);
    }
    
    public function putPerfil($id_perfil, $descricao) {
        $data = array(
            'perfil.id_perfil' => $id_perfil,
            'perfil.descricao' => $descricao
        );
        
        $this->db->where('perfil.id_perfil', $id_perfil);
        $this->db->update('perfil', $data);
    }
    
    public function putAgendamento($id_agendamento, $id_pessoa, $descricao) {
        $data = array(
            'agendamento.id_pessoa' => $id_pessoa,
            'agendamento.descricao' => $descricao
        );
        
        $this->db->where('agendamento.id_agendamento', $id_agendamento);
        if ( $this->db->update('agendamento', $data) ) {
            return true;
        } else {
            return false;
        }
    }
    
    public function putHorarioAgendamento($id_horario, $horario) {
        $data = array(
            'horario.id_horario' => $id_horario,
            'horario.horario' => horario
        );
        
        $this->db->where('horario.id_horario', $id_horario);
        $this->db->update('horario', $data);
    }
    
/* --------------------- */
/* --------Delete------- */
/* --------------------- */

    public function delPessoa($id_pessoa) {
        $this->db->where('pessoa.id_pessoa', $id_pessoa);
        $this->db->delete('pessoa');
    }

    public function delLogin($id_login) {
        $this->db->where('login.id_login', $id_login);
        $this->db->delete('login');
    }

    public function delEndereco($id_endereco) {
        $this->db->where('endereco.id_endereco', $id_endereco);
        $this->db->delete('endereco');
    }

    public function delEstado($id_estado) {
        $this->db->where('estado.id_estado', $id_estado);
        $this->db->delete('estado');
    }

    public function delTelefone($id_telefone) {
        $this->db->where('telefone.id_telefone', $id_telefone);
        $this->db->delete('telefone');
    }

    public function delPerfil($id_perfil) {
        $this->db->where('perfil.id_perfil', $id_perfil);
        $this->db->delete('perfil');
    }

    public function delAgendamento($id_agendamento) {
        $this->db->where('agendamento.id_agendamento', $id_agendamento);
        $this->db->delete('agendamento');
    }

    public function delHorarioDisponivel($id_horario) {
        $this->db->where('horario_disponivel.id_horario', $id_horario);
        $this->db->delete('horario_disponivel');
    }

}
