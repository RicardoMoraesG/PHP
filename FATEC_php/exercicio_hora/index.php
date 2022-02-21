<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hora Certa</title>
    </head>
    <body>
        <?php
        // put your code here
        date_default_timezone_set("America/Sao_Paulo");
        echo "Agora são " . date("H:i");
        $hora = date("H");
        if ($hora <= 12) {
            echo "<h2 style='color:red'> Bom dia! </h2>";
        } elseif ($hora < 18) {

            echo "<h2 style='color:green'> Boa tarde! </h2>";
        } else
        echo "<h2 style='color:blue'> Boa noite! </h2>";
        ?>
    </body>
</html>
