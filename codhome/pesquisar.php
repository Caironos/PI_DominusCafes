<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "produto";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['nmCafe'];
   $result_cafe = "SELECT * FROM tbcafe WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cafe = mysqli_query($conn, $result_cafe);
    
    while($rows_cafe = mysqli_fetch_array($resultado_cafe)){
        echo "Nome do cafe: ".$rows_cafe['nome']."<br>";
    }
?>
</body>
</html>