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
</html>