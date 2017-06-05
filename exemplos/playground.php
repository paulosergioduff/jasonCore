<?php
// Página para uso de testes (playground.php)
// includes necessárias para uso do exemplo
require_once "../control/config.php";
require_once "../control/controleCentral.php";
require_once "../control/validaEntradas.php";
require_once "../model/crud.class.php";
require_once "../view/viewsRetornos.php";
$crud = crud::getInstance(Conexao::getInstance());
// Para testes, remova os comentários abaixo.
//$crud->update($login, $email, $senha, $valor1, $valor2, '10', $dbTabela);
$crud->insert($login, $email, $senha, $valor1, $valor2, $tabela, $dbTabela);
//$crud->delete('1', $dbTabela);
//phpinfo();
?>