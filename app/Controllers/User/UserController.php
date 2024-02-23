<?php 

    class UserController {

        private $model;

        public function __construct($model){
            $this->model = $model;
        }
        
        public function index(){
            $users = $this->model->getAllUsers();
            include __DIR__. '/../../Views/index.php';   
        }

        public function showUser($id){
            $user = $this->model->getUserById($id);
            include __DIR__. '/../../Views/showUser.php';
        }

        public function deleteUser($id){
            $user = $this->model->deleteUser($id);
        }

        public function addUser($nome, $cpf, $nasc){
            $user = $this->model->addUser($nome, $cpf, $nasc);
        }

        public function editUser($id, $nome, $cpf, $nasc){
            $user = $this->model->editUser($id, $nome, $cpf, $nasc);
        }


    }

?>