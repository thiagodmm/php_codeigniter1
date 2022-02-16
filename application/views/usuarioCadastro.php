<div class="container bg1"> 
    <div class="row mt-5">

        <div class="col-md-12 p-4">
            <h1>Cadastro de Novo Usuário</h1>
            <br>
            <a href="<?php echo base_url() . 'home'; ?>">Voltar para Home</a><br>
        </div>

        <div class="col-md-4 p-4">
            <div class="jumbotron">

            <?php echo form_open('usuario/inserir'); ?>
            <input type="text" required name="nomeUsuario" placeholder="Nome aqui..." />
            <br><br>
            <input type="text" required name="user" placeholder="User aqui..." />
            <br><br>
            <input type="password" required name="senha" minlength="6" placeholder="Senha aqui..." />
            <br><br>
            <input type="radio" required name="perfilAcesso" value="admin"/>Administrador 
            <input type="radio" required name="perfilAcesso" value="user" />Usuário
            <br><br>
            <input type="submit" value="Salvar"/>
            <input type="reset" value="Limpar"/>
        <?php echo form_close(); ?>

            </div>
        </div>

        <div class="col-md-8 p-4">

            <h4>Lista de Usuários</h4>
            <br>

            <!-- Tabela que apresenta a listagem de pessoas -->
            <div class="table-responsive">
            <table class="table" id="lista" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nome</th><th>user</th><th>Perfil Acesso</th><th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user->nomeUsuario; ?></td>
                        <td><?php echo $user->user; ?></td>
                        <td><?php echo $user->perfilAcesso; ?></td>
                        <td>
                            <a href="<?php echo base_url() . 
                                    'usuario/editar/' .
                                    $user->idusuario;?>">Editar</a> | 
                            <?php if($user->user != $this->session->userdata('logado')->user){ ?>        
                                <a href="<?php echo base_url() . 
                                        'usuario/excluir/' . 
                                        $user->idusuario; ?>">Deletar</a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
        </div>

    </div>
</div>