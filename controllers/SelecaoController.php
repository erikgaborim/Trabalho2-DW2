<?php
  class SelecaoController extends Controller {
    public function listar() {
      $model = new Selecao();
      $selecoes = $model->read();
      $dados = array();
      $dados['selecoes'] = $selecoes;
      $this->view("listagemSelecao", $dados);
    }

    public function novo() {
      $selecao = array();
      $selecao['id'] = 0;
      $selecao['nome'] = "";
      $selecao['titulos'] = "";
      $selecao['participacao'] = "";
      $selecao['posicao'] = "";
      $selecao['id_tecnico'] = "";
      $dados = array();
      $dados['selecao'] = $selecao;
      $this->view("formularioSelecao", $dados);
    }
    
    public function editar($id) {
      $model = new Selecao();
      $selecao = $model->getById($id);
      $dados = array();
      $dados['selecao'] = $selecao;
      $this->view("formularioSelecao", $dados);
    }

    public function excluir($id) {
      $model = new Selecao();
      $model->delete($id);
      $this->redirect("selecao/listar");
      //exit();

    }

    public function salvar() {
      $selecao = array();
      $selecao['id'] = $_POST['id'];
      $selecao['nome'] = $_POST['nome'];
      $selecao['titulos'] = $_POST['titulos'];
      $selecao['participacao'] = $_POST['participacao'];
      $selecao['posicao'] = $_POST['posicao'];
      $selecao['id_tecnico'] = $_POST['id_tecnico'];
      $model = new Selecao();
      if ($selecao['id'] == 0) {
        $model->create($selecao);
      } else {
        $model->update($selecao);
      }
      $this->redirect("selecao/listar");
    }
  }
?>
