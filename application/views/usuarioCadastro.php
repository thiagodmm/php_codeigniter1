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

            <div class="form-floating mb-3">
                <input type="text" required name="nomeUsuario" class="form-control" id="nomeInput" placeholder="Nome aqui...">
                <label for="nomeInput">Nome</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" required name="user" class="form-control" id="userInput" placeholder="Username aqui...">
                <label for="userInput">Username</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" required name="senha" class="form-control" id="senhaInput" placeholder="Senha aqui...">
                <label for="senhaInput">Senha</label>
            </div>
            
            <br>

            <input type="radio" required name="perfilAcesso" value="admin"/> Administrador<br>
            <br> 
            <input type="radio" required name="perfilAcesso" value="user" /> Usuário<br>
            <br>
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
            <table class="table table-striped bgBranco" id="lista" class="display" style="width:100%">
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