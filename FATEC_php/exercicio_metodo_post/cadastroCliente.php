<?php


/*
echo '<PRE>';//formata cada informação em uma linha.
print_r($_POST);//Superglobal GET: joga o conteúdo na tela.
echo '<br></br>';
var_dump($_POST);//Superglobal GET: joga o conteúdo na tela.
echo '</PRE>';
die("Parou no die");//para de executar o script, se tiver mensagem dentro, aparece na tela.
*/
$nome = $_POST['nomecli'];
$email = $_POST['emailcli'];

echo "<h1>PHP - Recebendo os dados via POST</h1>";
echo "Nome do Cliente: {$nome}<br>";
echo "<h3> E-mail: $email</h3>";