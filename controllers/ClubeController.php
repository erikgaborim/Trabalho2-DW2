<?php
  class ClubeController extends Controller {
    public function listar() {
      $model = new Clube();
      $clubes = $model->read();
      $dados = array();
      $dados['clubes'] = $clubes;
      $this->view("listagemClube", $dados);
    }

    public function novo() {
      $clube = array();
      $clube['id'] = 0;
      $clube['nome'] = "";
      $clube['titulos'] = "";
      $dados = array();
      $dados['clube'] = $clube;
      $this->view("formularioClube", $dados);
    }

    public function editar($id) {
      $model = new Clube();
      $clube = $model->getById($id);
      $dados = array();
      $dados['clube'] = $clube;
      $this->view("formularioClube", $dados);
    }

    public function excluir($id) {
      $model = new Clube();
      $model->delete($id);
      $this->redirect("clube/listar");
      //exit();

    }

    public function salvar() {
      $clube = array();
      $clube['id'] = $_POST['id'];
      $clube['nome'] = $_POST['nome'];
      $clube['titulos'] = $_POST['titulos'];
      $model = new Clube();
      if ($clube['id'] == 0) {
        $model->create($clube);
      } else {
        $model->update($clube);
      }
      $this->redirect("clube/listar");
    }
  }
?>
