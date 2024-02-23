<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>users list</h1>
    <ul>
        <li>
            Nome: <?= $user['nome']?> <br>
            CPF: <?= $user['cpf']?> <br>
            Data de Nascimento: <?=(new DateTime($user['nasc']))->format('d/m/Y')?> <br>
            <button>
                <a href="index.php?action=deleteUser&id=<?= $user['id']?>">
                    apagar
                </a>
            </button>
        </li>
    </ul>
</body>
</html>