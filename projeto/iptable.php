<?php
$Command = $_POST["DropdownCommand"];
$Option = $_POST["CommandOptions"];
if (empty($Option))
    $ExecCommand = $Command;
else
    $ExecCommand = "iptables" $Command . " -".$Option;
echo "Command to execute: " . $ExecCommand ;
$Result = shell_exec($ExecCommand);
echo "<pre>$Result</pre>";
?>
 
<a href="PHPCommands.php">Voltar</a>