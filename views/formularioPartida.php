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
    <link rel="stylesheet" href="<?php echo APP."styles/frmpartida.css";?>">

</head>
<body>

    <main>
        <form action="<?php echo APP; ?>partida/salvar" method="post">
            <h3>Inserir Partida</h3>
            <input readonly type="text" class="form-control" id="id" name="id" value='<?php echo "{$partida['id']}"; ?>'>

            <input type="text" name="estadio" placeholder="Estadio" value = '<?php echo "{$partida['estadio']}"
            ?>'required>
            <select class="form-select" name="tipo">
                    <option value = "Amistoso">Amistoso</option>
                    <option value = "Fase de Grupos - 1° rodada">Fase de Grupos - 1° rodada</option>
                    <option value = "Fase de Grupos - 2° rodada">Fase de Grupos - 2° rodada</option>
                    <option value = "Fase de Grupos - 3° rodada">Fase de Grupos - 3° rodada</option>
                    <option value = "Oitavas de final">Oitavas de final</option>
                    <option value = "Quartas de final">Quartas de final</option>
                    <option value = "Semifinal">Semifinal</option>
                    <option value = "Disputa por 3° lugar">Disputa por 3° lugar</option>
                    <option value = "Final">Final</option>
                </select>
            <input type="date" name="horario" placeholder="Horário" value = '<?php echo "{$partida['horario']}"
            ?>'required>
            <select class="form-select" name="id_selecao1">
            <?php
            foreach ($selecoes as $selecao) {
              $selected =
                $selecao['id'] == $partida['id_selecao1'] ?
                'selected': '';
              echo "<option $selected value='{$selecao['id']}'>{$selecao['nome']}</option>";
            }
            ?>
            </select>
            <select class="form-select" name="id_selecao2">
            <?php
            foreach ($selecoes as $selecao) {
              $selected =
                $selecao['id'] == $partida['id_selecao2'] ?
                'selected': '';
              echo "<option $selected value='{$selecao['id']}'>{$selecao['nome']}</option>";
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
