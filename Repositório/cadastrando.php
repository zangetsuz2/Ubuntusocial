<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ubuntusocial";
// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname) or die (mysql_error());;
define('CHARSET', 'UTF-8');
$select = mysql_select_db('ubuntusocial') or die (mysql_error());
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastrando</title>
</head>
<body>




<?php

$nome = $_POST['nomeinst'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$usu = $_POST['usu'];
$pass = $_POST['pass'];
$sql = mysql_query("INSERT INTO cadastro(nomedainstituicao, telefone, email, usu, pass) VALUES('$nome', '$telefone', '$email', '$usu', '$pass')");
echo "<center><h1>Cadastrado com sucesso<h1>";
//echo "<script type="text/javascript"> setTimeout("window.location=index.php", 6000);</script>";

?>





	
</body>
</html>