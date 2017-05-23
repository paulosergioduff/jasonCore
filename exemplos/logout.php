<?php
/*

Pequena demonstração de logoff usando sesssões.

*/
session_start();
unset($_SESSION['status']);
echo "você foi deslogado!<br>";
echo "<br><a href='logar.php'>Logar</a><a href='logout.php'>  deslogar</a><a href='restrito.php'>  Restrito</a>";
?>
