<?php
include("conecta.php");



$nome=$_POST['nome'];
$idade=$_POST['idade'];
$endereco=$_POST['endereco'];
$telefone=$_POST['telefone'];
$responsavel=$_POST['responsavel'];
$cpf=$_POST['cpf'];

function Enviar_Dados($conexao,$nome, $idade, $endereco, $telefone, $responsavel, $cpf) {
    try {
        mysqli_query($conexao, "INSERT INTO alunos (Nome, Idade, Endereco, Telefone, Responsavel, CPF) VALUES ('$nome', '$idade', '$endereco', '$telefone', '$responsavel', '$cpf')");
    } catch (Exception $e) {
        echo "Erro ao salvar aluno: $e";
    }
}

if ($idade>=18) {
    Enviar_Dados($conexao,$nome, $idade, $endereco, $telefone, $responsavel, $cpf);
} else {
    echo "Apenas para maiores.";
}
?>