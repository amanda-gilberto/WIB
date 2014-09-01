<?php
if(!isset($_POST['optfilter']) || (!isset($_POST['optchain'])) || (!isset($_POST['optifint'])) || (!isset($_POST['ipsrc'])) || (!isset($_POST['ipdst'])) || (!isset($_POST['optifout'])) || (!isset($_POST['optprotocolo'])) || (!isset($_POST['optporta'] )) ||   (!isset($_POST['optacao'])) || (!isset($_POST['nipd']))){
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
$nipd = $_POST['nipd'];

$command = 'sudo iptables -t nat '.$optfilter." ".$optchain." ".$optifint." ".$optifout." -s ".$ipsrc." -d ".$ipdst." ".$optprotocolo." ".$optporta." ".$optacao." --to ".$nipd;
shell_exec($command);

header("Location:aplicacao.php");

?>

