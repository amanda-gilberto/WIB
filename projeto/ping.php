<?php
if(!isset($_GET['q'])){
	header("Location:home.php");
}
$q = $_GET['q'];

$result = shell_exec("sudo iptables ".$q." -L");
echo "<pre>$result</pre>";
?>
<!-- if (empty($Option))
    $ExecCommand = $Command;
else
    $ExecCommand = "iptables" $Command . " -".$Option;
echo "Command to execute: " . $ExecCommand ;
$Result = shell_exec($ExecCommand);
echo "<pre>$Result</pre>"; -->
 
<!-- <a href="PHPCommands.php">Voltar</a> -->