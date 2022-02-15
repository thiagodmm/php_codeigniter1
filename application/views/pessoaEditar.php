<div class="container bg1"> 
    <div class="row mt-5">
        <div class="col-md-12 p-4 text-center">

            <h1>Editar Pessoa</h1>
            <a href="<?php echo base_url() . 'pessoa'; ?>">Voltar</a>

            <!-- Formulário -->

            <?php echo form_open('pessoa/atualizar'); ?>

            <label for:"nome">Nome:&nbsp;
            <input type="hidden" name="idPessoa" required value="<?php echo $pessoa[0]->idPessoa; ?>">
            <input type="text" name="nome" required value="<?php echo $pessoa[0]->nome; ?>">
            </label>
            <br><br>
            <label for:"telefone">Telefone:&nbsp;
            <input type="tel" name="telefone" required value="<?php echo $pessoa[0]->telefone; ?>">
            </label>
            <br><br>
            <label for:"email">E-mail:&nbsp;
            <input type="email" name="email" required value="<?php echo $pessoa[0]->email; ?>">
            </label>
            <br><br>
            <label for:"endereco">Endereço:&nbsp;
            <input type="text" name="endereco" required value="<?php echo $pessoa[0]->endereco; ?>">
            </label>
            <br><br>

            <label for:"tpPessoa">Tipo de Pessoa:&nbsp;
            <input type="radio" name="tpPessoa" required value="Fisica"
            <?php if(!is_null($pessoa[0]->cpf)){ echo 'checked'; } ?>
            <?php if(!is_null($pessoa[0]->cnpj)){ echo 'disabled'; } ?>/> Física&nbsp;
            <input type="radio" name="tpPessoa" required value="Juridica"
            <?php if(!is_null($pessoa[0]->cnpj)){ echo 'checked'; } ?>
            <?php if(!is_null($pessoa[0]->cpf)){ echo 'disabled'; } ?>/> Jurídica
            </label>

            <br><br>
            <label for:"cpf">CPF:&nbsp;
            <input type="number" name="cpf" value="<?php echo $pessoa[0]->cpf; ?>"
                <?php if(!is_null($pessoa[0]->cnpj)){ echo 'disabled'; } ?>/>
            </label>
            <br><br>
            <label for:"sexo">Sexo:&nbsp;
            <input type="radio" name="sexo" value="F"
            <?php if($pessoa[0]->sexo == 'F'){ echo 'checked'; } ?>
            <?php if(!is_null($pessoa[0]->cnpj)){ echo 'disabled'; } ?> /> Feminino&nbsp;
            <input type="radio" name="sexo" value="M"
            <?php if($pessoa[0]->sexo == 'M'){ echo 'checked'; } ?>
            <?php if(!is_null($pessoa[0]->cnpj)){ echo 'disabled'; } ?> /> Masculino
            </label>
            <br><br>

            <label for:"cnpj">CNPJ:&nbsp;
            <input type="number" name="cnpj" value="<?php echo $pessoa[0]->cnpj; ?>"
            <?php if(!is_null($pessoa[0]->cpf)){ echo 'disabled'; } ?> />
            </label>
            <br><br>
            <label for:"nomeFantasia">Nome Fantasia:&nbsp;
            <input type="text" name="nomeFantasia" value="<?php echo $pessoa[0]->nomeFantasia; ?>"
            <?php if(!is_null($pessoa[0]->cpf)){ echo 'disabled'; } ?> />
            </label>
            <br><br>

            <input type="submit" name="salvarPF" value="SALVAR">
            &nbsp;&nbsp;
            <!--
                <input type="reset" name="limpar" value="LIMPAR">
            -->

            <?php echo form_close(); ?>

            </div>
        </div>
    </div>