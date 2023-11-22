<?php

    require_once("models/User.php");


//Implementar os metodos definidos na interface
    class UserDAO implements UserDaoInterface {

        private $conn;
        private $url;
        private $message;

        public function __construct(PDO $conn, $url) {
            $this->conn = $conn;
            $this->url = $url;
          }

        public function buildUser($data)
        {
            $user = new User;

            $user->id = $data["id"];
            $user->nome = $data["nome"];
            $user->idade = $data["idade"];

            return $user;
        }

        public function create(User $user, $authUser = false) {
        
            $stmt = $this->conn->prepare("INSERT INTO tb_pessoas(
                nome, idade) VALUES (
                :nome, :idade)");

            
            $stmt->bindParam(":nome", $user->nome);
            $stmt->bindParam(":idade", $user->idade);

            $stmt->execute();
        }

        public function criarTarefa(User $user) {
            $stmt = $this->conn->prepare("UPDATE tb_pessoas SET tarefas");

            $stmt->bindParam(":tarefas", $user->tarefas);
            $stmt->execute();

        }
    }
