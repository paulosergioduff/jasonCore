<?php

/*

Estas entradas incentivam o cuidado com a segurança com ataques comuns como XSS e SQL injection.

*/

session_start();

$_SESSION['padrao'] = 'mundo';

$login = htmlspecialchars(addslashes('kkkkandoNovoDadoInserido'));  
$email  = htmlspecialchars(addslashes('kkkil@gmailc.om'));  
$senha   = htmlspecialchars(addslashes('kkk6789')); // usando bcrypt
$tabela = htmlspecialchars(addslashes('kkk2usuario2')); 
$valor1 = htmlspecialchars(addslashes('kkkSmais1@mail.com')); ;
$valor2 = htmlspecialchars(addslashes('kkkkkalor')); 

$dbTabela = 'cadastro';  // Indica ao CRUD, que tabela sofrerá alteração na query


   ?>