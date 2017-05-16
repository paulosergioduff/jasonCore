<?php

/*

Estas entradas incentivam o cuidado com a segurança com ataques comuns como XSS e SQL injection.

*/

session_start();

$_SESSION['padrao'] = 'mundo';

$login = htmlspecialchars(addslashes('FinalnovffoUsuarioFiltrado'));  
$email  = htmlspecialchars(addslashes('novoemail@gmailc.om'));  
$senha   = htmlspecialchars(addslashes('123456789')); // usando bcrypt
$tabela = htmlspecialchars(addslashes('usuario2')); 
$valor1 = htmlspecialchars(addslashes('mais1@mail.com')); ;
$valor2 = htmlspecialchars(addslashes('valor 2')); 

$dbTabela = 'tabela';  // Indica ao CRUD, que tabela sofrerá alteração na query


   ?>