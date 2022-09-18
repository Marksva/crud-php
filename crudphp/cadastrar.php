<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center">Cadastrar Usuário</h1>

    <div class="form-floating mb-3 d-flex justify-content-center">
        <form method="POST" action="cadastrar_action.php">

            <label for="nome" class="mt-2">Nome:</label>
            <input class="form-control shadow-lg" style="width: 300px;" type="text" name="nome" placeholder="Nome" />

            <label for="email" class="mt-2">Email:</label>
            <input class="form-control shadow-lg" id="email" placeholder="name@example.com" type="email" name="email" />

            <div class="d-flex justify-content-center mt-3">
                <input type="submit" class="btn btn-outline-success m-1 shadow-lg" value="Salvar" />
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>