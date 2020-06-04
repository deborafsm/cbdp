<?php 

        include './conec.php';
        $conn = getConnection(); //Pega a conexao

        $rm = $_POST['rm'];
        

        $sql = 'DELETE FROM alunos WHERE rm = :rm';//Query
       
        $stmt = $conn->prepare($sql);
        //Passando dados atraves do Formulario para o  banco de dados
        $stmt -> bindParam(':rm',$rm);
       
        if($stmt ->execute()){
            echo'Excluido com sucesso';
        }else{
            echo 'Erro ao salvar';
        }
?>
