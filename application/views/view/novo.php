<section id="sec-alterar">
    <div class="row no-gutters justify-content-center">
        <div class="users-fundo col-md-6">
            <form id="form-new-user">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h4>Pessoa</h4>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-nome">Nome</label>
                        <input type="text" class="form-control" id="user-nome" placeholder="Nome" name="nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="user-sobrenome" placeholder="Sobrenome" name="sobrenome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-data-nasc">Data de Nascimento</label>
                        <input type="date" class="form-control" id="user-data-nasc" name="data-nasc">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-telefone">Celular</label>
                        <input type="text" class="form-control" id="user-telefone" placeholder="Celular" name="celular">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-email">E-mail</label>
                        <input type="text" class="form-control" id="user-email" placeholder="E-mail" name="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-cpf">CPF</label>
                        <input type="text" class="form-control" id="user-cpf" placeholder="CPF" name="cpf">
                    </div>
                    <div id="alert-user-email" class="alert alert-danger text-center col-md-12" role="alert">
                        E-mail não é válido!
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h4>Endereço</h4>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="user-rua">Rua</label>
                        <input type="text" class="form-control" id="user-rua" placeholder="Rua" name="rua">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="user-numero">Número</label>
                        <input type="text" class="form-control" id="user-numero" placeholder="Número" name="numero">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="user-complemento">Complemento</label>
                        <input type="text" class="form-control" id="user-complemento" placeholder="Complemento" name="complemento">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="user-bairro">Bairro</label>
                        <input type="text" class="form-control" id="user-bairro" placeholder="Bairro" name="bairro">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="user-cep">CEP</label>
                        <input type="text" class="form-control" id="user-cep" placeholder="CEP" name="cep">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-cidade">Cidade</label>
                        <input type="text" class="form-control" id="user-cidade" placeholder="Cidade" name="cidade">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-estado">Estado</label>
                        <select id="user-estado" class="form-control" name="estado">
                            <option value="0">Selecione um estado</option>
                            <?php
                            foreach($estados as $infoEstado){
                                echo "<option value='".$infoEstado['id_estado']."'>".$infoEstado['nome']." - ".$infoEstado['sigla']."</option>";
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
                        <input type="text" class="form-control" id="user-usuario" placeholder="Usuário" name="usuario">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-senha">Senha</label>
                        <input type="password" class="form-control" id="user-senha" placeholder="Senha" name="senha">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-conf-senha">Confirmar senha</label>
                        <input type="password" class="form-control" id="user-conf-senha" placeholder="Confirmar senha" name="confirmar-senha">
                    </div>
                    <div id="alert-senha" class="alert alert-danger col-md-12 text-center" role="alert">
                        Senhas não conferem!
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h4>Perfil do usuário</h4>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-perfil">Perfil</label>
                        <select id="user-perfil" class="form-control" name="perfil">
                            <option value="0">Selecione um perfil</option>
                            <?php
                            foreach($perfis as $perfil){
                                echo "<option value='".$perfil['id_perfil']."'>".$perfil['descricao']."</option>";
                            } 
                            ?>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-dark" id="btn-cadastrar">Cadastrar</button>
            </form>
        </div>
    </div>
</section>
