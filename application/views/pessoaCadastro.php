<!DOCTYPE html>
<html>
<head>
<html lang="pt-br">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro de Pessoa - Projeto CodeIgniter v1.0</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/estilos.css" rel="stylesheet">
</head>
<body>

<div class="container bg1"> 
    <div class="row mt-5">

        <div class="col-md-12 p-4">
            <h1>Cadastro de Pessoa</h1>
            <br>
            <a href="<?php echo base_url() . 'home'; ?>">Voltar para Home</a><br>
        </div>

        <div class="col-md-4 p-4">
        <div class="jumbotron">
                <!-- Formulário de Cadastro Pessoa -->
                <?php echo form_open('pessoa/inserir'); ?>

                <label for:"nome">Nome:&nbsp;
                <input type="text" name="nome" required placeholder="Nome aqui...">
                </label>
                <br><br>
                <label for:"telefone">Telefone:&nbsp;
                <input type="tel" name="telefone" required placeholder="Telefone aqui...">
                </label>
                <br><br>
                <label for:"email">E-mail:&nbsp;
                <input type="email" name="email" required placeholder="E-mail aqui...">
                </label>
                <br><br>
                <label for:"endereco">Endereço:&nbsp;
                <input type="text" name="endereco" required placeholder="Endereço aqui...">
                </label>
                <br><br>

                <label for:"tpPessoa">Tipo de Pessoa:&nbsp;
                <input type="radio" name="tpPessoa" required value="Fisica"> Física&nbsp;
                <input type="radio" name="tpPessoa" required value="Juridica"> Jurídica
                </label>

                <br><br>
                <label for:"cpf">CPF:&nbsp;
                <input type="number" name="cpf" placeholder="CPF aqui...">
                </label>
                <br><br>
                <label for:"sexo">Sexo:&nbsp;
                <input type="radio" name="sexo" value="F"> Feminino&nbsp;
                <input type="radio" name="sexo" value="M"> Masculino
                </label>
                <br><br>

                <label for:"cnpj">CNPJ:&nbsp;
                <input type="number" name="cnpj" placeholder="CNPJ aqui...">
                </label>
                <br><br>
                <label for:"nomeFantasia">Nome Fantasia:&nbsp;
                <input type="text" name="nomeFantasia" placeholder="Nome Fantasia aqui...">
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

            <h4>Lista de Pessoas</h4>
            <br>

            <!-- Tabela que apresenta a listagem de pessoas -->
            <div class="table-responsive">
            <table class="table">
            <thead>
                <tr>
                <th>Nome</th><th>E-mail</th><th>Telefone</th><th>Tipo de Pessoa</th><th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pessoas as $pes): ?>
                    <tr>
                        <td><?php echo $pes->nome; ?></td>
                        <td><?php echo $pes->email; ?></td>
                        <td><?php echo $pes->telefone; ?></td>
                        <td>
                        <?php if(!is_null($pes->cpf)) {
                            echo 'Pessoa Física';
                        } else {
                            echo 'Pessoa Jurídica';
                        } ?>
                        </td>
                        <td>
                        <a href="<?php echo base_url() .
                            'pessoa/editar/' .
                            $pes->idPessoa; ?>">Editar</a>
                            &nbsp;|&nbsp;
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
</div>

</body>
</html>