<?php 
  session_start();
  if(!isset($_SESSION['logado'])){
    header("Location:login.php");
  }
 ?>
<!DOCTYPE html>
<!-- saved from url=(0047)http://getbootstrap.com/examples/justified-nav/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>WIB - Watch it Burn</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/justified-nav/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./index_files/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./index_files/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      a{

      }
    </style>
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">WIB – Solução Gráfica para Iptables</h3> <br>
        <ul class="nav nav-justified">
          <li><a href="home.php" style="background:#abd3d8">Home</a></li>
          <li><a href="aplicacao.php" style="background:#abd3d8">Aplicações</a></li>
          <li><a href="about.php" style="background:#abd3d8">About</a></li>
          <li class="active"><a href="contato.php">Contact</a></li>
          <li><a href="sair.php" style="background:#abd3d8">Sair</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron" style="text-align:justify">
        <dl>
          <dt>Amanda Lira de Araújo</dt>
          <dd>Telefone: (83) 98038972</dd>
          <dd>Email: llira.amanda@gmail.com</dd><br>
          <dt>Gilberto Lobo da Silva Neto</dt>
          <dd>Telefone: (83) 88330678</dd>
          <dd>Email: gilberto.lobo07@gmail.com</dd>
        </dl>
        
      </div>

     

      <!-- Site footer -->
      <div class="footer">
        <p>Desenvolvimento Web - IFPB - 2014</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

</body></html>