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
<hr />
<section>
<article>
<h1>Alterar Receitas</h1>
<img src="icones/Alterar.png" />
<?php 
require 'conecta.php';
$id = $_GET["id"];
$result = pg_query($conn, "SELECT * FROM receitas WHERE id={$id}");
$row = pg_fetch_array($result)

?>
<form method="POST" action="<?php $PHP_SELF ?>" name="frmAlterarRec">
<?php 
echo "	ID: <input type='text' maxlength='10' readonly='readonly'  name='id' value='".$row['id']."'/><br />";
echo "	Valor:  <input type='text' maxlength='50' size='50' name='valor' value='".$row['valor']."'/><br />";
?>
Tipo: <select name='tipo'>
<?php echo "<option value='".$row['tipo']."' selected >".$row['tipo']."</option>";?>
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
<?php
echo "	Data: <input type='date'  maxlength='20' size='11' name='data' value='".$row['data']."' placeholder='01-01-2021'/><br />";
echo "	Descrição:  <input type='text' maxlength='10' size='11' name='descricao' value='".$row['descricao']."'/><br />";
echo "	Receita Fixa:  Sim<input type='radio' name='fixo' value='true' />";
echo "	Não<input type='radio' name='fixo' value='false'/><br />";
?>

	<input type="submit" value="Gravar">
	<input type="reset" value="Limpar">
</form>

<?php 
require 'conecta.php';
if (isset($_POST['descricao'])){
	$result = pg_query($conn, "UPDATE receitas SET valor='".$_POST['valor']."', tipo='".$_POST['tipo']."', data='".$_POST['data']."', descricao='".$_POST['descricao']."', fixo='".$_POST['fixo']."' WHERE id=".$_POST['id'].";");
	if (!$result) {
		echo "Ocorreu um erro!\n";
		exit;
	}
	else {echo "<script type='text/javascript'>alert('Cadastro Atualizado!');window.location='receitas.php';</script>";}
}else {echo "<br />Preencha a descrição!\n";}

?>
</article>
</section>
<footer>© Copyright 2021 - LeoTech Informática</footer>
</body>
</html>