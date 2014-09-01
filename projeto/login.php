<?php
	session_start();
	if(isset($_POST['changeOption']))
	{
		$disabledSubmit = $_POST['disabledSubmit'];
		if($disabledSubmit == 1) $js = 'disabledSubmit:true';
		else $js = 'disabledSubmit:false';
		
		$autoRevert = $_POST['autoRevert'];
		if($autoRevert == 1) $js .= ',autoRevert:true';
		else $js .= ',autoRevert:false';
		
		$autoSubmit = $_POST['autoSubmit'];
		if($autoSubmit == 1) $js .= ',autoSubmit:true';
		else $js .= ',autoSubmit:false';
	}
	else
	{
		$disabledSubmit = 2;
		$autoRevert = 1;
		$autoSubmit = 2;
		$js = 'disabledSubmit:false,autoRevert:true,autoSubmit:false';
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="favicon.ico" />
	

	
	<link rel="stylesheet" href="jquery/QapTcha.jquery.css" type="text/css" />
	
	<style type="text/css">
		form{margin:30px;width:300px}
		label{float:left;clear:both;width:100px;margin-top:10px}
		select, input{float:left;margin-top:10px}
		label.large{width:150px}
		.clr{clear:both}
		.notice {background-color:#d8e6fc;color:#35517c;border:1px solid #a7c3f0;padding:10px;margin-top:10px;}
		
		.code {
			margin:30px;
			border:1px solid #F0F0F0;
			background-color:#F8F8F8;
			padding:10px;
			color:#777;
		}

		body, html {
			height: 100%;
			background-image: url('bg3.jpg');
			background-repeat: no-repeat;
		}
		body {
			padding: 0px;
			margin: 0px;
		}

		footer {
			float: right;

			height: 0%;
			clear: both;
		}
		fieldset {
			background: #abd3d8;
			border-radius: 10px;
			box-shadow: 3px 3px 10px #000;
		}
		input:not([type=submit]) {
			width: 95%;
		}
		input[type=submit]{
			float: right;
			margin: 3% 13% 10% 0%;
		}
		h1,p { 
  			color: gray; 
  			text-align: center;
  		}

  		form {
			width: 20%;
			margin: auto;
		}

		input[type=submit]{
			float: right;
			margin: 5% 0% 0% 0%;
		}

	</style>
</head>
<body>
	<header>
		<h1>WIB – Solução Gráfica para Iptables</h1>
	</header>

	<form method="post" action="verifica.php" id="login">
		<fieldset>
			<h1>WIB</h1>
			<label>Login:</label> 
			<input type="text" name="firstname" placeholder="Login"/>
			<label>Senha:</label> 
			<input type="password" name="lastname" placeholder="Senha"/>
			<div class="clr"></div>
			<div class="QapTcha"></div><br><br><br><br>
			<input type="submit" name="submit" value="Enviar" />
			<br><a href="cadastrar.php">Cadastrar</a><br>
			
		</fieldset>
	</form>
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/jquery-ui.js"></script>
	<script type="text/javascript" src="jquery/jquery.ui.touch.js"></script>
	<script type="text/javascript" src="jquery/QapTcha.jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.QapTcha').QapTcha({<?php echo $js;?>});
		});
	</script>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<footer>
		WIB - Desenvolvido por Amanda Lira e Gilberto Lobo
	</footer>
</body>
</html>
