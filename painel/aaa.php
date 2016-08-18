<?php include "cabecalho.php"; 
include "conecta.php";
include "banco-produto.php";?>
<table>
<?php
$produto = listaProdutos("nome","linkimg");?>
<?php rsort( $produto ); ?>
</table>