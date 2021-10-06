<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="author" content="Leonardo Lopes da Luz" >
<link rel="shortcut icon" href="icones/favicon.png" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/w3.css">
<script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MyCash</title>
</head>

<body class="w3-display-topmiddle w3-mobile">
<h1>MyCash</h1>
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
<h1>Listar Despesas</h1>
<div style="display: flex; justify-content: left;">
<a href="pesquisadesp.php">
  <figure>
    <img src="icones/Procurar.png" alt="Pesquisar" />
    <figcaption>Pesquisar</figcaption>
  </figure>
</a>
<a href="cadastrardesp.php">
  <figure>
    <img src="icones/Cadastrar.png" alt="Novo" /> 
    <figcaption>Novo</figcaption>
  </figure>
</a>
</div>
<?php 
require 'conecta.php';
require 'funcoes.php';

$result = pg_query($conn, "SELECT id, valor, tipo, data, descricao, fixo FROM despesas ORDER BY id");
if (!$result) {
    echo "Ocorreu um erro!\n";
    exit;
}
echo "<div class='container_tabela'><table class='w3-table-all w3-bordered  rTable'>";
echo "
<thead>
  <tr>
      <th colspan='2'>Ações:</th>
      <th>ID</th>
      <th>Valor</th>
      <th>Tipo</th>
      <th>Data</th>
      <th>Descricao</th>
      <th>Fixo</th>
  </tr>
</thead>";
      
while ($row = pg_fetch_array($result)) 
{
	echo "<tbody><tr class='w3-hover-blue'>
  <td><a href='alterardesp.php?id=".$row['id']."'><img src='icones/Alterar.png' alt='Alterar' width='35' heigth='35' />Alterar</a></td>
  <td><a href='apagardesp.php?id=".$row['id']."'><img src='icones/Excluir.png' alt='Excluir' width='35' heigth='35' />Excluir</a></td>
  <td>".$row["id"]."</td>
  <td>".$row["valor"]."</td>
  <td>".$row["tipo"]."</td>
  <td>".$row["data"]."</td>
  <td>".$row["descricao"]."</td>
  <td>".$row["fixo"]."</td>
  </tr></tbody>"; 
}
echo "</table></div>";
?>
</article>
</section>
<footer>© Copyright 2021 - LeoTech Informática</footer>
</body>
</html>