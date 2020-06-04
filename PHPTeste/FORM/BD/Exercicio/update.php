<?php 

        include './conec.php';
        $conn = getConnection(); //Pega a conexao
        $rm = $_POST['rm'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        $sql = "UPDATE alunos SET 
        nome = '".$nome."', idade = '".$idade."'
        WHERE rm = ".$rm;
        $stmt = $conn->prepare($sql);
        //Passando dados atraves do Formulario para o  banco de dados
        $stmt -> bindParam(1,$rm);
        $stmt -> bindParam(2,$nome);
        $stmt -> bindParam(3,$idade); 
        if($stmt ->execute()){
            echo'Salvo com sucesso';
        }else{
            echo 'Erro ao salvar';
        }
    ?>