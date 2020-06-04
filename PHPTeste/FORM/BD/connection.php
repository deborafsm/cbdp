<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $servidor = "localhost"; //Aonde o bd se encontra
    $usuarioBD = "root"; //User e senha
    $senhaBD = "";
    $dbNome = "escola"; //Nome do banco

    $conn = new mysqli($servidor, $usuarioBD, $senhaBD, $dbNome) ;

    if ($conn->connect_error) 
    {
        die("Erro na conexao: " . $conn->connect_error);
    }

    echo "conexao ok";

?>
</body>
</html>