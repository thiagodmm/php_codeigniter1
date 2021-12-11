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

        <div class="col-md-12 p-5">
            <h1>Cadastro de Pessoa</h1>
            <br>
            <a href="<?php echo base_url(); ?>index.php">Voltar para Home</a><br>
        </div>

        <div class="col-md-5 p-5">
        <div class="jumbotron">
                <!-- Formulário de Cadastro Pessoa -->
                <?php echo form_open('pessoa/inserir'); ?>

                <label for:"nome">Nome:<br>
                <input type="text" name="nome" required placeholder="Nome aqui...">
                </label>
                <br><br>
                <label for:"telefone">Telefone:<br>
                <input type="tel" name="telefone" required placeholder="Telefone aqui...">
                </label>
                <br><br>
                <label for:"email">E-mail:<br>
                <input type="email" name="email" required placeholder="E-mail aqui...">
                </label>
                <br><br>
                <label for:"endereco">Endereço:<br>
                <input type="text" name="endereco" required placeholder="Endereço aqui...">
                </label>
                <br><br>

                <label for:"tpPessoa">Tipo de Pessoa:<br>
                <input type="radio" name="tpPessoa" required value="Fisica"> Física<br>
                <input type="radio" name="tpPessoa" required value="Juridica"> Jurídica
                </label>

                <br><br>
                <label for:"cpf">CPF:<br>
                <input type="number" name="cpf" placeholder="CPF aqui...">
                </label>
                <br><br>
                <label for:"sexo">Sexo:<br>
                <input type="radio" name="sexo" value="F"> Feminino<br>
                <input type="radio" name="sexo" value="M"> Masculino
                </label>
                <br><br>

                <label for:"cnpj">CNPJ:<br>
                <input type="number" name="cnpj" placeholder="CNPJ aqui...">
                </label>
                <br><br>
                <label for:"nomeFantasia">Nome Fantasia:<br>
                <input type="text" name="nomeFantasia" placeholder="Nome Fantasia aqui...">
                </label>
                <br><br>

                <input type="submit" name="salvarPF" value="SALVAR">
                <br><br>
                <input type="reset" name="limpar" value="LIMPAR">

                <?php echo form_close(); ?>
                <br>
                <br>

        </div>

        </div>

        <div class="col-md-7 p-5">

            <h4>Lista de Pessoas</h4>
            <br>

            <!-- Tabela que apresenta a listagem de pessoas -->
            <table class="table table-responsive">
            <thead>
                <tr>
                <th>Nome</th><th>E-mail</th><th>Telefone</th><th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pessoas as $pes): ?>
                    <tr>
                        <td><?php echo $pes->nome; ?></td>
                        <td><?php echo $pes->email; ?></td>
                        <td><?php echo $pes->telefone; ?></td>
                        <td>
                            <a href="<?php echo base_url() .
                            'pessoa/excluir/' .
                            $pes->idPessoa; ?>">Excluir</a>
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