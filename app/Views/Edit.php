<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar</h1>
    <ul>
        <form action="../../index.php?action=editUser&id=<?= $_POST['id']?>" method="POST">

            <input type="hidden" name="id" value="<?= $_POST['id']?>">

            <label for="nome">nome:</label>
            <input type="text" name="nome" value="<?=$_POST['nome']?>">
            
            <label for="cpf">cpf:</label>
            <input type="number" name="cpf" value="<?=$_POST['cpf']?>">

            <label for="nasc">nasc:</label>
            <input type="text" name="nasc" value="<?=($_POST['nasc'])?>"> 
            
            <button type="submit">enviar</button>

        </form>
    </ul>
</body>
</html>