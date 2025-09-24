<?php

$dbHost = 'Localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'formandos';

    $conexao = new mysqli($dbHost,$dbUser,$dbPassword,$dbName);

    /*if($conexao->connect_errno)
    {
        echo "erro";
    }
    else{
        echo"funfou";
    }*/

?>