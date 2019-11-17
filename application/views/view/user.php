<section id="sec-user">
    <div class="row no-gutters justify-content-center">
        <div class="users-fundo container">
            <ul class="list-group">
                <li class="list-group-item active"><strong>Nome:</strong> <?php echo $user[0]['nome'].' '.$user[0]['sobrenome'] ?></li>
                <li class="list-group-item"><strong>Perfil:</strong> <?php echo $perfil[0]['descricao'] ?></li>
                <li class="list-group-item"><strong>Usuário:</strong> <?php echo $login[0]['usuario'] ?></li>
                <li class="list-group-item"><strong>Telefone:</strong> <?php echo $telefone[0]['numero'] ?></li>
                <li class="list-group-item"><strong>E-mail:</strong> <?php echo $user[0]['email'] ?></li>
                <li class="list-group-item"><strong>CPF:</strong> <?php echo $user[0]['cpf'] ?></li>
                <li class="list-group-item"><strong>Data de nascimento:</strong> <?php echo strftime("%d/%m/%Y", strtotime($user[0]['data_nasc'])) ?></li>
                <li class="list-group-item"><strong>Endereço:</strong> <?php echo $endereco[0]['rua'].', '.$endereco[0]['numero'].', '.$endereco[0]['complemento'].' - '.$endereco[0]['bairro'].', '.$endereco[0]['cidade'].'/'.$estado[0]['sigla'] ?></li>
                <li class="list-group-item list-btns">
                    <a class="btn btn-primary btn-user" href="<?php echo base_url('admin/deletarUser/'.$user[0]['id_pessoa']) ?>">Excluir</a>
                    <a class="btn btn-primary btn-user" href="<?php echo base_url('admin/alterarUser/'.$user[0]['id_pessoa']) ?>">Alterar</a>
                </li>
            </ul>
        </div>
    </div>
</section>