<?php
//error_reporting(0);
//ini_set("display_errors", 0 );

$servidor = 'localhost';
$banco = 'xxx';
$usuario = 'xxxx';
$senha = 'xxx';

/*
$servidor = 'localhost';
$banco = 'loja';
$usuario = 'root';
$senha = '';
*/
$db = mysqli_connect($servidor, $usuario, $senha, $banco) or die(mysqli_error());

if (!$db) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
//echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;

//mysqli_close($db);

?>
