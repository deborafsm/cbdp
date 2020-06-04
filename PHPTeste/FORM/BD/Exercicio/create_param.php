<?php 

        include './conec.php';
        $conn = getConnection(); //Pega a conexao

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        $sql = 'INSERT INTO alunos (nome,idade) VALUES (:nome,:idade)';//Query
       
        $stmt = $conn->prepare($sql);
        //Passando dados atraves do Formulario para o  banco de dados
        $stmt -> bindParam(':nome',$nome);
        $stmt -> bindParam(':idade',$idade);
        if($stmt ->execute()){
            echo'Salvo com sucesso';
        }else{
            echo 'Erro ao salvar';
        }
?>