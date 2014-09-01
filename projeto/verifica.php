<?php 
	session_start();
	if (!isset($_POST['firstname'])) {
			// if form is submit
		if(isset($_POST['submit']))
		{
			$response = '<div class="notice">';
			
			/** SESSION CONTROL **/
			if(isset($_SESSION['qaptcha_key']) && !empty($_SESSION['qaptcha_key']))
			{
				$QaptChaInput = $_SESSION['qaptcha_key']; 
				header("Location:login.php");
				
				/** we can control the random input grace to the QapTchaToTest intpu value **/
				if(isset($_POST[''.$QaptChaInput.'']) && empty($_POST[''.$QaptChaInput.''])){
					$response .= 'Form can be submited<br />First Name : '.$_POST['firstname'].'<br />Last Name : '.$_POST['lastname'];
					header("Location:login.php");
				}
				else{
					$response .= '$_POST not empty or unexists';
					//header("Location:login.php");
					exit();
				}
					
			}
			else{
				$response .= 'No SESSION.. Form can not be submitted...';
				header("Location:login.php");
			}
				
				
			$response .= '</div>';
			echo $response;
			header("Location:login.php");
			/** Unset SESSION in all cases **/
			unset($_SESSION['qaptcha_key']);
			header("Location:login.php");
		}
		//header("Location:login.php");	
	}

	else{
		$login = $_POST['firstname'];
		$password = $_POST['lastname'];
		$passcrip = md5($password); //Função md5 criptografa a senha 

		$con = new mysqli("localhost","root","root","WIB"); //Estabelece a conexão
		if (!$con){
			echo "erro: ".mysqli_connect_error();
			exit();
		}
		$sql = "SELECT * FROM usuarios WHERE login = \"$login\" AND password = \"$passcrip\"";

		if ($result = $con->query($sql)) 
		{
			
				while($obj = $result->fetch_object())//varre o obj result
				{
					$_SESSION['id'] = $obj->id;
					$_SESSION['name'] = $obj->name;
					$_SESSION['email'] = $obj->email;
					$_SESSION['date'] = $obj->date;
					$_SESSION['login'] = $obj->login;
					$_SESSION['password'] = $obj->password;
					$_SESSION['logado'] = true;
					header("Location:home.php");
					exit();
				}

				if(@$_SESSION['logado']!== 1)
				{
					header("Location:erro.php");
					exit();
				}
		}
	}

 ?>

