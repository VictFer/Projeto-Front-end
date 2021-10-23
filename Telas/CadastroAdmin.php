<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">

<head>
      <Title>Cadastro</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<style>
  
  body {
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #0057B7;
  }

  .form-signin {
    max-width: 900px;
    padding: 15px;
    margin: 0 auto;
    border-radius:15px;
    background-color: #ffffff;
  }

  .form-signin .form-control {
    position: relative;
    height: auto;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 10px;
    font-size: 16px;
    margin-bottom: 25px;        
  }

  h1{
    text-align: center;
    color: #0057B7;
    font-size: 25px;
    margin-bottom: 30px;
  }

  button[type="submit"]{
    width:870px;
    text-align:center;
    margin-top:15px;
  }

  a{
    font-size: 15px;
    color: #0057B7;
    margin-left:335px;
    }


</style>

</head>


<body>
  <form class = "form-signin" role = "form">

    <h1>Cadastro</h1>
  
  <div class="row">
    
      <div class="col">
        <input type="text" class="form-control" name = "email" placeholder="Email">
      </div>

      <div class="col">
        <input type="password" class="form-control" name = "senha" placeholder="Senha">
      </div>

  </div>

    <div class="row">

      <div class="col">
        <input type="text" class="form-control" name = "nome" placeholder="Nome">
      </div>

    <div class="row">

      <div class="col">
        <input type="text" class="form-control" name = "documento" placeholder="Documento">
      </div>
  
    </div>

    <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "entrar">Criar Conta</button>

  </form>
</body>
</html>