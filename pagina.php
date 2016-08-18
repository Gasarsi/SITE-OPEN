<?php include "painel/conecta.php";
include "painel/banco-produto.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from kinghabbo.com.br/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jun 2016 22:22:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<link href="painel/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>JOGOS</h1>
<table class="table">
	<?php rsort( $produto ); ?>
	<?php 
	$produtos = listaProdutos1($conexao);
	foreach($produtos as $produto) : ?>
		<tr>
			<td><a href='mostra.php?id=<?=$produto["id"]?>'><?= $produto["nome"]?></a></td>
		</tr>
	<?php endforeach?>
</table>
</body>

</html>
