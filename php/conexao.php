<?php
global $mysqli;

$host = 'localhost';
$user = 'root';
$passwd = '';
$data = 'dominuscafes';

$connection = mysqli_connect($host,$user,$passwd,$data) or die ("Não foi possível conectar.");

?>