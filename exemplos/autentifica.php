 <?php
//error_reporting(0);

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
$crud = crud::getInstance(Conexao::getInstance());
/*  
 * Variáveis contendo os valores para serem inseridos no banco de dados  
 */
session_start();
// Funções para reagir a autenficação
function auntentificado() // Função que permite criação de regra de negócio para acesso do microframework com autenficação
{
        echo "<p>acesso permitido";
       
       }
function acessoNegado() // Permite criar algoritimo para negar a autenficação.
{
        echo "<p>acesso negado";
}
$recebeLogin = "root";
$recebeSenha = "1234";
// Selecionando dados do banco de dados 
$dados       = $crud->selecionaId('1', 'membros'); // Exibe resultado da tabela membros
if ($controleSelect != false) {
        foreach ($dados as $reg):
                $id       = $reg->id;
                $varchar1 = $reg->login;
                $varchar2 = $reg->senha;
                $varchar3 = $reg->permissao;
                echo $varchar1 . "<br>";
                echo $varchar2 . "<br>";;
                echo $varchar3 . "<br>";;
        endforeach;
        // regra de negócios para autenficação
        if ($recebeLogin == $varchar1 and $recebeSenha == $varchar2) {
                auntentificado();
        } else {
                acessoNegado();
        }
}
?>


   