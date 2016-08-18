<?php include "painel/conecta.php";
include "painel/banco-produto.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from kinghabbo.com.br/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jun 2016 22:22:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="BR-PT">
	<meta name="robots" content="index">
	<meta name="author" content="WebNity"/>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title>KingHabbo - Seu reinado começa aqui!</title>
	<link href="media/css/fonte.css" rel="stylesheet" type="text/css">
	<link href="media/css/site.css" rel="stylesheet" type="text/css">
	<link href="media/css/menu.html" rel="stylesheet" type="text/css">
	<script src="media/javascript/jquery.min.js"></script>
	<script src="media/javascript/jquery.cookie.js"></script>
	<script src="media/javascript/jquery.cycle.js"></script>
	<script src="media/javascript/jquery-ui.min.js"></script>
	<script src="media/javascript/jquery.countdown.js"></script>
	<script src="media/javascript/jquery.nicescroll.min.js"></script>
	<script src="media/javascript/site.js"></script>
	<script>
		$(document).ready(function(){
    		$(".conteudo").niceScroll({background:"#E8E8E8",cursorcolor:"#3399CC",cursoropacitymax:"1",cursorborder:"none",cursorwidth:"10px",top:"50px"});
			$(".contador1").countdown("2016/07/16", function(event){
				$(this).text(
					event.strftime('%D')
				);
			});
			$(".contador2").countdown("2016/07/16", function(event){
				$(this).text(
					event.strftime('%H')
				);
			});
			$(".contador3").countdown("2016/07/16", function(event){
				$(this).text(
					event.strftime('%M')
				);
			});
			$(".contador4").countdown("2016/07/16", function(event){
				$(this).text(
					event.strftime('%S')
				);
			});
		});
	</script>
</head>
<body>
	
		
<div id="modal">
	<div id="based-noticia">
		<div id="cima-noticia">
			<div class="autor"></div>
			<div class="horario"></div>
			<div class="titulo"></div>
			<div id="fechar"></div>
		</div>
		<div class="conteudo">
			
		</div>
	</div>
</div>
<div id="container">
	
	<div id="logotipo"></div><br><br><br><br><br>
		<div id="menu">
		</div>	
<!--NOTICIAS-->	
	<h1>Ultimos Jogos lançados</h1>
	
	<div id="area-noticias">
		
		<div id="area-noticia">
			
			<?php rsort( $produto ); ?>
			<?php

			$produtos = listaProdutos($conexao);
			
			
			foreach($produtos as $produto)  :
			?>
		<div id="based-noticia" rel="1">
			<div id="imagem-noticia" style="background-image:url(../i52.tinypic.com/xohxy9.png)">
				<div id="black">
					<div class="titulo"><?= $produto['nome']?></div>
				</div>
			</div>
			<img src="<?= $produto['linkimg']?>" alt="HTML5 Icon" style="width:199px;height:300px;">
		</div>
		
		<?php	
		endforeach
		?>
		
	</div>
	</div>
	<!--NOTICIAS-->
	<h1>TODOS OS JOGOS DO A AO Z</h1>
	
	<div id="area-noticias">
		
		<div id="area-noticia">
			
			<?php rsort( $produto ); ?>
			<?php

			$produtos = listaProdutos1($conexao);
			
			
			foreach($produtos as $produto)  :
			?>
		<div id="based-noticia" rel="1">
			<div id="imagem-noticia" style="background-image:url(../i52.tinypic.com/xohxy9.png)">
				<div id="black">
					<div class="titulo"><?= $produto['nome']?></div>
				</div>
			</div>
			<img src="<?= $produto['linkimg']?>" alt="HTML5 Icon" style="width:199px;height:300px;">
		</div>
		
		<?php	
		endforeach
		?>
</div>
</body>

</html>
