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
        <?php foreach ($users as $user){?>
            <li>
                Nome: <?= $user['nome']?> <br>
                CPF: <?= $user['cpf']?> <br>
                Data de Nascimento: <?=(new DateTime($user['nasc']))->format('d/m/Y')?> <br>
                <button>
                    <a href="index.php?action=showUser&id=<?= $user['id']?>">
                        Ver detalhes
                    </a>
                <button>
                    <a href="index.php?action=deleteUser&id=<?= $user['id']?>">
                        excluir usuário
                    </a>
                </button>
                <hr>
                <br>
            </li>
        <?php }?>
    </ul>
</body>
</html>