<?php 

    class UserModel {
        
        private $db;

        public function __construct($db){
            $this->db = $db;
        }

        public function getAllUsers(){
            $query = "SELECT * FROM clients";
            $stmt = $this->db->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getUserById($id){
            $query = "SELECT * FROM clients WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->execute(array(":id" => $id));
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function deleteUser($id){
            $query = "DELETE FROM clients WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->execute(array(":id" => $id));
            header('Location:index.php');
        }

        public function addUser($nome, $cpf, $nasc){
            $query = "INSERT INTO clients (nome, cpf, nasc) VALUES (:nome, :cpf, :nasc)";
            $stmt = $this->db->prepare($query);
            $stmt->execute(array(":nome" => $nome, ":cpf" => $cpf, ":nasc" => $nasc));
            header('Location:index.php');
        }

        public function editUser($id, $nome, $cpf, $nasc){
            $query = "UPDATE clients SET nome = :nome, cpf = :cpf, nasc = :nasc WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->execute(array(":nome" => $nome, ":cpf" => $cpf, ":nasc" => $nasc, ":id" => $id));
            header('Location:index.php');
        }
    }

?>