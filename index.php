<?php include ("conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
        <title>Cadastro</title>
    </head>
    <body>

        <h1>Cadastro De Usuario</h1>

         <?php
             if(isset($_SESSION['msg'])){
             echo $_SESSION['msg'];
             unset($_SESSION['msg']); 
             }
             
          ?>
        <form method="POST" action="processa.php">
            <label>Nome: </label>
            <input type="text" name="nome" placeholder="Digitar o Nome Completo"><br><br>

            <label>E-mail: </label>
            <input type="email" name="email" placeholder="Digite Seu Email"><br><br>

            <input type="submit" value="Cadastrar">


        </form>
    </body>
</html>