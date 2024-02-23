<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detalhes</h1>
    <ul>
        <li>
            Nome: <?= $user['nome']?> <br>
            CPF: <?= $user['cpf']?> <br>
            Data de Nascimento: <?= $user['nasc']?> <br>
            <button>
                <a href="index.php?action=deleteUser&id=<?= $user['id']?>">
                    apagar
                </a>
            </button>
            <form action="app/views/edit.php" method="POST">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <input type="hidden" name="nome" value="<?= $user['nome'] ?>">
                <input type="hidden" name="cpf" value="<?= $user['cpf'] ?>">
                <input type="hidden" name="nasc" value="<?= $user['nasc'] ?>">
                <button type="submit">Editar</button>
            </form>
        </li>
    </ul>
</body>
</html>