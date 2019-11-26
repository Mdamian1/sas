<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/newUser.css'); ?>">
    <?php if ($this->session->perfil == '1'): ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dash.css'); ?>">
    <?php endif; ?>
    <?php if ($this->session->perfil == '2'): ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/client-dash.css'); ?>">
    <?php endif; ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            LOGO IMG
        </a>    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse align-items-right" id="navbarNav">
            <ul class="navbar-nav">
                <?php if($this->session->perfil == '1'): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/users') ?>">USUÁRIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/novo') ?>">CADASTRAR USUÁRIO</a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('login/sair') ?>">SAIR</a>
                </li>
            </ul>
        </div>
        <div id="dash-name">
            <p>Bem vindo <strong><?php echo $this->session->nome ?></strong>!</p>
        </div>
    </nav>
