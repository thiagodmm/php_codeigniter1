<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

        <!-- Estilos do Site -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <title>Projeto CI3 + BS4</title>
    </head>
    <body>
        <div class="container">
            <?php if ($this->session->userdata('estou_logado')) { ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-brand mb-0 h1"><?php echo $this->session->userdata('logado')->nomeUsuario; ?> </span>    
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <span class="navbar-brand mb-0 h1"><?php echo $this->session->userdata('logado')->nomeUsuario; ?> </span>    
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>login/sair">Sair</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>pessoa">Pessoa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>usuario">Usuário</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>carro">Carro</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php } ?>

