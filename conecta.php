<?php
$host="localhost";
$usuario="root";
$senha="";
$bco="escola";


try {
    $conexao=mysqli_connect($host,$usuario,$senha,$bco);
} catch (Exception $e) {
    echo "Conexão falhou.";
}
?>