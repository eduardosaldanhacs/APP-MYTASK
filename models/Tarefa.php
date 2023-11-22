<?php

class Tarefa {
    public $id;
    public $id_status;
    public $tarefa;
    public $data_cadastro;
}

interface TarefaDaoInterface {
    public function preencherTarefa($data);
    public function criar(Tarefa $tarefa);
    public function recuperarTarefa();
}
