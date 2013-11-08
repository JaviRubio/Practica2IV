<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Practica 1 de IV</title>
  <style>
  html { 
  background: black; 
  }
  body {
    background: #333;
    background: -webkit-linear-gradient(top, black, #666);
    background: -o-linear-gradient(top, black, #666);
    background: -moz-linear-gradient(top, black, #666);
    background: linear-gradient(top, black, #666);
    color: white;
    font-family: "Helvetica Neue",Helvetica,"Liberation Sans",Arial,sans-serif;
    width: 40em;
    margin: 0 auto;
    padding: 3em;
  }
  a {
    color: white;
  }

  h1 {
    text-transform: capitalize;
    -moz-text-shadow: -1px -1px 0 black;
    -webkit-text-shadow: 2px 2px 2px black;
    text-shadow: -1px -1px 0 black;
    box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.5);
    background: #CC0000;
    width: 22.5em;
    margin: 1em -2em;
    padding: .3em 0 .3em 1.5em;
    position: relative;
  }
  h1:before {
    content: '';
    width: 0;
    height: 0;
    border: .5em solid #91010B;
    border-left-color: transparent;
    border-bottom-color: transparent;
    position: absolute;
    bottom: -1em;
    left: 0;
    z-index: -1000;
  }
  h1:after {
    content: '';
    width: 0;
    height: 0;
    border: .5em solid #91010B;
    border-right-color: transparent;
    border-bottom-color: transparent;
    position: absolute;
    bottom: -1em;
    right: 0;
    z-index: -1000;
  }
  h2 { 
    margin: 2em 0 .5em;
    border-bottom: 1px solid #999;
  }

  pre {
    background: black;
    padding: 1em 0 0;
    -webkit-border-radius: 1em;
    -moz-border-radius: 1em;
    border-radius: 1em;
    color: #9cf;
  }

  ul { 
    margin: 0; 
    padding: 0;
  }
  li {
    list-style-type: none;
    padding: .5em 0;
  }

  .brand {
    display: block;
    text-decoration: none;
  }
  .brand .brand-image {
    float: left;
    border: none;
  }
  .brand .brand-text {
    float: left;
    font-size: 24px;
    line-height: 24px;
    padding: 4px 0;
    color: white;
    text-transform: uppercase;
  }
  .brand:hover,
  .brand:active {
    text-decoration: underline;
  }

  .brand:before,
  .brand:after {
    content: ' ';
    display: table;
  }
  .brand:after {
    clear: both;
  }
  </style>
</head>
<body>
  <h1>
    Calculadora de cuotas de amortizacion de equipos informaticos
  </h1>
  <?php
      if(empty($_POST['importe'])){
        print ("<form id='datos' method='post' action='index.php'>");
        print ("<label for='campoImporte'>Importe</label>");
        print ("<input id='campoImporte' name='importe' type='text'/>");
        print ("<br/>");
        print ("<label for='campoTiempo'>Tiempo</label>");
        print ("<input id='campoTiempo' name='tiempo' type='text'/>");
        print ("<br/>");
        print ("<input type = 'submit' id = 'botonAceptar' value = 'Calcular'/>");
        print ("</form>");
      }
      else{
        if(!empty($_POST['tiempo'])){
          $dinero=(float)$_POST['importe'];
    $temp=(float)$_POST['tiempo'];
    $iva=$dinero-$dinero*0.21;
    $cuota=$iva/$temp;
    if($cuota>$dinero*0.26){
      print("<h2>Error,no se permite una amortizacion a tan poco tiempo</h2>");
    }
    else
    {
      print("<h2>El valor a amortizar es ".$iva."<br/>");
      print("El numero de años es ".$temp."</br>");
      print("La cuota es de ".$cuota."</h2>");
    }

      }
    }
  ?>
</body>
</html>