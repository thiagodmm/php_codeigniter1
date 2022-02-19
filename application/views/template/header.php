<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.11.4/af-2.3.7/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/sb-1.3.1/sp-1.4.0/datatables.min.css"/>

    <!-- Estilos do Site -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilos.css'); ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Projeto Crud PHP Codeigniter 3 | Bootstrap 5</title>
    </head>
    <body>
        <div class="container">
            <?php if ($this->session->userdata('estou_logado')) { ?>
                
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                <span class="navbar-brand mb-0 h1"><?php echo $this->session->userdata('logado')->nomeUsuario; ?> </span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>pessoa">Cadastrar Pessoa</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>usuario">Cadastrar Usuário</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>carro">Cadastrar Veículo</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>login/sair">Sair</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>

            <?php } ?>

