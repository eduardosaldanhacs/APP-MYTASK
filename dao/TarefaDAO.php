<?php

require_once("models/Tarefa.php");
require_once("db.php");

class TarefaDAO implements TarefaDaoInterface {
    private $conn;
    private $url;
    private $message;

    public function __construct(PDO $conn, $url) {
        $this->conn = $conn;
        $this->url = $url;
    }

    public function preencherTarefa($data) {
        
        $tarefa = new Tarefa;

        $tarefa->id = $data['id'];
        $tarefa->id_status = $data['id_status'];
        $tarefa->tarefa = $data['tarefa'];

        return $tarefa;
        
    }

    public function criar(Tarefa $tarefa) {
       
        $stmt = $this->conn->prepare("INSERT INTO tb_tarefas(tarefa) VALUES (:tarefa)");

            
            $stmt->bindParam(":tarefa", $tarefa->tarefa);

            $stmt->execute();
        }

    public function recuperarTarefa() {
        $tarefas = [];

        $stmt = $this->conn->prepare("SELECT * FROM tb_tarefas WHERE id_status = 1");

        $stmt->execute();


        $tarefas = $stmt->fetchAll();
        return $tarefas;
        
    }    

    public function removerTarefa($id) {
        $stmt = $this->conn->prepare("DELETE FROM tb_tarefas WHERE id = $id");

        $stmt->execute();
    }

    public function concluirTarefa($id) {
        $stmt = $this->conn->prepare("UPDATE tb_tarefas SET id_status = 2 WHERE id = $id");

        $stmt->execute();
    }
      
    public function recuperarTodasTarefa() {
        $tarefas = [];

        $stmt = $this->conn->prepare("SELECT * FROM tb_tarefas WHERE id_status = 1 OR 2");

        $stmt->execute();


        $tarefas = $stmt->fetchAll();
        return $tarefas;
        
    }
}
