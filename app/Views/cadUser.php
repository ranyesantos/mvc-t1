<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <form action="../../index.php?action=addUser" method="POST">
        
        <input type="text" name="nome">
        <label for="nome">nome</label>
        
        <input type="number" name="cpf">
        <label for="cpf">cpf</label>

        <input type="text" name="nasc">
        <label for="nasc">nasc</label>
        
        <button type="submit">enviar</button>

    </form>
</body>
</html>