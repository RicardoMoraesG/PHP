<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funções Aritiméticas em PHP</title>
      

    </head>
    <body>
        <div>
            <?php
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo "<h1>
                Valores recebidos 
                $v1 e $v2                 
             </h1>";
            echo "<h2>Valor absoluto é sem considerar o sinal: comando abs(variavel)</h2>";
            echo" valor absoluto de $v2 é " . abs($v2);
            echo "<h2>Exponenciação: comando pow(base, exponenciacao) </h2>";
            echo "O valor de $v1<sup>$v2</sup> é  " . pow($v1, $v2);
            echo "<h2> Raiz: comando .sqrt(variavel) </h2>";
            echo " A raiz de $v1 é " . sqrt($v1);
            echo "<h2></br>Arredondamentos: comando round(variavel)</h2>";
            echo "<h3> o valor de $v2 arredondado é </h3>" . round($v2);
            echo"<h2></br>comando ceil(variavel) sempre arredonda para CIMA</h2>" . ceil($v2);
            echo"<h2></br>comando floor(variavel) sempre arredonda para BAIXO</h2>" . floor($v2);
            echo "</br> Mostra somente a parte inteira: comando intval(variavel): " . intval($v2);
            echo "<h2>O valor em MOEDA: comando number_format(variavel, casas decimais, tipo de separador entre aspas duplas, tipo de separador de milhar)</h2>R$" . number_format($v2, 2,",",".");
            ?>


        </div>
    </body>
</html>
