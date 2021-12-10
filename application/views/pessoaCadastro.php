<!DOCTYPE html>
<html>
<head>
<title>Cadastro de Pessoa - Projeto CodeIgniter v1.0</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/estilos.css" rel="stylesheet">
</head>
<body>

<div class="container bg1"> 
    <div class="row mt-5">
        <div class="col-md-12">
        <div class="jumbotron">
            <h1>Cadastro de Pessoa</h1>
            <h4>Lista de Pessoas</h4>
            <a href="<?php echo base_url(); ?>index.php">Voltar para Home</a>
        </div>
        
            <table>
            <thead>
                <tr>
                <th>Nome</th><th>E-mail</th><th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pessoas as $pes): ?>
                    <tr>
                        <td><?php echo $pes->nome; ?></td>
                        <td><?php echo $pes->email; ?></td>
                        <td><?php echo $pes->telefone; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>