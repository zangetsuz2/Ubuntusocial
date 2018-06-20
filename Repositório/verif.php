<?php 

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ubuntusocial";
// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname) or die (mysql_error());;
define('CHARSET', 'UTF-8');
$select = mysql_select_db('ubuntusocial') or die (mysql_error());
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript">
	function loginsuccessfully()
	{
		setTimeout("window.location='instalt.php'", 6000);
	}
	function loginfailed()
	{
		setTimeout("window.location='index.php'", 6000);
	}	
</script>
</head>
<body>



<?php
$login = $_POST['login'];
$senha = $_POST['senha'];
 
$sql = mysql_query("SELECT * FROM controle WHERE NOME = '$login' and SENHA = '$senha'") or die (mysql_error());
$row = mysql_num_rows($sql);
if( $row > 0 )
{
	session_start();
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	echo "Você foi autenticado com sucesso, aguarde um instante";
	echo "<script>loginsuccessfully()</script>";
    /*header('location:sucesso.php');*/
}
else
{
    echo "Nome de usuário ou senha inválidos, aguarde um instante e tente novamente";
    echo "<script>loginfailed()</script>";
}

 
?>

</body>
</html>