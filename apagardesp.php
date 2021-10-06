<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="author" content="Leonardo Lopes da Luz" >
<link rel="shortcut icon" href="icones/favicon.png" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MyCash</title>
</head>

<body class="w3-display-topmiddle w3-mobile">
<h1><img src="icones/favicon.png" width="50" height="50" alt="Logotipo">MyCash</h1>
<hr>
<nav>
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="receitas.php">Receitas</a></li>
      		<li><a href="despesas.php">Despesas</a></li>
			<li><a href="sobre.php">Sobre Nós</a></li>
		</ul>
</nav>
<hr><section>
<article>
<h1>Apagar Despesas</h1>
<img src="icones/Excluir.png" />
<?php
require 'conecta.php';

     $id = $_GET["id"];
     $deleta = pg_query($conn,"DELETE FROM despesas WHERE id={$id}");

	if($deleta):
		echo "<script type='text/javascript'>alert('Despesa Excluida com sucesso!');window.location='despesas.php';</script>";
	else:
	 	echo "<script type='text/javascript'>alert('Infelizmente não foi possível excluir!');window.location='despesas.php';</script>";
	endif;
?>
</article>
</section>
<footer>© Copyright 2021 - LeoTech Informática</footer>
</body>
</html>