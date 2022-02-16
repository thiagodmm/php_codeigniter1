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

                <div class="form-floating mb-3">
                <input type="text" name="nome" class="form-control" id="nomeInput" placeholder="Nome aqui...">
                <label for="nomeInput">Nome</label>
                </div>

                <div class="form-floating mb-3">
                <input type="tel" name="telefone" class="form-control" id="telefoneInput" placeholder="Telefone aqui...">
                <label for="telefoneInput">Telefone</label>
                </div>

                <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="emailInput" placeholder="E-mail aqui...">
                <label for="emailInput">E-mail</label>
                </div>

                <div class="form-floating mb-3">
                <input type="text" name="endereco" class="form-control" id="enderecoInput" placeholder="Endereço aqui...">
                <label for="enderecoInput">Endereço</label>
                </div>

                <br>

                <label for:"tpPessoa">Tipo de Pessoa:&nbsp;
                <input type="radio" name="tpPessoa" required value="Fisica"> Física&nbsp;
                <input type="radio" name="tpPessoa" required value="Juridica"> Jurídica
                </label>

                <br><br>

                <div class="form-floating mb-3">
                <input type="number" name="cpf" class="form-control" id="cpfInput" placeholder="CPF aqui...">
                <label for="cpfInput">CPF</label>
                </div>

                <br>

                <label for:"sexo">Sexo:&nbsp;
                <input type="radio" name="sexo" value="F"> Feminino&nbsp;
                <input type="radio" name="sexo" value="M"> Masculino
                </label>

                <br><br>

                <div class="form-floating mb-3">
                <input type="number" name="cnpj" class="form-control" id="cnpjInput" placeholder="CNPJ aqui...">
                <label for="cnpjInput">CNPJ</label>
                </div>

                <div class="form-floating mb-3">
                <input type="text" name="nomeFantasia" class="form-control" id="nomeFantasiaInput" placeholder="Nome Fantasia aqui...">
                <label for="nomeFantasiaInput">Nome Fantasia</label>
                </div>

                <input type="submit" name="salvarPF" value="SALVAR" class="btn btn-info">
                &nbsp;&nbsp;
                <input type="reset" name="limpar" value="LIMPAR" class="btn btn-secondary">

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
            <table class="table table-striped bgBranco" id="lista" class="display" style="width:100%">
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