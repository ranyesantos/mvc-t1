<?php 
    include 'app/Models/UserModel.php';
    include 'app/Controllers/User/UserController.php';
    
    //conexão com banco de dados
    $db = new PDO('mysql:host=localhost;dbname=crud-mvc','root','');
    
    //instanciando o model e concedendo acesso ao banco de dados
    $model = new UserModel($db);
    
    //instanciando o controller e concedendo acesso ao model
    $controller = new UserController($model);

    //$action recebe a ação a ser executada
    $action = isset($_GET['action']) ? ($_GET['action']) : 'index';
    
    //recebe o id de um elemento para que seja realizado alguma ação naquele elemento em específico
    $id = isset($_GET['id']) ? ($_GET['id']) : null;

    switch ($action) {

        case 'index':
            $controller->index();
            break;
        
        case 'showUser':
            $controller->showUser($id);
            break;

        case 'deleteUser':
            $controller->deleteUser($id);
            break;

        default:
            echo "ação inválida";
            break;

    }

    
?> 