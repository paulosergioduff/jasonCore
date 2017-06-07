<?php
// Página para uso de testes (playground.php)
// includes necessárias para uso do exemplo
require_once "installJason.php";

$crud = crud::getInstance(Conexao::getInstance());
// Para testes, remova os comentários abaixo.
//$crud->update($login, $email, $senha, $valor1, $valor2, '10', $dbTabela);
//$crud->insert($login, $email, $senha, $valor1, $valor2, $tabela, $dbTabela);
//$crud->delete('1', $dbTabela);
//phpinfo();
?>