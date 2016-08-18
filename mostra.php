<?php 
 ini_set("display_errors",true);
 ini_set("display_startup_erros",1);
 error_reporting(E_ALL && E_NOTICE);
 error_reporting( E_ALL | E_STRICT ); // PHP 5.3
 error_reporting( E_ALL ); // Todas as outras versões 
?>
<?php
include "painel/conecta.php";
include "painel/banco-produto.php";?>

<?php

if (!isset($_GET["id"]) || empty($_GET["id"] )) {
   $id = 0;
} else {
  $id = $_GET["id"];
}

echo $id;

$produto = paginaProduto($conexao,$id);
$produto["nome"];
?>
<?= $produto['nome']?>
	
	
	