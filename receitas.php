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

<body class="w3-display-topmiddle w3-responsive">
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
<hr>
<section>
<article>
<h1>Listar Receitas</h1>
<div style="display: flex; justify-content: left;">
<a href="pesquisarec.php">
  <figure>
    <img src="icones/Procurar.png" />
    <figcaption>Pesquisar</figcaption>
  </figure>
</a>
<a href="cadastrarec.php">
  <figure>
    <img src="icones/Cadastrar.png" />
    <figcaption>Novo</figcaption>
  </figure>
</a>
</div>
<?php 
require 'conecta.php';
require 'funcoes.php';

$result = pg_query($conn, "SELECT id, valor, tipo, data, descricao, fixo FROM receitas ORDER BY id");
if (!$result) {
    echo "Ocorreu um erro!\n";
    exit;
}
echo "<br />";
while ($row = pg_fetch_array($result)) 
{	echo "
  <div class='w3-panel w3-border-left w3-border-blue'>
  ID: ".$row["id"]."
  | Valor: ".$row["valor"]."
  | Tipo: ".$row["tipo"]."
  | Data: ".$row["data"]."
  | Descricao: ".$row["descricao"]."
  | Fixo: ".$row["fixo"]."<br />  
<a href='alterarec.php?id=".$row['id']."'><img src='icones/Alterar.png' alt='Alterar' width='35' heigth='35' />Alterar</a>
<a href='apagarec.php?id=".$row['id']."'><img src='icones/Excluir.png' alt='Excluir' width='35' heigth='35' />Excluir</a>
</div><br />"; 
}
?>
</article>
</section>
<footer>© Copyright 2021 - LeoTech Informática</footer>
</body>
</html>