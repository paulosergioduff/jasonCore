 <?php
/*  
 * Require nos scripts necessários  
 */
require_once "../control/config.php";
require_once "../control/controleCentral.php";
require_once "../control/validaEntradas.php";
require_once "../model/crud.class.php";
require_once "../view/viewsRetornos.php";
require_once('../model/token.php');
/*  
 * Atribui uma instância da classe crud   
 * e passa uma conexão como parâmetro  
 */
$crud  = crud::getInstance(Conexao::getInstance());
/*  
 * Variáveis contendo os valores para serem inseridos no banco de dados  
 */
$dados = $crud->getAlltabela($dbTabela); // para todos da tabela
if ($controleSelectTotal = true) {
        if ($controleSelectTotal != false) {
                echo '{"' . "dados" . '"' . ":[";
                foreach ($dados as $reg):
                        $id        = $reg->id;
                        $varchar1  = $reg->varchar1;
                        $varchar2 = $reg->varchar2;
                        retornaSelectTotal($id, $varchar1, $$varchar2); // Função que retorna visualmente na tela os dados
                endforeach;
                echo ' 
{
        "Id": "0",
        "Categoria": "00000",
        "Titulo": "000000"
      }


      ]}';
        }
}
?>