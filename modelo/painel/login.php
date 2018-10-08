<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/modelo/includes/conexao.php');
session_start();
$login = $_POST['email'];
$senha = $_POST['senha'];

//print("$login $senha");

$sql = "SELECT Count(*) AS qtd, nome FROM usuarios where email ='$login' and senha ='$senha'";
$resultado = $db->query($sql) or die($mysqli->error.__LINE__);
 	while ($linha=mysqli_fetch_array($resultado)) {
      $qtd = $linha["qtd"];
	  $nome = $linha["nome"];
  }
  
 if($qtd=='1') {
  $_SESSION['login'] = $login;
  $_SESSION['senha'] = $senha;
  $_SESSION['nome'] = $nome;
  header('location:listapedidos.php');
 } else {
 unset ($_SESSION['login']);
 unset ($_SESSION['senha']);
 header('location:listapedidos.php');
 }


?>