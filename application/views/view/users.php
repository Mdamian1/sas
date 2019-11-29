<section id="sec-users">
    <div class="row no-gutters justify-content-center">
        <div class="users-fundo container">
            <ul>
                <?php foreach($users as $user): ?>
                <a class="users-link" href="user/<?php echo $user['id_pessoa'] ?>">
                    <div class="users-item mt-4">
                        <?php
                        for($i=0; $i<count($perfil);$i++) {
                            if ($perfil[$i]['id_perfil'] == $user['id_perfil']) {
                                $userPerfil = $perfil[$i]['descricao'];
                            }
                        }
                        ?>
                        <li>
                            <p class="users-name"><?php echo $user['nome'].' '.$user['sobrenome'] ?></p>
                            <p class="users-perfil"><?php echo $userPerfil ?></p>
                        </li>
                    </div>
                </a>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>