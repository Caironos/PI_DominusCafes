<?php 

    include 'conexao.php';

    $cafe = $_POST ['cafe'];

    $pesquisa = "SELECT `idCafe` FROM `tbCafe`WHERE `nmCafe` LIKE '%". $cafe ."%'";
    $query = myslq_query ( $connx , $pesquisa );

    $result = mysql_fetch_assoc ( $query );

    echo $result;

?>