<?php
//Definir a classe
class User {
    public $id;
    public $nome;
    public $idade;
    public $tarefas;


    //métodos que vou utilizar na classe
    public function printName($nome) {
        echo $nome;
    }
}

//Fazer a interface do usuario dao
//Aqui defini todos os metodos que o userDao vai utilizar para se comunicar com o banco de dados
interface UserDaoInterface {
    public function buildUser($data);
    public function create(User $user, $authUser = false);
    public function criarTarefa(User $user);
}
