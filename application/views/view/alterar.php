<section id="sec-alterar">
    <div class="row no-gutters justify-content-center">
        <div class="users-fundo col-md-6">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h4>Pessoa</h4>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-nome">Nome</label>
                        <input type="text" class="form-control" id="user-nome" placeholder="Nome" value="<?php echo $user[0]['nome'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="user-sobrenome" placeholder="Sobrenome" value="<?php echo $user[0]['sobrenome'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-data-nasc">Data de Nascimento</label>
                        <input type="date" class="form-control" id="user-data-nasc" value="<?php echo $user[0]['data_nasc'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-telefone">Celular</label>
                        <input type="text" class="form-control" id="user-telefone" placeholder="Celular" value="<?php echo $telefone[0]['numero'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-email">E-mail</label>
                        <input type="text" class="form-control" id="user-email" placeholder="E-mail" value="<?php echo $user[0]['email'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-cpf">CPF</label>
                        <input type="text" class="form-control" id="user-cpf" placeholder="CPF" value="<?php echo $user[0]['cpf'] ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h4>Endereço</h4>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="user-rua">Rua</label>
                        <input type="text" class="form-control" id="user-rua" placeholder="Rua" value="<?php echo $endereco[0]['rua'] ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="user-numero">Número</label>
                        <input type="text" class="form-control" id="user-numero" placeholder="Número" value="<?php echo $endereco[0]['numero'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-complemento">Complemento</label>
                        <input type="text" class="form-control" id="user-complemento" placeholder="Complemento" value="<?php echo $endereco[0]['complemento'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-bairro">Bairro</label>
                        <input type="text" class="form-control" id="user-bairro" placeholder="Bairro" value="<?php echo $endereco[0]['bairro'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-cidade">Cidade</label>
                        <input type="text" class="form-control" id="user-cidade" placeholder="Cidade" value="<?php echo $endereco[0]['cidade'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-estado">Estado</label>
                        <select id="user-estado" class="form-control">
                            <?php
                            foreach($estados as $infoEstado){
                                if($infoEstado['id_estado'] == $endereco[0]['id_estado']) {
                                    echo "<option selected value='".$infoEstado['id_estado']."'>".$infoEstado['nome']." - ".$infoEstado['sigla']."</option>";
                                }
                                if($infoEstado['id_estado'] != $endereco[0]['id_estado']) {
                                    echo "<option value='".$infoEstado['id_estado']."'>".$infoEstado['nome']." - ".$infoEstado['sigla']."</option>";
                                }
                            } 
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h4>Login</h4>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-usuario">Usuário</label>
                        <input type="text" class="form-control" id="user-usuario" placeholder="Usuário" value="<?php echo $login[0]['usuario'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-senha">Senha</label>
                        <input type="text" class="form-control" id="user-senha" placeholder="Senha">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-conf-senha">Confirmar senha</label>
                        <input type="text" class="form-control" id="user-conf-senha" placeholder="Confirmar senha">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h4>Perfil do usuário</h4>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-estado">Perfil</label>
                        <select id="user-estado" class="form-control">
                            <?php
                            foreach($perfis as $perfil){
                                if($perfil['id_perfil'] == $user[0]['id_perfil']) {
                                    echo "<option selected value'".$perfil['id_perfil']."'>".$perfil['descricao']."</option>";
                                }
                                
                                if($perfil['id_perfil'] != $user[0]['id_perfil']) {
                                    echo "<option value'".$perfil['id_perfil']."'>".$perfil['descricao']."</option>";
                                }
                            } 
                            ?>
                        </select>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-dark">Entrar</button>
            </form>
        </div>
    </div>
</section>
