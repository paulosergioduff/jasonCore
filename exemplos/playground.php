<?php error_reporting(0);
// Página para uso de testes (playground.php)
// includes necessárias para uso do exemplo
require_once "installJason.php";

$crud = crud::getInstance(Conexao::getInstance());
// Para testes, remova os comentários abaixo.
//$crud->update($login, $email, $senha, $valor1, $valor2, '10', $dbTabela);
//$crud->insert($login, $email, $senha, $valor1, $valor2, $tabela, $dbTabela);
//$crud->delete('1', $dbTabela);
//phpinfo();

/*  
 * Variáveis contendo os valores para serem inseridos no banco de dados  
 */
$dados = $crud->selecionaCampo($dbTabela);
if ($controleSelect != false) {
                echo '{"' . "dados" . '"' . ":[";
                foreach ($dados as $reg):
                                
                                $filtro = $reg->tabela;
                                	if ($filtro == 'filtro') {
                                		echo $id        = $reg->id . "<br>";
                                echo $varchar1  = $reg->varchar1 . "<br>";
                                echo $varchar2 = $reg->varchar2 . "<br>";
                                	}
                                
                endforeach;
                echo ' 
{
        "Id": "0",
        "Categoria": "00000",
        "Titulo": "000000"
      }


      ]}';
}
?>