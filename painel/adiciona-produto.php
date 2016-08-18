<?php include "cabecalho.php";
include "conecta.php"; 
include "banco-produto.php"; 


$nome = $_GET{'nome'};
$linkdown = $_GET{'linkdown'};
$linkimg = $_GET{'linkimg'};



if(insereProduto($conexao ,$nome, $linkdown, $linkimg)) { ?>
	<p class="alert-success"> Jogo <?= $nome ?>, adicionado com sucesso!</p>
	<?php } else { ?>
	<p class="alert-danger"> O jogo  <?= $nome ?> nao foi adicionado com sucesso!</p>
<?php
}
?>

<?php include "rodape.php"; ?>