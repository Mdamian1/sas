<section id="sec-alterar">
    <div class="row no-gutters justify-content-center">
        <div class="users-fundo col-md-6">
            <form id="form-alt-user">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h4>Pessoa</h4>
                    </div>
                    <input type="hidden" id="user-id-pessoa" name="id_pessoa" value="<?php echo $user[0]['id_pessoa'] ?>">
                    <div class="form-group col-md-6">
                        <label for="user-nome">Nome</label>
                        <input type="text" class="form-control" id="user-nome" name="nome" placeholder="Nome" value="<?php echo $user[0]['nome'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="user-sobrenome" name="sobrenome" placeholder="Sobrenome" value="<?php echo $user[0]['sobrenome'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-data-nasc">Data de Nascimento</label>
                        <input type="date" class="form-control" id="user-data-nasc" name="data_nasc" value="<?php echo $user[0]['data_nasc'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-telefone">Celular</label>
                        <input type="text" class="form-control" id="user-telefone" name="telefone" placeholder="Celular" value="<?php echo $user[0]['telefone'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-email">E-mail</label>
                        <input type="text" class="form-control" id="user-email" name="email" placeholder="E-mail" value="<?php echo $user[0]['email'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-cpf">CPF</label>
                        <input type="text" class="form-control" id="user-cpf" name="cpf" placeholder="CPF" value="<?php echo $user[0]['cpf'] ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <h4>Endereço</h4>
                    </div>
                    <input type="hidden" id="user-id-endereco" name="id_endereco" value="<?php echo $endereco[0]['id_endereco'] ?>">
                    <div class="form-group col-md-8">
                        <label for="user-rua">Rua</label>
                        <input type="text" class="form-control" id="user-rua" name="rua" placeholder="Rua" value="<?php echo $endereco[0]['rua'] ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="user-numero">Número</label>
                        <input type="text" class="form-control" id="user-numero" name="numero" placeholder="Número" value="<?php echo $endereco[0]['numero'] ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="user-complemento">Complemento</label>
                        <input type="text" class="form-control" id="user-complemento" name="complemento" placeholder="Complemento" value="<?php echo $endereco[0]['complemento'] ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="user-bairro">Bairro</label>
                        <input type="text" class="form-control" id="user-bairro" name="bairro" placeholder="Bairro" value="<?php echo $endereco[0]['bairro'] ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="user-cep">CEP</label>
                        <input type="text" class="form-control" id="user-cep" placeholder="CEP" name="cep" value="<?php echo $endereco[0]['cep'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-cidade">Cidade</label>
                        <input type="text" class="form-control" id="user-cidade" name="cidade" placeholder="Cidade" value="<?php echo $endereco[0]['cidade'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user-estado">Estado</label>
                        <select id="user-estado" name="id_estado" class="form-control">
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
                
                <button type="submit" id="btn-alterar-user" class="btn btn-dark">Alterar</button>
            </form>
        </div>
    </div>
</section>
