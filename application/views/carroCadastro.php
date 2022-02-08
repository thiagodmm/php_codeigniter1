<!DOCTYPE html>
<html>
<head>
<title>Cadastro de Carro - Projeto CodeIgniter v1.0</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/estilos.css" rel="stylesheet">
</head>
<body>

<div class="container bg1"> 
    <div class="row mt-5">
    
    <div class="col-md-12 p-4">
            <h1>Cadastro de Carro</h1>
            <br>
            <a href="<?php echo base_url() . 'home'; ?>">Voltar para Home</a><br>
    </div>

    <div class="col-md-4 p-4">
        <div class="jumbotron">

        <!-- Formulário de Cadastro Pessoa -->
        <?php echo form_open('carro/inserir'); ?>

        <label for:"cor">Cor:&nbsp;
            <input type="color" name="cor" required placeholder="Cor aqui...">
            </label>
            <br><br>
        <label for:"marca">Marca:&nbsp;
            <input type="text" name="marca" required placeholder="Marca aqui...">
            </label>
            <br><br>
        <label for:"modelo">Modelo:&nbsp;
            <input type="text" name="modelo" required placeholder="Modelo aqui...">
            </label>
            <br><br>
        <label for:"placa">Placa:&nbsp;
            <input type="text" name="placa" required placeholder="Placa aqui...">
            </label>
            <br><br>
        <label for:"portas">Portas:&nbsp;
            <input type="text" name="portas" required placeholder="Portas aqui...">
            </label>
            <br><br>
        <label for:"idPessoa">Id Pessoa:&nbsp;
            <input type="text" name="idPessoa" required placeholder="Id Pessoa aqui...">
            </label>
            <br><br>

        <input type="submit" name="salvarPF" value="SALVAR">
        &nbsp;&nbsp;
        <input type="reset" name="limpar" value="LIMPAR">

        <?php echo form_close(); ?>
        <br>
        <br>

        </div>
    </div>

    <div class="col-md-8 p-4">
    
    <h4>Lista de Carros</h4>
    <br>
    <!-- Tabela que apresenta a listagem de carros -->
    <table class="table table-responsive">
        <thead>
            <tr>
            <th>Cor</th><th>Marca</th><th>Modelo</th><th>Placa</th><th>Portas</th><th>Id Pessoa</th><th>Funções</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($carros as $car): ?>
                <tr>
                <td><input type="color" name="cor" disabled value="<?php echo $car->cor; ?>"></td>
                <td><?php echo $car->marca; ?></td>
                <td><?php echo $car->modelo; ?></td>
                <td><?php echo $car->placa; ?></td>
                <td><?php echo $car->portas; ?></td>
                <td><?php echo $car->idPessoa; ?></td>

                <td>
                    <a href="<?php echo base_url() .
                        'carro/editar/' .
                        $car->idCarro; ?>">Editar</a>
                        &nbsp;|&nbsp;
                        <a href="<?php echo base_url() .
                        'carro/excluir/' .
                        $car->idCarro; ?>">Excluir</a>
                </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    
    </table>

    </div>

    </div>
</div>

</body>
</html>