 <?php
/*  
 * Require nos scripts necessários  
 */
require_once "../control/config.php";
require_once "../control/controleCentral.php";
require_once "../control/validaEntradas.php";
require_once "../model/crud.class.php";
require_once "../view/viewsRetornos.php";
/*  
 * Atribui uma instância da classe crud   
 * e passa uma conexão como parâmetro  
 */
$crud      = crud::getInstance(Conexao::getInstance());
/*  
 * Variáveis contendo os valores para serem inseridos no banco de dados  
 */
$dados = $crud->getAlltabela('menu'); // para todos da tabela
  if ($controleSelectTotal = true) {
     if ($controleSelectTotal != false) {
       foreach ($dados as $reg): 
       $id = $reg->id ;
       

                        $menus = $crud->selecionaId("$reg->id", 'menu'); 
                
                                foreach ($menus as $regMenu): 
                                 echo $tagInicio = $regMenu->tagInicio;
                                 echo $nome = $regMenu->nome ;
                                 echo $tagFim = $regMenu->tagFim;
                                 endforeach;                                    
       
       endforeach; 
        } 
  }
 ?>
