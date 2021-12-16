<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $modelTecnico = new Tecnico();
  $tecnicos = $modelTecnico->read();

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
    <link rel="stylesheet" href="<?php echo APP."styles/frmSelecao.css";?>">
</head>
<body>
    <main> 
        <form action="<?php echo APP; ?>selecao/salvar" method="post">
            <h3>Inserir Seleção</h3>
            <input readonly type="text" class="form-control" id="id" name="id" value='<?php echo "{$selecao['id']}"; ?>'>
            <input type="text" name="nome" placeholder="Nome" value='<?php echo "{$selecao['nome']}"; ?>' required>
            <input type="number" name="titulos"  placeholder="Quantidade de Copas" value='<?php echo "{$selecao['titulos']}"; ?>'required>
            <input type="number" name="participacao" placeholder="Participação em Copas" value='<?php echo "{$selecao['participacao']}"; ?>'required>
            <input type="number" name="posicao"  placeholder="Posição no Ranking FIFA" value='<?php echo "{$selecao['posicao']}"; ?>' required>
            <select class="form-select" name="id_tecnico" value='<?php echo "{$selecao['id_tecnico']}"; ?>'>
          <?php
            foreach ($tecnicos as $tecnico) {
              $selected =
                $tecnico['id'] == $selecao['id_tecnico'] ?
                'selected': '';
              echo "<option $selected value='{$tecnico['id']}'>{$tecnico['nome']}</option>";
            }
           ?>
        </select>
            <input type="submit" name="acao" value="Enviar">
        </form>
    </main>

    <footer class="rodape">
        &copy; <a href="http://https://github.com/dsgsantos1">Daniel dos Santos</a>, <a href="http://https://github.com/erikgaborim">Erik Gaborim</a> e <a href="http://https://github.com/maikolaMS">Maike Mendes</a> - 2021
    </footer>
    
</body>
</html>