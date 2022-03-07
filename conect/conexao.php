<?php
$hostname = "localhost";
$bancodedados = "ramalhbr";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario ,$senha ,$bancodedados);
if ($mysqli -> connect_errno) {
    echo "Falha nessa PORRA: (" . $mysqli -> connect_errno . ")" . $mysqli -> connect_error;
};
