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
  </head>

  <body>
   <!--  <a href='sair.php'>Sair</a>   -->
    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">WIB – Solução Gráfica para Iptables</h3><br>
        <ul class="nav nav-justified">
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="aplicacao.php" style="background:#abd3d8">Aplicações</a></li>
          <li><a href="about.php" style="background:#abd3d8">About</a></li>
          <li><a href="contato.php" style="background:#abd3d8">Contact</a></li>
          <li><a href="sair.php" style="background:#abd3d8">Sair</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Watch It Burn!</h1>
        <p class="lead">Tenha o poder em suas mãos e contemple a mais prática interface gráfica para Iptables já criada.</p>
        <p><a class="btn btn-lg btn-success" href="aplicacao.php" role="button">Comece já!</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4" style="text-align:justify">
          <h2>Firewall Iptables</h2>
          <p>O Iptables é a ferramenta responsável pela adição e remoção de regras de filtragem no netfilter, filtro de pacotes implementado no kernel do Linux.</p>
          <ul>
            <li>Especificação de portas/endereço de origem/destino;</li>
            <li> Suporte a protocolos TCP/UDP/ICMP (incluindo tipos de mensagens icmp);</li>
            <li> Suporte a interfaces de origem/destino de pacotes;</li>
            <li> Tratamento de tráfego dividido em chains;</li>
            <li> Permite um número ilimitado de regras por chain;</li>
            <li> Muito rápido, estável e seguro.</li>
          </ul>
          <p><a class="btn btn-primary" href="http://www.netfilter.org/projects/iptables/" role="button">Saiba mais »</a></p>
        </div>
        <div class="col-lg-4" style="text-align:justify">
          <h2>Netfilter</h2>
          <p>O netfilter é um módulo que fornece ao sistema operacional Linux as funções de firewall, NAT e log dos dados que trafegam por rede de computadores.</p>
          <p><a class="btn btn-primary" href="http://www.netfilter.org/index.html" role="button">Saiba mais »</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn btn-primary" href="http://getbootstrap.com/examples/justified-nav/#" role="button">View details »</a></p>
        </div>
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