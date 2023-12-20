<?php

class Tarefa {
    public $id;
    public $id_status;
    public $tarefa;
    public $data_cadastro;

    public function formataData($data_cadastrada) {
        $dataFormatada = date('d/m/Y', strtotime($data_cadastrada));
        return $dataFormatada;
    }

    public function situacaoStatus($id_status) {
        if($id_status == 2) {
            $status = "Concluido";
        } else {
            $status = "Pendente";
        } return $status;
    }
}

interface TarefaDaoInterface {
    public function preencherTarefa($data);
    public function criar(Tarefa $tarefa);
    public function atualizar($id, $id_status, $tarefa);
    public function recuperarTarefaNaoConcluida();
    public function recuperarTarefaId($id);
}
