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
    <title>Clube</title>

    <!--Google Fonts API-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--Fontes-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="<?php echo APP."styles/clube.css";?>"> 
    <!-- O LINK ACIMA É O CSS DA PÁGINA -->

</head>
<body>
    <main>
         <section>

            <?php 

                foreach ($clubes as $clube){
                    $caminho = APP;
                    echo" 
                        <div class = 'card'>

                            <img class = 'clube' src = '../images/selecao-icon.jpeg'>

                            <div class='content'>

                                <h2>{$clube['nome']}</h2>

                                <div class='text'>
                                    <p class='atributo'>Títulos</p> 
                                    <p class='valor'>{$clube['titulos']}</p>
                                </div>

                                <div class='div-buttons'>
                                    <a href='$caminho/clube/editar/{$clube['id']}'><button class='crud-buttons update-button'>Alterar</button></a>
                                    <a href='$caminho/clube/excluir/{$clube['id']}'><button class='crud-buttons delete-button'>Excluir</button></a>
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
            <a href="<?php echo APP."clube/novo";?>"><button class="crud-buttons create-button">Criar</button></a>
        </div>
    </main>

    <footer>
        &copy; <a href="http://https://github.com/dsgsantos1">Daniel dos Santos</a>, <a href="http://https://github.com/erikgaborim">Erik Gaborim</a> e <a href="http://https://github.com/maikolaMS">Maike Mendes</a> - 2021
    </footer>
    
</body>
</html>