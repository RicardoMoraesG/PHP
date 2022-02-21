<?php

echo md5("123");
echo '<br>';
echo md5("321");
echo '<br>';
echo md5("ricardo");
echo '<br>';
echo md5("Ricardo");
echo '<br><br>';

echo "senha:";
$senha = md5("senha");
echo '<br>';
echo 'sha1() = ' . sha1($senha);
echo '<br>';
echo 'base64_encode() = ' . base64_encode($senha);
echo '<br>';
echo 'base64_decode = ' . base64_decode($senha);
echo '<br>';
