<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/modelo/includes/conexao.php');

$titulo_categoria =  utf8_decode($_POST["titulo_categoria"]);
$ativo = $_POST["ativo"];



if ($titulo_categoria !="") {
$sql = "INSERT INTO  categoria (`titulo_categoria`, `ativo`)
 VALUES (
 '$titulo_categoria', '$ativo')";
$result = $db->query($sql) or die($mysqli->error.__LINE__);
echo "<script>window.open('listacategorias.php', '_parent');</script>";

} else {
echo "<script>alert('Dados com * são Obrigatórios'); window.open('categoria.php', '_parent');</script>";
}	

?>