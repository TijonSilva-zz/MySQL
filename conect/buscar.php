<?php 

$hostname = "localhost";
$bancodedados = "ramalhbr";
$usuario = "root";
$senha = "";

$con = new mysqli( $hostname, $usuario, $senha ,$bancodedados);

$buscar = $_POST['BUSCAR'];
$select = "SELECT * FROM compras WHERE nome, ramal LIKE 'BUSCAR' LIMIT 1";
$result = mysqli_query($con, $select);

while ($listadados = mysqli_fetch_array ($result)) {
    echo "teste:" .$listadados['nome, ramal']. "br";
}
?>