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
      $this->view("formularioJogador", $dados);
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
      // $jogador['imagem'] = $_POST['imagem'];

      // if (isset($_FILES['arquivo']) && $_FILES['arquivo']['size'] != 0) {
      //   $arquivo = $_FILES['arquivo'];
      //   $nomeArquivo = $arquivo['name'];
      //   $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION); //extensão do arquivo

      //   // sha1 - funcao que gera nome de arquivo de tamanho 40
      //   $nomeArquivoSalvo = sha1(time()).".".$extensao;

      //   $arquivoTemporario = $arquivo['tmp_name'];

      //   // move da pasta temporaria do apache para a pasta imagens
      //   $caminho = APP;
      //   move_uploaded_file($arquivoTemporario, "$caminho/images/".$nomeArquivoSalvo);

      //   // apagar o arquivo anterior da categoria
      //   if ($jogador['imagem'] != "") {
      //     unlink('images/'.$jogador['imagem']);
      //   }
      //   $jogador['imagem'] = $nomeArquivoSalvo;
      // }

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
