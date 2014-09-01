<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<style>
		header {
			height: 10%;
			text-align: center;
			margin-top: 1cm;
			margin-bottom: 1cm;
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
		div{
			margin-left: 10cm;
			margin-right: 10cm;
			height: 500px;
		}
		form {
			width: 70%;
			margin: auto;
    		
		}
		fieldset {
			background: #abd3d8;
			border-radius: 10px;
			box-shadow: 3px 3px 10px #000;
		}
		legend {
			background: #6cb2ba;
			text-align: center;
			width: 25%;
			border-radius: 5px;
		}
		input:not([type=submit]) {
			width: 70%;
		}
		input[type=text]{
			text-transform: lowercase;
			margin-bottom: 0.2cm;
		}
		input[type=submit]{
			float: right;
			margin: 3% 13% 0% 0%;
		}
		a{
			float: left;
			margin-left: 1.3cm;
			width: 70%;
		}
		label, input {
			margin-top: 0.2cm;

			margin-left: 15%;
		}
		h1{
			text-align: center;
		}
		h1,p { 
  			color: gray; 
  
}
		footer {
			float: right;
			height: 10%;
			clear: both;
		}
		
		a{
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>Login ou Senha incorreta</h1>
	</header>
	<div id="login">
		<form action="result.html" method="post">
			<fieldset>
				<a class="btn btn-primary" href="login.html" role="button">voltar</a>
			</fieldset>
		</form>
	</div>
	<footer>
		WIB - Desenvolvido por Amanda Lira e Gilberto Lobo
	</footer>
</body>
</html>
