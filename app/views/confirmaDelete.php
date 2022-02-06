
<?php
        require_once 'header.php';
        use core\Router;
        use app\models\Crud;
        use app\controllers\Site;
?>
    <div class="row container">
        <div class="col s12">
            <h3 class="light">
                PAGINA CONFIRMA DELETAR
            </h3>
        </div>
        <p>
            <a href="?router=Site/deletar/&id=<?php echo $id?>" class="flow-text light red-text">SIM</a>
            <a href="?router=site/consulta/" class="flow-text light">NÃO</a>
        </p>

    </div>
<?php
    require_once 'footer.php';
?>