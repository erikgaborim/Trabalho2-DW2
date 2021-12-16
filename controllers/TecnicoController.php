<?php
  class TecnicoController extends Controller {
    public function listar() {
      $model = new Tecnico();
      $tecnicos = $model->read();
      $dados = array();
      $dados['tecnicos'] = $tecnicos;
      $this->view("listagemTecnico", $dados);
    }

    public function novo() {
      $tecnico = array();
      $tecnico['id'] = 0;
      $tecnico['nome'] = "";
      $tecnico['titulos'] = "";
      $dados = array();
      $dados['tecnico'] = $tecnico;
      $this->view("formularioTecnico", $dados);
    }

    public function editar($id) {
      $model = new Tecnico();
      $tecnico = $model->getById($id);
      $dados = array();
      $dados['tecnico'] = $tecnico;
      $this->view("formularioTecnico", $dados);
    }

    public function excluir($id) {
      $model = new Tecnico();
      $model->delete($id);
      $this->redirect("tecnico/listar");
      //exit();
    }

    public function salvar() {
      $tecnico = array();
      $tecnico['id'] = $_POST['id'];
      $tecnico['nome'] = $_POST['nome'];
      $tecnico['titulos'] = $_POST['titulos'];
      $model = new Tecnico();
      if ($tecnico['id'] == 0) {
        $model->create($tecnico);
      } else {
        $model->update($tecnico);
      }
      $this->redirect("tecnico/listar");
    }
  }
?>
