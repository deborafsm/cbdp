<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php 
        include './conec.php';
        $conn = getConnection(); //Pega a conexao
        $sql = 'INSERT INTO alunos (nome,idade) VALUES (?,?)';//Query
        $stmt = $conn->prepare($sql);
        //Passando dados diretamente no banco de dados
        $stmt -> bindValue(1,'Nick');
        $stmt -> bindValue(2,'24');
        if($stmt ->execute()){
            echo'Salvo com sucesso';
        }else{
            echo 'Erro ao salvar';
        }
    ?>
    
</body>
</html>