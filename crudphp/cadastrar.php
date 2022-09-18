<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>

<body>
    <h1>Cadastrar usuario</h1>

    <form method="POST" action="cadastrar_action.php">

        <label>
            Nome: <input type="text" name="nome" require />
        </label>
        <label>
            Email: <input type="email" name="email" require />
        </label>
        <input type="submit" value="Cadastrar" />

    </form>

</body>

</html>