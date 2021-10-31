<html lang="en">

<head>
  <Title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <script>
    function cadastraPsicologo(data) {

      const url = 'https://limitless-escarpment-62515.herokuapp.com/api/psychologist';

      const request = fetch(url, {
        method: 'post',
        headers: {
          'Accept': 'application/json, text/plain, */*',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      })
      return request;
    }

    let base64String = "";

    function imageUploaded() {
      var file = document.querySelector(
        'input[type=file]')['files'][0];

      var reader = new FileReader();

      reader.onload = function () {
        base64String = reader.result.replace("data:", "")
          .replace(/^.+,/, "");

        imageBase64Stringsep = base64String;

      }
      reader.readAsDataURL(file);
    }

    function Cadastro() {

      var emailPsicologo = document.getElementById('email').value ;
      var passwordPsicologo = document.getElementById('senha').value ;
      var nome = document.getElementById('nome').value ;
      var endereco = document.getElementById('endereco').value ;
      var nascimento = document.getElementById('nascimento').value ;
      var array_nascimento = nascimento.split("/").reverse().join('-') ;
      var numeroPsico = document.getElementById('Numero').value ;
      var numeroPsicologo = parseInt(numeroPsico);
      var tipoTelefone = document.getElementById('TipoTelefone').value ;
      var complementoPsicologo = document.getElementById('complemento').value ;
      var documento = document.getElementById('documento').value ;
      var cidadePsico = document.getElementById('cidade').value ;
      var telefone = document.getElementById('telefone').value ;
      var bairroPsico = document.getElementById('cep').value ;
      var cep = document.getElementById('cep').value ;
      var masc = document.getElementById('Masculino').checked ;
      var fem = document.getElementById('Feminino').checked ;
      if (masc === true) {
        var genero = "Masculino";
      } else if (fem === true) {
        var genero = "Feminino";
      } else { var genero = "erro na selecao"; }
      var estadoPsico = document.getElementById("estado").value;
      var crpPsicologo = document.getElementById("crp").value;
      var valorMinimo = document.getElementById("valormin").value;
      var valorMaximo = document.getElementById("valormax").value;
      var descricao = document.getElementById("descricao").value;
      var formacaoPsicologo = document.getElementById("formacao").value;
      //console.log(array_nascimento + email + password + nome + endereco + nascimento + complemento + documento + cidade + telefone + cep + genero + estado + crp + valorMinimo + valorMaximo + descricao + base64String)
      var body = {
        name: nome,
        photo: base64String,
        document: documento,
        documentType: 'CPF',
        crp: crpPsicologo,
        birthdayDate: array_nascimento,
        gender: genero,
        minValue: valorMinimo,
        maxValue: valorMaximo,
        description: descricao,
        email: emailPsicologo,
        password: passwordPsicologo,
        address: {
          logradouro: endereco,
          numero: numeroPsicologo,
          complemento: complementoPsicologo,
          bairro: bairroPsico,
          cidade: cidadePsico,
          estado: estadoPsico,
          cep: cep
        },
        contact: {
          type: tipoTelefone,
          number: telefone
        },
        themes: ['ANSIEDADE'],
        formacao: [{
          name: formacaoPsicologo
        }]
      };
      console.log(body);
      cadastraPsicologo(body)
        .then(() => console.log('cadastrado') /*, 
          location.href = 'http://www.google.com' */)
        .catch(() => console.log('falha ao cadastrar'))
      //alert(array_nascimento + email + password + nome + endereco + nascimento + complemento + documento + cidade + telefone + cep + genero + estado + crp + valorMinimo + valorMaximo + descricao + base64String);
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
      border-radius: 15px;
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

    .titulo {
      text-align: center;
      color: #0057B7;
      font-size: 25px;
      margin-bottom: 30px;
    }

    .botaoenviar {
      width: 870px;
      text-align: center;
      margin-top: 15px;
    }

    a {
      font-size: 15px;
      color: #0057B7;
      margin-left: 335px;
    }
  </style>

</head>


<body>
  <div class="form-signin" role="form">

    <h1 class="titulo">Cadastro</h1>

    <div class="row">
      <div class="col-3">
        <label>
          Adicione Uma foto:
        </label>
      </div>
      <div class="col-12">
        <input type="file" class="form-control" id="Imagem" accept="image/*" onchange="imageUploaded()">
      </div>
    </div>

    <div class="row">

      <div class="col">
        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
      </div>

      <div class="col">
        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
      </div>

    </div>

    <div class="row">

      <div class="col">
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
      </div>

      <div class="col">
        <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" required>
      </div>

    </div>

    <div class="row">

      <div class="col">
        <input type="text" class="form-control" name="nascimento" id="nascimento" placeholder="Nascimento" required>
      </div>

      <div class="col-3">
        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço" required>
      </div>

      <div class="col-3">
        <input type="text" class="form-control" name="Numero" id="Numero" placeholder="Número" required>
      </div>

    </div>

    <div class="row">

      <div class="col">
        <input type="text" class="form-control" name="documento" id="documento" placeholder="Documento" required>
      </div>

      <div class="col-3">
        <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Complemento" required>
      </div>

      <div class="col-3">
        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Bairro" required>
      </div>

    </div>

    <div class="row">
      
      <div class="col-4">
        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required>
      </div>

      <div class="col-2">
        <select id="TipoTelefone" class="form-control"  required>
          <option value="">Tipo</option>
          <option value="Celular">Celular</option>
          <option value="Fixo-Consultorio">Consultório</option>
        </select>
      </div>

      <div class="col">
        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" required>
      </div>

    </div>

    <div class="row">

      <div class="col">
        <label>Gênero</label>
        <br>
        <div class="form-check-inline">
          <input class="form-check-input" type="radio" name="exampleRadios" id="Masculino" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">
            Masculino
          </label>
        </div>
        <div class="form-check-inline">
          <input class="form-check-input" type="radio" name="exampleRadios" id="Feminino" value="option2">
          <label class="form-check-label" for="exampleRadios2">
            Feminino
          </label>
        </div>
      </div>

      <div class="col">
        <select id="estado" class="form-control"  required>
          <option value="" selected>Estado</option>
          <option value="AC">AC</option>
          <option value="AL">AL</option>
          <option value="AM">AM</option>
          <option value="AP">AP</option>
          <option value="BA">BA</option>
          <option value="CE">CE</option>
          <option value="DF">DF</option>
          <option value="ES">ES</option>
          <option value="GO">GO</option>
          <option value="MA">MA</option>
          <option value="MG">MG</option>
          <option value="MS">MS</option>
          <option value="MT">MT</option>
          <option value="PA">PA</option>
          <option value="PB">PB</option>
          <option value="PE">PE</option>
          <option value="PI">PI</option>
          <option value="PR">PR</option>
          <option value="RJ">RJ</option>
          <option value="RN">RN</option>
          <option value="RO">RO</option>
          <option value="RR">RR</option>
          <option value="RS">RS</option>
          <option value="SC">SC</option>
          <option value="SE">SE</option>
          <option value="SP">SP</option>
          <option value="TO">TO</option>
        </select>
      </div>
    </div>

    <hr />

    <div class="row">

      <div class="col">
        <input type="text" class="form-control" name="crp" id="crp" placeholder="CRP" required>
      </div>

      <div class="col">
        <input type="text" class="form-control" name="valormin" id="valormin" placeholder="Valor Mínimo" required>
      </div>

      <div class="col">
        <input type="text" class="form-control" name="valormax" id="valormax" placeholder="Valor Máximo" required>
      </div>

    </div>

    <div class="col">
      <input type="text" class="form-control" name="descrição" id="descricao"
        placeholder="Escreva uma breve introdução sobre você e seu trabalho" required>
    </div>

    <div class="row">

      <div class="col">
        <input type="text" class="form-control" name="Formacao" id="formacao" placeholder="Formação" required>
      </div>

    </div>

    <div class="row">
      <div class="col-3">
        <label>
          Temas que abordados em sessões:
        </label>
      </div>
    </div>

    <div class="row">

    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          ANSIEDADE
        </label>
      </div>
    </div>
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            DEPRESSÃO
        </label>
      </div>
    </div>

    </div>


    <button class="btn btn-lg btn-primary btn-block botaoenviar" onClick="Cadastro()" name="entrar">Criar Conta</button>

    <a href="LoginPsicologo.php">Já possui uma conta? Entre</a>

  </div>
</body>

</html>