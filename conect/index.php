<?php

include ("C:\wamp64\www\conect\conexao.php");

$consulta = "SELECT * FROM comercialvrt";
$con = $mysqli -> query($consulta) or die($mysqli -> error);

$consulta2 = "SELECT * FROM comercialcelula";
$con2 = $mysqli -> query($consulta2) or die($mysqli -> error);

$consulta3 = "SELECT * FROM compras";
$con3 = $mysqli -> query($consulta3) or die($mysqli -> error);

$consulta4 = "SELECT * FROM contabilidade";
$con4 = $mysqli -> query($consulta4) or die($mysqli -> error);

$consulta5 = "SELECT * FROM contaspagar";
$con5 = $mysqli -> query($consulta5) or die($mysqli -> error);

$consulta6 = "SELECT * FROM controladoria";
$con6 = $mysqli -> query($consulta6) or die($mysqli -> error);

$consulta7 = "SELECT * FROM controladoriaoperacional";
$con7 = $mysqli -> query($consulta7) or die($mysqli -> error);

$consulta8 = "SELECT * FROM ctm";
$con8 = $mysqli -> query($consulta8) or die($mysqli -> error);

$consulta9 = "SELECT * FROM diretoria";
$con9 = $mysqli -> query($consulta9) or die($mysqli -> error);

$consulta10 = "SELECT * FROM engenharia";
$con10 = $mysqli -> query($consulta10) or die($mysqli -> error);

$consulta11 = "SELECT * FROM estoque";
$con11 = $mysqli -> query($consulta11) or die($mysqli -> error);

$consulta12 = "SELECT * FROM externo ";
$con12 = $mysqli -> query($consulta12) or die($mysqli -> error);

$consulta13 = "SELECT * FROM farmacia";
$con13 = $mysqli -> query($consulta13) or die($mysqli -> error);

$consulta14 = "SELECT * FROM ferramentaria";
$con14 = $mysqli -> query($consulta14) or die($mysqli -> error);

$consulta15 = "SELECT * FROM fiscal";
$con15 = $mysqli -> query($consulta15) or die($mysqli -> error);

$consulta16 = "SELECT * FROM inspetoria ";
$con16 = $mysqli -> query($consulta16) or die($mysqli -> error);

$consulta17 = "SELECT * FROM juridico";
$con17 = $mysqli -> query($consulta17) or die($mysqli -> error);

$consulta18 = "SELECT * FROM logistica";
$con18 = $mysqli -> query($consulta18) or die($mysqli -> error);

$consulta19 = "SELECT * FROM metrologia";
$con19 = $mysqli -> query($consulta19) or die($mysqli -> error);

$consulta20 = "SELECT * FROM operacoes";
$con20 = $mysqli -> query($consulta20) or die($mysqli -> error);

$consulta21 = "SELECT * FROM predial";
$con21 = $mysqli -> query($consulta21) or die($mysqli -> error);

$consulta22 = "SELECT * FROM qualidade";
$con22 = $mysqli -> query($consulta22) or die($mysqli -> error);

$consulta23 = "SELECT * FROM recebimento";
$con23 = $mysqli -> query($consulta23) or die($mysqli -> error);

$consulta24 = "SELECT * FROM recepcao";
$con24 = $mysqli -> query($consulta24) or die($mysqli -> error);

$consulta25 = "SELECT * FROM restaurante";
$con25 = $mysqli -> query($consulta25) or die($mysqli -> error);

$consulta26 = "SELECT * FROM rh";
$con26 = $mysqli -> query($consulta26) or die($mysqli -> error);

$consulta27 = "SELECT * FROM salasreuniao";
$con27 = $mysqli -> query($consulta27) or die($mysqli -> error);

$consulta28 = "SELECT * FROM salvatagem";
$con28 = $mysqli -> query($consulta28) or die($mysqli -> error);

$consulta29 = "SELECT * FROM secretaria";
$con29 = $mysqli -> query($consulta29) or die($mysqli -> error);

$consulta30 = "SELECT * FROM suprimentos";
$con30 = $mysqli -> query($consulta30) or die($mysqli -> error);

$consulta31 = "SELECT * FROM tecnologia";
$con31 = $mysqli -> query($consulta31) or die($mysqli -> error);

$consulta32 = "SELECT * FROM tesouraria";
$con32 = $mysqli -> query($consulta32) or die($mysqli -> error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <title>Ramais HBR</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-5 mb-0 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
      </ul>

<div class="mx-auto">
<span class=" d-flex navbar-brand row h1">Lista de Ramais - HBR Aviação</span>
</div>
   


      <form class="d-flex" method="GET" action="./buscar.php">
        <input class="form-control me-2 " type="text" name="busca" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">ok</button>
      </form>
    </div>
  </div>
</nav>

 <!--TABELAS-->
<div class="container">
 <div class="row">
   <div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top" border="2">
      <caption class="justify-content-center">Comercial VRT</caption>
        <thead class="table-dark">
          
        <tr>
            <th>Nome</th>
            <th>Ramal</th>
        </tr>
        </thead>
        <?php while ($dado = $con -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
  <div class="col-lg-6">
    <table class="table table-hover table-sm caption-top" border="2">
      <caption class="justify-content-center">Comercial Celula</caption>
        <thead class="table-dark">
          
        <tr>
            <th>Nome</th>
            <th>Ramal</th>
        </tr>
        </thead>
        <?php while ($dado = $con2 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>

<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Compras</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con3 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Contabilidade</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td> 
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con4 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Contas a Receber</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con5 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Controladoria</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con6 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Controladoria Operacional</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con7 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">CTM</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con8 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Diretoria</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con9 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Engenharia</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con10 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Estoque</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con11 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Externo</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con12 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Farmacia</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con13 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Ferramentaria</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con14 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Financeiro</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con15 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Inspetoria </caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con16 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Juridico</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con17 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Logística</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con18 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Metrologia</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con19 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Operações</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con20 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Predial</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con21 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Qualidade </caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con22 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Recebimento</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con23 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Recepção</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con24 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Restaurante </caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con25 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">RH</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con26 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>

<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Salvatagem</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con28 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Secretaria</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con29 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Suprimentos</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con30 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">T.I</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con31 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
<div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Tesouraria</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con32 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
  <div class="col-lg-6 ">
    <table class="table table-hover table-sm caption-top">
      <caption class="justify-content-center">Salas de Reunião</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
        </tr>
        </thead>
        <?php while ($dado = $con27 -> fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["ramal"]; ?></td>
        </tr>
        <?php } ?>
    </table>
  </div>
 </div>
</div>

</body>
<script src="./Bootstrap/js/bootstrap.js"></script>
</html>