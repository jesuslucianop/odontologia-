<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "odontologia";
$connmysql = new mysqli($servername, $username, $password, $dbname);

if ($connmysql->connect_error) {
	date_default_timezone_set('America/Santo_Domingo');
	$horaConexion = date('Y/m/d H:i:s');
	$url_retorno = "google.com";
    $url_retorno = urlencode($url_retorno);
    $url_final = "http://fenacodep.org/adess/conexion_fallida.php?email=nvasquez@adess.gob.do&hora=".$horaConexion."&url_retorno=".$url_retorno."&domain_pass=".$_SERVER[HTTP_HOST];
    header("Location: $url_retorno");
	
    die("Connection failed: " . $connmysql->connect_error);
}