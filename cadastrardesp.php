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
<hr />
<section>
<article>
<h1>Cadastrar Despesas</h1>
<img src="icones/Cadastrar.png" />
	<form method="POST" action="<?php $PHP_SELF ?>" name="frmAddDesp">	
	Valor:  <input type="text" maxlength="50" size='50' name="valor" placeholder="R$ 00.00" /> <br /> 
	Tipo: 	<select name="tipo">
				<option value="Alimentos">Alimentos</option>
				<option value="Domicílio">Domicílio</option>
				<option value="Educação">Educação</option>
				<option value="Empréstimo">Empréstimo</option>
				<option value="Lazer">Lazer</option>
				<option value="Salário">Salário</option>
				<option value="Saúde">Saúde</option>
				<option value="Trabalho">Trabalho</option>
				<option value="Transporte">Transporte</option>
				<option value="Outros">Outros</option>
			</select> <br /> 
		Data:  <input type="date" maxlength="11" size='11' name="data"  /> <br /> 
		Descricao: <input type="text" maxlength="50" size='50' name="descricao"  required="true" /> <br />
		Despesa Fixa: <input type="checkbox" name="fixo" /> <br /> 
		
		<input type="submit" value="Gravar">
		<input type="reset" value="Limpar">
	</form>
<?php 
require 'conecta.php';
if (isset($_POST['descricao'])){
	$result = pg_query($conn, "INSERT INTO despesas (valor, tipo, data, descricao, fixo) 
	VALUES ('".$_POST['valor']."', '".$_POST['tipo']."', '".$_POST['data']."', '".$_POST['descricao']."', '".$_POST['fixo']."');");
	if (!$result) {
		echo "Ocorreu um erro!\n";
		exit;
	}
	else {echo "<script type='text/javascript'>alert('Cadastro Realizado!')</script>";}
}else {echo "<br />Preencha todos os campos!\n";}
?>
</article>
</section>
<footer>© Copyright 2021 - LeoTech Informática</footer>
</body>
</html>