<html lang="en">
<head>
    <title>LISTAR</title>
</head>
<body>
   <h2>Listar Alunos</h2>
   <?php 
        

        $con = mysqli_connect('localhost', 'root', '');
        if (!$con) {//Se não for possivel estabelecer a ligação com o banco de dados
            echo '<p> Falha na ligação.';
        }
        mysqli_select_db($con,'escola');//Seleciona o banco de dados
        $select = 'select * from alunos'; //Query para seleção de tabela
        $result =mysqli_query($con,$select);//liga e executa a query
        $registros = mysqli_num_rows($result); //numero de registros encontrados "count"
        echo "Nº de registos encontrados:  $registros";
    ?>
    <!-- Criação da tabela -->
    <br><table border="1">
        <tr> 
            <td>Código
            <td>Nome 
            <td>idade
        </tr>
    <?php
        /*faz uma contagem de dados no banco de dados enquanto o contador
         for menor que registros ele incrementa mais um percorrendo pelos dados*/
        for($i=0; $i<$registros;$i++){
            $registros =mysqli_fetch_assoc($result);
            echo '<tr>';
            echo '<td>'.$registros['cod'].'</td>';
            echo '<td>'.$registros['nome'].'</td>';
            echo '<td>'.$registros['idade'].'</td>';
            echo '</tr>'; echo '</p>';
        }
    ?>
    <table>
        <br>
        <a href="index.html"> voltar </a>
    </table>
        

</body>
</html>