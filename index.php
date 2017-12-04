<?php
include "Libreria/conexion.php";
include "Libreria/header.php";
include "Libreria/footer.php";

$sql =  "create table prueba (nombre varchar(45))";
$resultado = $connmysql->query($sql);




?>

<button class="btn btn-success">s</button>
