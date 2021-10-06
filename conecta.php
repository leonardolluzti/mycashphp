<?php
//configurações da conexão com banco de dados:
$servidor = "localhost";
$porta = "5432";
$banco = "mycash";
$usuario = "postgres";
$senha = "pr3t3nd3r";

$conn = pg_pconnect("host=".$servidor." port=".$porta." dbname=".$banco." user=".$usuario." password=".$senha);
if (!$conn) {
    echo "<img src='icones/OffLine.png' width='40' height='40' alt='Banco Desconcetado' />Ocorreu um erro de conexão com o Banco de Dados!\n";
    exit;
}
echo "<img src='icones/OnLine.png' width='40' height='40' alt='Banco Conectado!' />Banco Conectado!\n";

?>
