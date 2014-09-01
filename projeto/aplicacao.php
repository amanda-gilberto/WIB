<?php 
  session_start();
  if(!isset($_SESSION['logado'])){
    header("Location:login.php");
  }
 ?>

<!DOCTYPE html>
<!-- saved from url=(0047)http://getbootstrap.com/examples/justified-nav/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
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
    label{
      width: 40%;
    }
    </style>
    <script>
    function showPrompt(str)
          {
          var xmlhttp;
          if (str=="")
            {
            document.getElementById("ajax").innerHTML="";
            return;
            }
          if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
            }
          else
            {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
          xmlhttp.onreadystatechange=function()
            {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
              {
              document.getElementById("ajax").innerHTML=xmlhttp.responseText;
              }
            }
          xmlhttp.open("GET","ping.php?q="+str,true);
          xmlhttp.send();
          }
    </script>
  </head>

  <body>
   <!--  <a href='sair.php'>Sair</a>   -->
    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">WIB – Solução Gráfica para Iptables</h3><br>
        <ul class="nav nav-justified">
          <li ><a href="home.php" style="background:#abd3d8">Home</a></li>
          <li class="active"><a href="aplicacao.php">Aplicações</a></li>
          <li><a href="about.php" style="background:#abd3d8">About</a></li>
          <li><a href="contato.php" style="background:#abd3d8">Contact</a></li>
          <li><a href="sair.php" style="background:#abd3d8">Sair</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <form>
          <h2>Liste a tabela desejada:</h2>
          <!-- <input type="text" class="lead" name ="ping" placeholder="Digite aqui o Endereço" id="ping" onblur="showPrompt(this.value)"> -->
          <select onchange="showPrompt(this.value)">
            <option>escolha a opção</option>
            <option value="-t filter">filter</option>
            <option value="-t nat">nat</option>
            <option value="-t mangle">mangle</option>
          </select>
          <br>
          <!-- <a class="btn btn-lg btn-success" onclick="showPrompt(document.getElementById('ping'))">Ping</a> -->
          <!-- <button class="btn btn-lg btn-success" onclick="showPrompt(this.value)" value=">Ping</button> -->
        </form>
      </div>

      <div id="ajax">
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <form action="filter.php" method="post">
            <h2 >Tabela Filter</h2>
            
            <fieldset>
              <div>
               <label>Posição na Chain:</label>
                <select name="optfilter">
                  <option value="">escolha a opção</option>
                  <option value="-I">Inicio</option>
                  <option value="-A">Fim</option>
                </select>
                <br>
                <label>Chain:</label>
                <select name="optchain">
                  <option value="">escolha a opção</option>
                  <option value="INPUT">Input</option>
                  <option value="OUTPUT">Output</option>
                  <option value="FORWARD">Forward</option>
                </select>
                <br>
                <label>Interface de entrada:</label>
                <select name="optifint">
                  <option value="">escolha a opção</option>
                  <option value="-i eth0">eth0</option>
                  <option value="-i eth1">eth1</option>
                  <option value="-i eth2">eth2</option>
                </select>
                <br>
                <label>Interface de saída:</label>
                <select name="optifout">
                  <option value="">escolha a opção</option>
                  <option value="-o eth0">eth0</option>
                  <option value="-o eth1">eth1</option>
                  <option value="-o eth2">eth2</option>
                </select>
                <br>
                <label>Ip/Rede de origem:</label>
                <input type="text" name="ipsrc" placeholder="digite o ip/rede"> 
                <br>
                <label>Ip/Rede de destino:</label>
                <input type="text" name="ipdst" placeholder="digite o ip/rede"> 
                <br>
                <label>Protocolo:</label>
                <select name="optprotocolo">
                  <option value="">escolha a opção</option>
                  <option value="-p tcp">tcp</option>
                  <option value="-p udp">udp</option>
                </select>
                <br>
                <label>Porta:</label>
                <select name="optporta">
                  <option value="">escolha a opção</option>
                  <option value="--dport 80">Porta 80</option>
                  <option value="--dport 53">Porta 53</option>
                </select>
                <br>
                <label>Ação:</label>
                 <select name="optacao">
                  <option value="">escolha a opção</option>
                  <option value="-j ACCEPT">accept</option>
                  <option value="-j DROP">drop</option>
                  <option value="-j REJECT">reject</option>
                </select>
              </div>
            </fieldset><br>
            <input class="btn btn-primary" type="submit" value="Adicionar regra">
           <!--  <a class="btn btn-primary" role="button">Filter</a> -->
          </form>
          <br>     
        </div>

        <div class="col-lg-4">
          <form action="nat.php" method="post">
            <h2>Tabela Nat</h2>
            
            <fieldset>
              <div>
               <label>Posição na Chain:</label>
                <select name="optfilter">
                  <option value="">escolha a opção</option>
                  <option value="-I">Inicio</option>
                  <option value="-A">Fim</option>
                </select>
                <br>
                <label>Chain:</label>
                <select name="optchain">
                  <option value="">escolha a opção</option>
                  <option value="PREROUTING">PREROUTING</option>
                  <option value="POSTROUTING">POSTROUTING</option>
                  <option value="OUTPUT">OUTPUT</option>
                </select>
                <br>
                <label>Interface de entrada:</label>
                <select name="optifint">
                  <option value="">escolha a opção</option>
                  <option value="-i eth0">eth0</option>
                  <option value="-i eth1">eth1</option>
                  <option value="-i eth2">eth2</option>
                </select>
                <br>
                <label>Interface de saída:</label>
                <select name="optifout">
                  <option value="">escolha a opção</option>
                  <option value="-o eth0">eth0</option>
                  <option value="-o eth1">eth1</option>
                  <option value="-o eth2">eth2</option>
                </select>
                <br>
                <label>Ip/Rede de origem:</label>
                <input type="text" name="ipsrc" placeholder="digite o ip/rede"> 
                <br>
                <label>Ip/Rede de destino:</label>
                <input type="text" name="ipdst" placeholder="digite o ip/rede"> 
                <br>
                <label>Protocolo:</label>
                <select name="optprotocolo">
                  <option value="">escolha a opção</option>
                  <option value="-p tcp">tcp</option>
                  <option value="-p udp">udp</option>
                </select>
                <br>
                <label>Porta:</label>
                <select name="optporta">
                  <option value="">escolha a opção</option>
                  <option value="--dport 80">Porta 80</option>
                  <option value="--dport 53">Porta 53</option>
                </select>
                <br>
                <label>Ação:</label>
                 <select name="optacao">
                  <option value="">escolha a opção</option>
                  <option value="-j SNAT">SNAT</option>
                  <option value="-j DNAT">DNAT</option>
                  <option value="-j REDIRECT">REDIRECT</option>
                </select>
                <br>
                <label>Novo Ip/Porta de destino:</label>
                <input type="text" name="nipd" placeholder="digite o ip/rede"> 
              </div>
            </fieldset><br>
            <input class="btn btn-primary" type="submit" value="Adicionar regra">
           <!--  <a class="btn btn-primary" role="button">Filter</a> -->
          </form>
          <br>     
        </div>

        <div class="col-lg-4">
          <h2>Tabela Mangle</h2>
          <b><p>Em construção...</p></b>
          <img src="construcao.jpg" width="30%"><br><br>
          <p><a class="btn btn-primary" href="#" role="button">Mangle</a></p>
        </div>
      </div>
      <div>
        <br>  
        <form action="limpar.php" method="post">

          <h2>Limpar tabela</h2>
          <select name="tabela">
            <option>escolha a tabela</option>
            <option value="filter">Filter</option>
            <option value="nat">Nat</option>
            <option value="mangle">Mangle</option>
          </select>
          <input class="btn btn-primary" type="submit" value="limpar">
        </form>
        
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