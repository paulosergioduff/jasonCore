<?php
/*

Pequeno exemplo para autenficação com login

*/
session_start();
echo "<p>acesso permitido";
$_SESSION['status'] = "sessao_iniciada";
echo "<br>" . $_SESSION['login'];
$_SESSION['permissao'] = 'adm';
if (isset($_SESSION['permissao'])) {
				echo "<br>" . $_SESSION['permissao'];
}
echo "<br><a href='logar.php'>Logar</a><a href='logout.php'>  deslogar</a><a href='restrito.php'>  Restrito</a>";
?>
