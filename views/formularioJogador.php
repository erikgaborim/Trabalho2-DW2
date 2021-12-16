<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $modelClube = new Clube();
  $clubes = $modelClube->read();
  $modelSelecao = new Selecao();
  $selecoes = $modelSelecao->read();

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copas do Mundo</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--Fontes-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--CSS's-->
    <link rel="stylesheet" href="<?php echo APP."styles/frm.css";?>">
    <link rel="stylesheet" href="<?php echo APP."styles/frmJogador.css";?>">
    
</head>
<body>

    <main> 
        <form action="<?php echo APP; ?>jogador/salvar" method="post" enctype='multipart/form-data'>
            <h3>Inserir Jogador</h3>
       
            <input readonly type="text" class="form-control" id="id" name="id" value='<?php echo "{$jogador['id']}"; ?>'>

            <input type="text" name="nome" placeholder="Nome Completo" value = '<?php echo "{$jogador['nome']}"
            ?>'required>
            <input type="text" name="apelido" placeholder="Apelido" value = '<?php echo "{$jogador['apelido']}"
            ?>'required>
            <input type="number" name="altura" step="any" placeholder="Altura (Ex: 1.75)" value = '<?php echo "{$jogador['altura']}"
            ?>'required>
            <input type="number" name="peso" step="any" placeholder="Peso (Ex: 89.0)" value = '<?php echo "{$jogador['peso']}"
            ?>' required>
            <input type="text" name="posicao"  placeholder="Posição (Ex: ATA)" value = '<?php echo "{$jogador['posicao']}"
            ?>' required>
            <input type="date" name="data_nascimento"  placeholder="Data de Nascimento" value = '<?php echo "{$jogador['data_nascimento']}"
            ?>' required>
            <!-- <input type="file" accept="image/*" id="arquivo" name="arquivo"> -->
            <select class="form-select" name="id_clube">
            <?php
            foreach ($clubes as $clube) {
              $selected =
                $clube['id'] == $jogador['id_clube'] ?
                'selected': '';
              echo "<option $selected value='{$clube['id']}'>{$clube['nome']}</option>";
            }
           ?>
            </select>
            <select class="form-select" name="id_selecao">
            <?php
            foreach ($selecoes as $selecao) {
              $selected =
                $selecao['id'] == $jogador['id_selecao'] ?
                'selected': '';
              echo "<option $selected value='{$selecao['id']}'>{$selecao['nome']}</option>";
            }
            ?>
        </select> 
            <input type="submit" name="acao" value="Enviar">
            <!-- <p>Teste</p> -->
        </form>
    </main>

    <footer class="rodape">
        &copy; <a href="http://https://github.com/dsgsantos1">Daniel dos Santos</a>, <a href="http://https://github.com/erikgaborim">Erik Gaborim</a> e <a href="http://https://github.com/maikolaMS">Maike Mendes</a> - 2021
    </footer>
    
</body>
</html>