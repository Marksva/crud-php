<?php

require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuario");
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <h1 class="text-center">Listagem de Usuários</h1>

    <hr>

    <div class="form-floating mb-3 d-flex justify-content-center">
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>

            <?php foreach ($lista as $usuario) : ?>
                <tr>
                    <td> <?= $usuario['id'] ?> </td>
                    <td> <?= $usuario['nome'] ?> </td>
                    <td> <?= $usuario['email'] ?> </td>
                    <td>
                        <a href="editar.php?id=<?= $usuario['id']; 
                                                ?>"> [Editar] </a>
                        <a href="excluir.php?id=<?= $usuario['id']; 
                                                ?>"> [Excluir] </a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>

    <a href="cadastrar.php" class="d-flex justify-content-center">Cadastrar Usuário</a>

</body>

</html>