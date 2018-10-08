<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin. Loja</title>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Propostas SYNCHRO</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/conteudo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<style type="text/css">

<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #000000;
}
body {
	background-color: #ffffff;
}
-->
</style></head>

<body>
<?php 
session_start();
unset ($_SESSION['login']);
unset ($_SESSION['senha']);


?>
<center>
<form id="form1" name="form1" method="post" action="login.php">
  <label>
  <div align="center">
    <p><br />
    </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>Administração da Loja - Entre com seu e-mail e senha. <br />
    </p>
    <table width="317" height="98" border="0">
      <tr>
        <td height="23">Email </td>
        <td><input name="email" type="text" id="email" /></td>
      </tr>
      <tr>
        <td height="21">Senha:</td>
        <td><input type="password" name="senha" /></td>
      </tr>
      <tr>
        <td height="21">&nbsp;</td>
        <td><input name="Entrar" type="submit" id="Entrar" value="Entrar" /></td>
      </tr>
      <tr>
        <td height="21" colspan="2">Esqueci a senha | Lembrete de senha </td>
      </tr>
    </table>
    <br />
  </div>
  </label>
  <p align="center">
    <label></label>
  </p>
  <p align="center">
    <label></label>
  </p>
  <p align="center">&nbsp;</p>
</form>
</center>
</body>
</html>
