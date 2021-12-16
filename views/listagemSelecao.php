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
    <title>Selecao</title>

    <!--Google Fonts API-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--Fontes-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="<?php echo APP."styles/selecao.css";?>">

</head>
<body>
    <main>
         <section>

            <?php 

                foreach ($selecoes as $selecao){
                    $caminho = APP;
                    foreach ($tecnicos as $tecnico){
                        if($tecnico['id'] == $selecao['id_tecnico']){
                          $tecnico_nome = $tecnico['nome']; 
                        }
                      }
                    echo" 
                        <div class = 'card'>

                            <img class = 'selecao' src = '../images/selecao-icon.jpeg'>

                            <div class='content'>

                                <h2>{$selecao['nome']}</h2>
                            
                                <div class='text'>
                                    <p class='atributo'>Tecnico</p> 
                                    <p class='valor'>{$tecnico_nome}</p>
                                </div>

                                <div class='text'>
                                    <p class='atributo'>Copas do Mundo</p> 
                                    <p class='valor'>{$selecao['titulos']}</p>
                                </div>

                                <div class='text'>
                                    <p class='atributo'>Participação em copas</p> 
                                    <p class='valor'>{$selecao['participacao']}</p>
                                </div>

                                <div class='text'>
                                    <p class='atributo'>Ranking FIFA</p> 
                                    <p class='valor'>{$selecao['posicao']}º</p>
                                </div>

                                <div class='div-buttons'>
                                    <a href='$caminho/selecao/editar/{$selecao['id']}'><button class='crud-buttons update-button'>Alterar</button></a>
                                    <a href='$caminho/selecao/excluir/{$selecao['id']}'><button class='crud-buttons delete-button'>Excluir</button></a>
                                </div>

                            </div>

                        </div>";
                }
            ?>
             <!-- <div class = "card">

                <img class = "selecao" src = "../images/selecao-icon.jpeg">

                <div class="content">

                    <h2>Brasil</h2>
                
                    <div class="text">
                        <p class="atributo">Tecnico</p> 
                        <p class="valor">Tite</p>
                    </div>

                    <div class="text">
                        <p class="atributo">Copas do Mundo</p> 
                        <p class="valor">6</p>
                    </div>

                    <div class="text">
                        <p class="atributo">Participação em copas</p> 
                        <p class="valor">19</p>
                    </div>

                    <div class="text">
                        <p class="atributo">Racking</p> 
                        <p class="valor">9</p>
                    </div>

                    <div class="div-buttons">
                        <a href="#"><button class="crud-buttons update-button">Alterar</button></a>
                        <a href="#"><button class="crud-buttons delete-button">Excluir</button></a>
                    </div>

                </div>

             </div>
             
             <div class = "card">

                <img class = "selecao" src = "../images/selecao-icon.jpeg">

                <div class="content">

                    <h2>Brasil</h2>
                
                    <div class="text">
                        <p class="atributo">Tecnico</p> 
                        <p class="valor">Tite</p>
                    </div>

                    <div class="text">
                        <p class="atributo">Copas do Mundo</p> 
                        <p class="valor">6</p>
                    </div>

                    <div class="text">
                        <p class="atributo">Participação em copas</p> 
                        <p class="valor">19</p>
                    </div>

                    <div class="text">
                        <p class="atributo">Racking</p> 
                        <p class="valor">9</p>
                    </div>

                    <div class="div-buttons">
                        <a href="#"><button class="crud-buttons update-button">Alterar</button></a>
                        <a href="#"><button class="crud-buttons delete-button">Excluir</button></a>
                    </div>

                </div>

             </div>

             <div class = "card">

                <img class = "selecao" src = "../images/selecao-icon.jpeg">

                <div class="content">

                    <h2>Brasil</h2>
                
                    <div class="text">
                        <p class="atributo">Tecnico</p> 
                        <p class="valor">Tite</p>
                    </div>

                    <div class="text">
                        <p class="atributo">Copas do Mundo</p> 
                        <p class="valor">6</p>
                    </div>

                    <div class="text">
                        <p class="atributo">Participação em copas</p> 
                        <p class="valor">19</p>
                    </div>

                    <div class="text">
                        <p class="atributo">Racking</p> 
                        <p class="valor">9</p>
                    </div>

                    <div class="div-buttons">
                        <a href="#"><button class="crud-buttons update-button">Alterar</button></a>
                        <a href="#"><button class="crud-buttons delete-button">Excluir</button></a>
                    </div>

                </div>

             </div> -->
             
        </section>

        <div class="area">
            <a href="<?php echo APP."selecao/novo";?>"><button class="crud-buttons create-button">Criar</button></a>
        </div>
    </main>

    <footer>
        &copy; <a href="http://https://github.com/dsgsantos1">Daniel dos Santos</a>, <a href="http://https://github.com/erikgaborim">Erik Gaborim</a> e <a href="http://https://github.com/maikolaMS">Maike Mendes</a> - 2021
    </footer>
    
</body>
</html>