 <?php
error_reporting(0);

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
$crud  = crud::getInstance(Conexao::getInstance());
/*  
 * Variáveis contendo os valores para serem inseridos no banco de dados  
 */
//$crud->delete(17);
$dados = $crud->selecionaId('10', $dbTabela);
if ($controleSelect != false) {
        //echo '{"'."dados".'"'.":[";
        foreach ($dados as $reg):
                $id       = $reg->id;
                $varchar1 = $reg->varchar1;
                $varchar2 = $reg->varchar2;
                $template = $varchar1 . "html";
                if (file_exists("../include/$varchar1.html")) { // Essas includes facilitam a criação de futuros CMS com templates.
                        include "../include/$varchar1.html";
                }                        
                echo $varchar1;
        //retornaSelecaoPorId('10', $varchar1, $$varchar2);
        endforeach;
       
}
?>


   