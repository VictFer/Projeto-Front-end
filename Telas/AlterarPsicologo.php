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
      <Title>Alterar Informações</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script>
         function Cadastro(){
            var email = document.getElementById('email').value;
            var password = document.getElementById('senha').value;
            var nome = document.getElementById('nome').value;
            var endereco = document.getElementById('endereco').value;
            var nascimento = document.getElementById('nascimento').value;
            var complemento = document.getElementById('complemento').value;
            var documento = document.getElementById('documento').value;
            var cidade = document.getElementById('cidade').value;
            var telefone = document.getElementById('telefone').value;
            var cep = document.getElementById('cep').value;
            var masc = document.getElementById('Masculino').checked;
            var fem = document.getElementById('Feminino').checked;
            if (masc === true){
                    var genero = "Masculino";
                }else if (fem === true){
                    var genero = "Feminino";
                }else { var genero = "erro na selecao";}
            var estado = document.getElementById("estado").value;
            var crp = document.getElementById("crp").value;
            var valorMinimo = document.getElementById("valormin").value;
            var valorMaximo = document.getElementById("valormax").value;
            var descricao = document.getElementById("descricao").value;
            alert(email + password + nome + endereco + nascimento + complemento + documento + cidade + telefone + cep + genero + estado + crp + valorMinimo + valorMaximo + descricao);
         }
      </script>

<style>
  
  body {
    
    padding-bottom: 40px;
    background-color: #ffffff;
  }

  .form-signin {
    max-width: 900px;
    padding: 15px;
    margin: 0 auto;
    border-radius:15px;
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
    margin-top: 30px;
  }

  .botaoenviar{
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

<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#0057B7;">
            <a class="navbar-brand" href="#">
                <img src="img/Psico_no_Precinho-logos_white.png" width="214.5" height="21.5" class="d-inline-block align-top" alt="" style="margin-left:15px;" alt="Psico no Precinho">
		    </a>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="BuscarPsicologo.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="ConversasPaciente.php">Conversas</a>
                        </li>
                    </ul>

                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Ver Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Alterar Cadastro</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
</nav>

<div class = "form-signin" role = "form">

<h1>Cadastro</h1>

<div class="row">

  <div class="col">
    <input type="text" class="form-control" name = "email" id="email" placeholder="Email">
  </div>

  <div class="col">
    <input type="text" class="form-control" name = "senha" id="senha" placeholder="Senha">
  </div>

</div>

<div class="row">

  <div class="col">
    <input type="text" class="form-control" name = "nome" id="nome" placeholder="Nome">
  </div>

  <div class="col">
    <input type="text" class="form-control" name = "endereco" id="endereco" placeholder="Endereço">
  </div>

</div>

<div class="row">

  <div class="col">
    <input type="text" class="form-control" name = "nascimento" id="nascimento" placeholder="Nascimento">
  </div>

  <div class="col">
    <input type="text" class="form-control" name = "complemento" id="complemento" placeholder="Complemento">
  </div>

</div>

<div class="row">

  <div class="col">
    <input type="text" class="form-control" name = "documento" id="documento" placeholder="Documento">
  </div>

  <div class="col">
    <input type="text" class="form-control" name = "cidade" id="cidade" placeholder="Cidade">
  </div>

</div>

<div class="row">

  <div class="col">
    <input type="text" class="form-control" name = "telefone" id="telefone" placeholder="Telefone">
  </div>

  <div class="col">
    <input type="text" class="form-control" name = "cep" id="cep" placeholder="CEP">
  </div>

</div>

<div class="row">
  
<div class="col">
  <label>Gênero</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="Masculino" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Masculino
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="Feminino" value="option2">
  <label class="form-check-label" for="exampleRadios2">
  Feminino
  </label>
</div>
</div>

<div class="col">
    <select id="estado" class="form-control">
    <option selected>Estado</option>
    <option>SP</option>
  </select>
</div>
</div>

<hr/>

<div class="row">

  <div class="col">
    <input type="text" class="form-control" name = "crp" id="crp" placeholder="CRP">
  </div>

  <div class="col">
    <input type="text" class="form-control" name = "valormi" id="valormin" placeholder="Valor Mínimo">
  </div>

  <div class="col">
    <input type="text" class="form-control" name = "valormax" id="valormax" placeholder="Valor Máximo">
  </div>

</div>

  <div class="col">
    <input type="text" class="form-control" name = "descrição" id="descricao" placeholder="Escreva uma breve introdução sobre você e seu trabalho">
  </div>


  <button class = "btn btn-lg btn-primary btn-block botaoenviar" onClick="Cadastro()" name = "entrar">Criar Conta</button>
        
<a href = "LoginPsicologo.php">Já possui uma conta? Entre

</div>
</body>