<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formularios: Método POST</title>
    </head>
    <body>
        <form action="cadastroCliente.php" method="POST">
            Envia os dados pela url...
            Nome: <input type="text" name="nomecli" placeholder="Digite o nome." required >
            E-mail: <input type="text" name="emailcli" placeholder="Digite o E-mail" required>
            <input type="submit" value="Cadastrar">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>