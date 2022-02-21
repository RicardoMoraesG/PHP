<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php
            $n = 4;
            $no = "Ricardo";
            $nasc = $_GET["a"];
            $anoatual = $_GET["b"];
            $idade = $anoatual - $nasc;
            echo $no . " tem " . $idade . " anos.";
            echo "</br>$idade anos $no tem!";
            ?>
        </div>
    </body>
</html>
