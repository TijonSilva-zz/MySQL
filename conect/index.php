<?php

include ("C:\wamp64\www\conect\conexao.php");

$consulta = "SELECT * FROM comercialvrt";
$con = $mysqli -> query($consulta) or die($mysqli -> error);
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

  <!-- LOGO HBR -->
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img class="img-fluid" src="./images/hbrlogo.png" alt="Responsive image" width="40" height="40">
    </a>
<!-- LOGO HBR -->

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-disable" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Setores
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">setor1</a></li>
            <li><a class="dropdown-item" href="#">setor2</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">todos</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="container-fluid">
    <span class="navbar-brand row d-flex justify-content-center h1">Lista de Ramais HBR Aviação</span>
  </div>
</nav>
<div style="margin: 100px;">
    <table class="table table-sm table-hover caption-top">
      <caption class="justify-content-center">Comercial VRT</caption>
        <thead class="table-dark">
          
        <tr>
            <td>Nome</td>
            <td>Ramal</td>
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
</body>
<script src="./Bootstrap/js/bootstrap.js"></script>
</html>