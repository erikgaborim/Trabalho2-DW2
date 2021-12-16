<?php
  class PartidaController extends Controller {
    public function listar() {
      $model = new Partida();
      $partidas = $model->read();
      $dados = array();
      $dados['partidas'] = $partidas;
      $this->view("listagemPartida", $dados);
    }

    public function novo() {
      $partida = array();
      $partida['id'] = 0;
      $partida['tipo'] = "";
      $partida['estadio'] = "";
      $partida['horario'] = "";
      $partida['id_selecao'] = "";
      $dados = array();
      $dados['partida'] = $partida;
      $this->view("formularioPartida", $dados);
    }

    public function editar($id) {
      $model = new Partida();
      $partida = $model->getById($id);
      $dados = array();
      $dados['partida'] = $partida;
      $this->view("formularioPartida", $dados);
    }

    public function excluir($id) {
      $model = new Partida();
      $model->delete($id);
      $this->redirect("partida/listar");
      //exit();
    }

    public function salvar() {
      $partida = array();
      $partida['id'] = $_POST['id'];
      $partida['tipo'] = $_POST['tipo'];
      $partida['estadio'] = $_POST['estadio'];
      $partida['horario'] = $_POST['horario'];
      $partida['id_selecao1'] = $_POST['id_selecao1'];
      $partida['id_selecao2'] = $_POST['id_selecao2'];
      $model = new Partida();
      if ($partida['id'] == 0) {
        $model->create($partida);
      } else {
        $model->update($partida);
      }
      $this->redirect("partida/listar");
    }
  }
?>
