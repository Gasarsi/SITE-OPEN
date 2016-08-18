<?php

function listaProdutos1($conexao) {
	$produtos = array();
	$resultado = mysqli_query($conexao, "SELECT * FROM produtos order by id desc");
	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}

function listaProdutos($conexao) {
	$produtos = array();
	$resultado = mysqli_query($conexao, "SELECT * FROM produtos order by id desc LIMIT 5");
	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto($conexao,$nome, $linkdown, $linkimg){
	$query = "insert into produtos (nome, linkdown, linkimg) values ('{$nome}', '{$linkdown}', '{$linkimg}')";
	return mysqli_query($conexao, $query);
}

function paginaProduto($conexao, $id) {
	$resultado = mysqli_query($conexao, "SELECT * FROM produtos where id = " . $id);
	$produto = mysqli_fetch_assoc($resultado);
	return $produto;
}
