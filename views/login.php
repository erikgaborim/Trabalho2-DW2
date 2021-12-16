<?php
    $email = "";
    if(isset($_COOKIE["erro"])){
        echo "
        <div class='p-3 mb-2 bg-danger text-white'>
            {$_COOKIE['erro']}
        </div>";
        if(isset($_COOKIE['email'])){
            $email = $_COOKIE['email'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<link rel="stylesheet" href="<?php echo APP."styles/frm.css";?>">
<link rel="stylesheet" href="<?php echo APP."styles/login.css";?>">

</head>
<body>
  
<main>
    <!-- Login Form -->
    <form action="<?php echo APP; ?>login/logar" method="post">

      <h3>Login</h3>
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="E-mail">
      <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senha">
      <input type="submit" class="fadeIn fourth" value="Log In">
  
    </form>
</main>

</body>
</html>


