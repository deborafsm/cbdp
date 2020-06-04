<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**
     * @author Deb.Px! (Debora Freire)
     * @return \PDO
     */
        function getConnection(){
            //Variaveis de conexao 
            $dns = 'mysql:host=localhost;dbname=escola;charset=utf8';//Aonde esta meu bd
            $user = 'root';//user
            $pass = '';//Senha
           
            try{ //Tenta conexao
                $pdo = new PDO($dns,$user,$pass); //PDO com variaveis 
                return $pdo; //Retorna pdo
            }catch(PDOException $ex){
                echo 'Erro: '.$ex ->getMessage();//Mostra erro com a mensagem
            }
        }
    ?>
</body>
</html>