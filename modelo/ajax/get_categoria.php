<?php
error_reporting(0);
ini_set("display_errors", 0 );

require_once($_SERVER['DOCUMENT_ROOT'].'/modelo/includes/conexao.php');

$funcao = $_GET["funcao"];


switch ($funcao) {
	case ($funcao =="listaCategoria") :

     $sql = "select id_categoria, titulo_categoria from categoria where ativo='1'";
	 $result = $db->query($sql) or die($mysqli->error.__LINE__);
  	 $arr = array();
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$arr[] = array_map('utf8_encode', $row); 
			}
		}
		# JSON-encode the response
		$json_response = json_encode($arr);
		
		// # Return the response
		echo $json_response;
		//Consultando banco de dados
  break;
 
}
 
?>





 