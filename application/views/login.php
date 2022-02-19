<div class="container bg1"> 
    <div class="row mt-5">
        <div class="col-md-12 p-5">
            <div class="jumbotron">

            <div class="row mt-1 mb-5">
                <div class="col-md-12 text-center">
                <img src="<?php echo base_url('assets/img/logo_v1.png'); ?>" class="image image-responsive logoDesktop">
                <img src="<?php echo base_url('assets/img/logo_v2.png'); ?>" class="image image-responsive logoMobile">
                </div>
            </div>

                <div class="card loginCard">
                    <div class="card-header">
                        <h3>Login</h3></div>
                    <div class="card-body">
                        <?php echo form_open('login/autenticar'); ?>
                        <div class="form-group">
                        <label for="user">Usuário</label>
                        <input class="form-control" type="text" id="user" name="user" required>
                        </div>
                        <div class="form-group">
                        <label for="senha">Senha</label>
                        <input class="form-control" type="password" id="senha" name="senha" required>
                        </div>
                        <br>
                        <input class="btn btn-info mb-2" type="submit" value="Logar"/>
                        <input class="btn btn-secondary mb-2" type="reset" value="Limpar"/>
                        <?php form_close(); ?></div>
                    <div class="card-footer">
                        <p><small>Lorem lorem ipsum ipsum.</small></p></div>
                </div>
            
            </div>
        </div>
    </div>
</div>