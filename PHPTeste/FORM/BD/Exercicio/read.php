<?php
    include './conec.php';
    $conn = getConnection();
    $sql = "SELECT nome,idade FROM alunos";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $result = $stmt ->fetchAll();
    foreach($conn -> query($sql) as $row){
       print $row['nome'];
       print $row['idade']."<br>" ;
    }
?>
