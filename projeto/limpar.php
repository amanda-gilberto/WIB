<?php
if(!isset($_POST['tabela'])){
	header("Location:home.php");
}

$tabela = $_POST['tabela'];

$command = 'sudo iptables -t '.$tabela." -F";

shell_exec($command);

header("Location:aplicacao.php");

?>

