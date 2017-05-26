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
$crud      = crud::getInstance(Conexao::getInstance());
/*  
 * Variáveis contendo os valores para serem inseridos no banco de dados  
 */
$dadosMenu = $crud->getAlltabela('menu'); // para todos da tabela
foreach ($dadosMenu as $reg):
                                $idMenu   = $reg->id;
                                $roleta   = $idMenu;
                                $nomeMenu = $reg->nome;
                                echo "<ur>" . $nomeMenu . " - ID:$idMenu<br>";
                                ############### LISTANDO OPÇÕES DO MENU  #####################
                                $dadosOpcoes = $crud->getAlltabela('opcoes'); // Seleciona todas as oppões de menu                 
                                foreach ($dadosOpcoes as $opc):
                                                                $conteudoOpcao = $opc->opcao;
                                                                $idOpcao       = $opc->menu;
                                                                if ($idMenu == $idOpcao) { // Verifica o código associado aquele menu. Se for o menu da exibição atual, ele exibe a saída. 
                                                                                                echo "<li>" . $conteudoOpcao . " pertencente à Menu$idOpcao </li><br>";
                                                                                                echo "<ul>Submenu<br><li>Subitem 1</li> <li>Subitem2</li></ul></u>";
                                                                }
                                endforeach;
#########################
                                
//echo "<br>fim do Menu$id<br></ur>";
endforeach;
?>