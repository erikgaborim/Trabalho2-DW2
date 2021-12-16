<?php
  if (!isset($_SESSION)) {
    session_start();
  }
  if (isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];
    $model = new Usuario();
    $usuarioLogado = $model->getById($id_usuario);
  } else {
    $usuarioLogado['email'] = "Não Logado";
    $usuarioLogado['id'] = 0;
    if ($arquivo != "views/login.php" && $arquivo != "views/index.php") {
      header("location: ".APP."login/login");
      exit(0);
    }
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copa do Mundo</title>

    <!--Google Fonts API-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--Fontes-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--CSS's-->
    <link rel="stylesheet" href="<?php echo APP."styles/template.css";?>">
    <link rel="stylesheet" href="<?php echo APP."styles/main.css";?>">
    <link rel="stylesheet" href="<?php echo APP."styles/main_template.css";?>">

</head>
<body>
    <header>
        <ul>
            <div id="div-header-qatar">
                <li><h1 id="qatar-name">QATAR</h1></li>
            </div>
            <div id="div-header-options">
                <li><a href="<?php echo APP."index/index";?>"><h3>Home</h3></a></li>
                <li><a href="<?php echo APP."jogador/listar";?>"><h3>Jogadores</h3></a></li>
                <li><a href="<?php echo APP."selecao/listar";?>"><h3>Seleções</h3></a></li>
                <li><a href="<?php echo APP."clube/listar";?>"><h3>Clubes</h3></a></li>
                <li><a href="<?php echo APP."tecnico/listar";?>"><h3>Técnicos</h3></a></li>
                <li><a href="<?php echo APP."partida/listar";?>"><h3>Partidas</h3></a></li>
                <li>
                  <?php
                    $caminho = APP;
                    if ($usuarioLogado['id']!=0) {
                        echo "<a class='nav-link active' aria-current='page' href='$caminho/login/logout'><h3>Sair</h3></a>";
                    } else {
                      echo "<a class='nav-link active' aria-current='page' href='$caminho/login/login'><h3>Entrar</h3></a>";
                    }
                  ?>

                </li>
                <li><img src="<?php echo APP."images/logo-copa.svg";?>" alt="simbolo_copa_catar"></li>
            </div>
        </ul>
    </header>
    <main>
        <div class="container-fluid">
        <?php
          if (isset($arquivo)) {
            require_once $arquivo;
          }
         ?>
    </div>
    </main>
</body>
</html>