<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>ERP Simples</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">

  <?php
      include_once( dirname( __FILE__ ) . "/controllers/LoginController.php");
      $result = true;
      $msg = "";

      if(isset($_REQUEST["email"])){
      
        $result = auth($_REQUEST["email"],$_REQUEST["password"]);
        if ($result){
          header("Location: /index.php");
        } else {
          $msg = "Login ou senha inválidos.";          
        }
      }
    ?>
   
<form class="form-signin" action="/login.php" method="POST">

  <?php
    if (!$result){
  ?>
    <div class="mb-4">
      <div class="alert alert-warning" role="alert">
        <?php echo $msg; ?>
      </div>
    </div>
  <?php
    }
  ?>
  <img class="mb-4" src="./img/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Acessar ERP Simples</h1>
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
  <label for="inputPassword" class="sr-only">Senha</label>
  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Senha" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Lembre-me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
</form>


    
  </body>
</html>
