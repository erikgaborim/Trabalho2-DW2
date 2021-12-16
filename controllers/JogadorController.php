<?php
  class JogadorController extends Controller {
    public function listar() {
      $model = new Jogador();
      $jogadores = $model->read();
      $dados = array();
      $dados['jogadores'] = $jogadores;
      $this->view("listagemJogador", $dados);
    }

    public function novo() {
      $jogador = array();
      $jogador['id'] = 0;
      $jogador['nome'] = "";
      $jogador['apelido'] = "";
      $jogador['altura'] = "";
      $jogador['peso'] = "";
      $jogador['posicao'] = "";
      $jogador['data_nascimento'] = "";
      $jogador['id_clube'] = "";
      $jogador['id_selecao'] = "";
      $dados = array();
      $dados['jogador'] = $jogador;
      $this->view("formularioJogador", $dados);
    }

    public function editar($id) {
      $model = new Jogador();
      $jogador = $model->getById($id);
      $dados = array();
      $dados['jogador'] = $jogador;
      $this->view("formulariojogador", $dados);
    }

    public function excluir($id) {
      $model = new Jogador();
      $model->delete($id);
      $this->redirect("jogador/listar");
      //exit();

    }

    public function salvar() {
      $jogador = array();
      $jogador['id'] = $_POST['id'];
      $jogador['nome'] = $_POST['nome'];
      $jogador['apelido'] = $_POST['apelido'];
      $jogador['altura'] = $_POST['altura'];
      $jogador['peso'] = $_POST['peso'];
      $jogador['posicao'] = $_POST['posicao'];
      $jogador['data_nascimento'] = $_POST['data_nascimento'];
      $jogador['id_clube'] = $_POST['id_clube'];
      $jogador['id_selecao'] = $_POST['id_selecao'];
      $model = new Jogador();
      if ($jogador['id'] == 0) {
        $model->create($jogador);
      } else {
        $model->update($jogador);
      }
      $this->redirect("jogador/listar");
    }
  }
?>
