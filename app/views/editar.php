
<?php
        require_once 'header.php';
        use core\Router;
        use app\models\Crud;
        use app\controllers\Site;
?>
    <div class="row container">
        <div class="col s12">
            <h3 class="light">
                PAGINA EDITAR
            </h3>
        </div>
        <div class="col s12">
        <form action="?router=Site/editar/" method="post">
                <?php foreach($editarForm as $registro):?>
                    <input type="hidden" name="id" value="<?php echo $registro['id']?>">
                        <div class="input-field col s12 m6">
                            <input type="text" name="nome" id="nome" value="<?php echo $registro['nome']?>" required>
                            <label for="nome">Digite seu nome</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input type="email" name="email" id="email" value="<?php echo $registro['email']?>" required>
                            <label for="nome">Digite seu email</label>
                        </div>
                
                        <div class="input-field col s12">
                            <input type="submit" value="enviar" class="btn-small" required>
                            <input type="reset" value="limpar" class="btn-small red">
                        </div>
                <?php endforeach;?>
            </form>
        </div>
    </div>
<?php
    require_once 'footer.php';
?>