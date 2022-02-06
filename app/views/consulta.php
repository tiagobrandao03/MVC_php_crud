
<?php
        require_once 'header.php';
        use core\Router;
        use app\models\Crud;
        use app\controllers\Site;
?>
    <div class="row container">
        <div class="col s12">
            <h3 class="light">
                PAGINA CONSULTA
            </h3>
        </div>
        <div class="col s12">
          <table>
              <tr>
                  <th>nome</th>
                  <th>email</th>
                  <th>ações</th>
              </tr>
              <?php
                foreach($consulta as $registro):?>
              <tr>
                  <td><?php echo $registro['nome']?></td>
                  <td><?php echo $registro['email']?></td>
                  <td><a href="?router=Site/editar/&id=<?php echo base64_encode($registro['id'])?>">Editar</a>
                      <a href="?router=Site/confirmaDelete/&id=<?php echo base64_encode($registro['id'])?>" class="red.text">Deletar</a></td>
                      
              </tr>
              <?php endforeach;?>
            
          </table>
        </div>
    </div>
<?php
    require_once 'footer.php';
?>