<?php
 if ((!isset($_POST['nome'])) && (!isset($_POST['email'])) && (!isset($_POST['birth'])) && (!isset($_POST['login'])) && (!isset($_POST['password'])) && (!isset($_POST['confpass'])) ) {
 	header("Location:cadatrar.php");
 }
else {
	$cod = '';
	$name = $_POST['nome'];
	$email = $_POST['email'];
	$date = $_POST['birth'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$confpass = $_POST['confpass'];

	// echo "$name / $email / $date / $login / $password / $confpass";

	

	$con = new mysqli("localhost","root","root","WIB"); //conexão com o banco
	if (!$con){
		echo "erro: ".mysqli_connect_error();
		exit();
	}

	if($password===$confpass){

		$passcrip = md5($password); //Função md5 criptografa a senha 
		$sql = "INSERT INTO usuarios VALUES(\"$cod\",\"$name\", \"$email\", \"$date\", \"$login\", \"$passcrip\")";
		if ($result = $con->query($sql)) {
			echo "usuario inserido com sucesso!";
		} 
		//$result->close();
	}else {
		echo "<a href='cadastrar.php'>Voltar</a><br>";
		
		die("senhas diferentes");
	}
	$con->close();
}
header("Location:login.php");
?>
