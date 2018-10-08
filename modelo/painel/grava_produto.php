<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/modelo/includes/conexao.php');

$nm_produto =  utf8_decode($_POST["nm_porduto"]);
$vl_produto = $_POST["vl_produto"];
$id_categoria = "1";
$ativo = $_POST["ativo"];
$descricao = $_POST["descricao"];



// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'uploads/';

// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 900; // 2Mb

// Array com as extensões permitidas
$_UP['extensoes'] = array('jpg');

// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = false;

// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
/*
if ($_FILES['foto']['error'] != 0) { die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['foto']['error']]); exit; // Para a execução do script 

}
*/

// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar

// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) { 
"<script>alert('Verifique seus dados');</script>";
exit;


}else {
// Primeiro verifica o nome do arquivo
	$nome_final = $_FILES['foto']['name'];

// Mantém o nome original do arquivo
$inicio_do_script = date("d-m-Y H:i:s");


// Depois verifica se é possível mover o arquivo para a pasta escolhida
			if (move_uploaded_file($_FILES['foto']['tmp_name'], $_UP['pasta'] . $nome_final)) {
			// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
			//echo "Upload efetuado com sucesso!<br>";
			//echo 'Estamos processando o arquivo...<br> aguarde...<br>';
			
			$sql = "INSERT INTO `produtos` (`nm_produto`, `vl_produto`, `foto`, `id_categoria`, `ativo`, `descricao`) VALUES (
					 '$nm_produto, '$vl_produto', '$nome_final', '$id_categoria', '$ativo', '$descricao')";
					
					$result = $db->query($sql) or die($mysqli->error.__LINE__);
				
		
			} else {
			// Não foi possível fazer o upload, provavelmente a pasta está incorreta
			echo "Não foi possível enviar o arquivo, tente novamente";
			exit; 
			}

}
			
	echo "<script>window.open('listaprodutos.php', '_parent');</script>";

?>