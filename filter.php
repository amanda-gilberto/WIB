<?php
if(!isset($_POST['optfilter']) || (!isset($_POST['optchain'])) || (!isset($_POST['optifint'])) || (!isset($_POST['ipsrc'])) || (!isset($_POST['ipdst'])) || (!isset($_POST['optifout'])) || (!isset($_POST['optprotocolo'])) || (!isset($_POST['optporta'] )) ||   (!isset($_POST['optacao']))){
	header("Location:home.php");
}

$optfilter = $_POST['optfilter'];
$optchain = $_POST['optchain'];
$optifint = $_POST['optifint'];
$optifout = $_POST['optifout'];
$ipsrc = $_POST['ipsrc'];
$ipdst = $_POST['ipdst'];
$optprotocolo = $_POST['optprotocolo'];
$optporta = $_POST['optporta'];
$optacao = $_POST['optacao'];

$command = 'sudo iptables -t filter '.$optfilter." ".$optchain." ".$optifint." ".$optifout." -s ".$ipsrc." -d ".$ipdst." ".$optprotocolo." ".$optporta." ".$optacao;

shell_exec($command);

header("Location:aplicacao.php");

?>

