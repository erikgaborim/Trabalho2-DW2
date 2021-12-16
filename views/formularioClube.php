<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
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
        <form action="<?php echo APP; ?>clube/salvar" method="post">
            <h3>Inserir Clube</h3>
            <input readonly type="text" class="form-control" id="id" name="id" value='<?php echo "{$clube['id']}"; ?>'>
            <input type="text" name="nome" placeholder="Nome" value='<?php echo "{$clube['nome']}"; ?>' required>
            <input type="number" name="titulos"  placeholder="Títulos" value='<?php echo "{$clube['titulos']}"; ?>'required>
            <input type="submit" name="acao" value="Enviar">
        </form>
    </main>

    <footer class="rodape">
        &copy; <a href="http://https://github.com/dsgsantos1">Daniel dos Santos</a>, <a href="http://https://github.com/erikgaborim">Erik Gaborim</a> e <a href="http://https://github.com/maikolaMS">Maike Mendes</a> - 2021
    </footer>
    
</body>
</html>