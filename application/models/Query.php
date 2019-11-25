<?php

class Query extends CI_Model {
    
/* --------------------- */
/* -------Insert-------- */
/* --------------------- */

    public function setPessoa($id_perfil, $id_endereco, $id_login, $nome, $sobrenome, $data_nasc, $email, $cpf) {
        $data = array(
            'id_perfil' => $id_perfil,
            'id_endereco' => $id_endereco,
            'id_login' => $id_login,
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'data_nasc' => $data_nasc,
            'email' => $email,
            'cpf' => $cpf
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
    
    public function setTelefone($id_pessoa, $numero) {
        $data = array(
            'id_pessoa' => $id_pessoa,
            'numero' => $numero
        );

        if ( $this->db->insert('telefone', $data) ) {
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
            'senha' => sha1($senha)
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
    
    public function setAgendamento($id_horario, $id_pessoa, $descricao) {
        $data = array(
            'id_horario' => $id_horario,
            'id_pessoa' => $id_pessoa,
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
    
    public function getTelefones() {
        $this->db->select('telefone.id_telefone');
        $this->db->select('telefone.id_pessoa');
        $this->db->select('telefone.numero');
        $this->db->from('telefone');
        $this->db->where('telefone.id_telefone > 0');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getTelefone($id_pessoa) {
        $this->db->select('telefone.id_telefone');
        $this->db->select('telefone.id_pessoa');
        $this->db->select('telefone.numero');
        $this->db->from('telefone');
        $this->db->where('telefone.id_pessoa', $id_pessoa);
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
        $this->db->select('agendamento.id_agendamento');
        $this->db->select('agendamento.id_horario');
        $this->db->select('agendamento.id_pessoa');
        $this->db->select('agendamento.descricao');
        $this->db->from('agendamento');
        $this->db->where('agendamento.id_agendamento > 0');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
    public function getAgendamento($id_agendamento) {
        $this->db->select('agendamento.id_agendamento');
        $this->db->select('agendamento.id_horario');
        $this->db->select('agendamento.id_pessoa');
        $this->db->select('agendamento.descricao');
        $this->db->from('agendamento');
        $this->db->where('agendamento.id_agendamento', $id_agendamento);
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

    public function putPessoa($id_pessoa, $id_perfil, $id_endereco, $id_login, $nome, $sobrenome, $data_nasc, $email, $cpf) {
        $data = array(
            'pessoa.id_perfil' => $id_perfil,
            'pessoa.id_endereco' => $id_endereco,
            'pessoa.id_login' => $id_login,
            'pessoa.nome' => $nome,
            'pessoa.sobrenome' => $sobrenome,
            'pessoa.data_nasc' => $data_nasc,
            'pessoa.email' => $email,
            'pessoa.cpf' => $cpf
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
    
    public function putAgendamento($id_agendamento, $id_horario) {
        $data = array(
            'agendamento.id_agendamento' => $id_agendamento,
            'agendamento.id_horario' => $id_horario,
            'agendamento.id_pessoa' => $id_pessoa,
            'agendamento.descricao' => $descricao
        );
        
        $this->db->where('agendamento.id_agendamento', $id_agendamento);
        $this->db->update('agendamento', $data);
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
