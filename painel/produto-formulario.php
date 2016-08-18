<?php include "cabecalho.php"; ?>
<form action="adiciona-produto.php">
	<table class="table">
		<tr>
				<td>Nome Jogo:</td>
				<td><input class="form-control" type="text" name="nome"></td>
		</tr>
		<tr>
			<td>Link download:</td>
			<td><input class="form-control" type="text" name="linkdown"></td>
		</tr>
		<tr>
			<td>Link Imagem:</td>
			<td><input class="form-control" type="text" name="linkimg"></td>
		</tr>
	</table>
		<center>
			<input class="btn btn-primary form-control" type="submit" value="Cadastrar">
		</center>
<?php include "rodape.php"; ?>