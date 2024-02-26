<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" />
    <link rel="stylesheet" href="lista.css">
    <title>Listagem</title>
</head>
<body>
    <h1 class="titulo">Listagem de Alunos</h1>
    <table width="100%" class="tabela" cellspacing="0">
        <tr align="center" bgcolor="#EEEEEE">
            <td>ID</td>
            <td>Nome</td>
            <td>Idade</td>
            <td>Endereço</td>
            <td>Telefone</td>
            <td>Responsável</td>
            <td>CPF</td>
            <td>Data</td>
            <td colspan="2">Ação</td>
        </tr>
        <?php
        include ("conecta.php");
        $dados=mysqli_query($conexao, "SELECT * FROM alunos");
        while($item=mysqli_fetch_array($dados)){
            ?>
            <tr>
                <td><?=$item["id_alunos"]?></td>
                <td><?=$item["Nome"]?></td>
                <td><?=$item["Idade"]?></td>
                <td><?=$item["Endereco"]?></td>
                <td><?=$item["Telefone"]?></td>
                <td><?=$item["Responsavel"]?></td>
                <td><?=$item["CPF"]?></td>
                <td><?=$item["data_ent"]?></td>
                <td><a href="editar_alunos.php?id=<?=$item["id_alunos"]?>"><i class="fa fa-pencil"></i></td>
                <td><a href="excluir_alunos.php?id=<?=$item["id_alunos"]?>"><i class="fa fa-trash"></i></td>
            </tr>

       <?php } ?>


    </table>
    
</body>
</html>
