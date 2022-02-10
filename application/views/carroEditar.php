<!DOCTYPE html>
<html>
<head>
<html lang="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Editar Carro - Projeto CodeIgniter v1.0</title>
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../../assets/css/estilos.css" rel="stylesheet">
</head>
<body>

<div class="container bg1"> 
    <div class="row mt-5">
        <div class="col-md-12 p-4 text-center">

            <h1>Editar Carro</h1>
            <a href="<?php echo base_url() . 'carro'; ?>">Voltar</a><br>
            <br>
            <!-- Formulário -->

            <?php echo form_open('carro/atualizar'); ?>

            <label for:"cor">Cor:&nbsp;
            <input type="hidden" name="idCarro" required value="<?php echo $carro[0]->idCarro; ?>">
            <input type="color" name="cor" required value="<?php echo $carro[0]->cor; ?>">
            </label>
            <br><br>

            <label for:"marca">Marca:&nbsp;
            <input type="text" name="marca" required value="<?php echo $carro[0]->marca; ?>">
            </label>
            <br><br>

            <label for:"modelo">Modelo:&nbsp;
            <input type="text" name="modelo" required value="<?php echo $carro[0]->modelo; ?>">
            </label>
            <br><br>

            <label for:"placa">Placa:&nbsp;
            <input type="text" name="placa" required value="<?php echo $carro[0]->placa; ?>">
            </label>
            <br><br>

            <label for:"portas">Portas:&nbsp;
            <input type="number" name="portas" required value="<?php echo $carro[0]->portas; ?>">
            </label>
            <br><br>

            <label for:"idPessoa">Proprietários:&nbsp;

            <select name="idPessoa">
            <option>
                Selecione
            </option>
                <?php foreach ($pessoas as $pes): ?>
                    <option value="<?php echo $pes->idPessoa; ?>"
                    <?php if($pes->idPessoa == $carro[0]->idPessoa){
                        echo 'selected';} ?> >
                        <?php echo $pes->nome; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            
            </label>
            <br><br>

            <input type="submit" name="salvarCarro" value="SALVAR">

            <?php echo form_close(); ?>

        </div>
    </div>
</div>

</body>
</html>