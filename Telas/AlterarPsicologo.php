<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
            $ID = $_GET['id']; //d65239dc-5e70-4d21-9e77-2b05722435a1
        ?>
        <meta charset="UTF-8"/>
        <script>
            function FillChats(){
                const listadd = "\
                    <a href='#' class='list-group-item list-group-item-action'>\
                        <div class='ms-2 me-auto'>\
                            <div class='fw-bold'>\
                                <img src='img/avatar1.png' alt='Avatar' class='avatar'> \
                                Paciente 1 \
                            </div>\
                            Content for list item \
                        </div> \
                        <span class='badge bg-primary rounded-pill'>14</span> \
                    </a>";
                
                document.getElementById("conversasPsicologo").innerHTML = listadd;
            }

            function imageUploaded() {
                var file = document.querySelector(
                    'input[type=file]')['files'][0];

                var reader = new FileReader();

                reader.onload = function () {
                    base64String = reader.result.replace("data:", "")
                    .replace(/^.+,/, "");

                    imageBase64Stringsep = base64String;
                    console.log(base64String);
                }
                reader.readAsDataURL(file);
            }

            function alterarPsicologo(dataAltera, idP){
                const url = 'https://limitless-escarpment-62515.herokuapp.com/api/psychologist/'+idP;

                const request = fetch(url, {
                    method: 'put',
                    headers: {
                    'Accept': 'application/json, text/plain, */*',
                    'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(dataAltera)
                })
                .then(
               res =>{
                  return res.json()
               })
                .then(data => console.log(data))
                .then(data => {
                    console.log("Alterado");
                    location.href = 'AlterarPsicologo.php?id='+idP;
                    })
                .catch(() => console.log("NOT"))
                return request;
            }

            function Alterar(){
                var idP = document.getElementById('idps').value ;
                var fotop = document.getElementById('fotostring').value;
                var emailPsicologo = document.getElementById('email').value ;
                var passwordPsicologo = document.getElementById('senha').value ;
                var nome = document.getElementById('nome').value ;
                var endereco = document.getElementById('endereco').value ;
                var nascimento = document.getElementById('nascimento').value ;
                var string_nascimento = nascimento.split("/").reverse() ;
                var int_nascimento = string_nascimento.map((i) => Number(i));
                var numeroPsico = document.getElementById('Numero').value ;
                var numeroPsicologo = parseInt(numeroPsico);
                var tipoTelefone = document.getElementById('TipoTelefone').value ;
                var complementoPsicologo = document.getElementById('complemento').value ;
                var documento = document.getElementById('documento').value ;
                var cidadePsico = document.getElementById('cidade').value ;
                var telefone = document.getElementById('telefone').value ;
                var bairroPsico = document.getElementById('bairro').value ;
                var cepPsico = document.getElementById('cep').value ;
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

                var idcontato = document.getElementById("idcontato").value;
                var idendereco = document.getElementById("idendereco").value;
                var idformacao = document.getElementById("formacaoid").value;

                var temas = ["Temas"];
                if(document.getElementById('ANSIEDADE').checked == true){
                    temas.splice(0, 1);
                    temas.push("ANSIEDADE");
                }
                if(document.getElementById('DEPRESSAO').checked == true){
                    temas.push("DEPRESSAO");
                }
                var body = {
                    id: idP,
                    name: nome,
                    document: documento,
                    documentType: 'CPF',
                    photo: fotop,
                    crp: crpPsicologo,
                    birthdayDate: int_nascimento,
                    gender: genero,
                    minValue: valorMinimo,
                    maxValue: valorMaximo,
                    description: descricao,
                    email: emailPsicologo,
                    password: passwordPsicologo,
                    status: "Pendente",
                    address: {
                        id: idendereco,
                        logradouro: endereco,
                        numero: numeroPsicologo,
                        complemento: complementoPsicologo,
                        cep: cepPsico,
                        bairro: bairroPsico,
                        cidade: cidadePsico,
                        estado: estadoPsico
                    },
                    contact: {
                        id: idcontato,
                        type: tipoTelefone,
                        number: telefone
                    },
                    themes: temas,
                    formacao: [
                        {
                            id: idformacao,
                            name: formacaoPsicologo
                        }
                    ]
                };
                console.log(body);
                alterarPsicologo(body, idP);
            }

            function AlteraFoto(idP){
                imageUploaded();
                document.getElementById("fotostring").value = base64String;
                Alterar();
            }
        </script>
        <style>
            .avatar {
                vertical-align: middle;
                width: 50px;
                height: 50px;
                border-radius: 50%;
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
            .titulo{
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

            .linkCad{
                font-size: 15px;
                color: #0057B7;
                margin-left:335px;
            }

            .ProfilePicture{
                vertical-align: middle;
                width: 150px;
                height: 150px;
                border-radius: 50%;
            }
            .Profile{
                text-align:center;
            }

            .btnAlteraImg{
                height:45px;
            }
        </style>

    </head>
    <body>

        <?php echo "
            <input type='hidden' name='idps' id='idps' VALUE='".$ID."'>
            ";  
        ?>

        <script>
            function FindPsico(idPsicologo){
                var urlApi = "https://limitless-escarpment-62515.herokuapp.com/api/psychologist/"+idPsicologo;
                const request = fetch(urlApi, {
                    method: 'get'
                    })
                    .then((res) => {return res.json()})
                    .then(data => 
                        {
                            console.log(data);
                            document.getElementById("photop").value = data.photo;
                            document.getElementById("email").value = data.email;
                            document.getElementById("senha").value = data.password;
                            document.getElementById("nome").value = data.name;
                            document.getElementById("cep").value = data.address.cep;
                            document.getElementById("nascimento").value = ""+data.birthdayDate[2]+"/"+data.birthdayDate[1]+"/"+data.birthdayDate[0];
                            document.getElementById("endereco").value = data.address.logradouro;
                            document.getElementById("Numero").value = data.address.numero;
                            document.getElementById("documento").value = data.document;
                            document.getElementById("complemento").value = data.address.complemento;
                            document.getElementById("bairro").value = data.address.bairro;
                            document.getElementById("telefone").value = data.contact.number;
                            document.getElementById("TipoTelefone").value = data.contact.type;/*tipo telefone*/
                            document.getElementById("cidade").value = data.address.cidade;
                            if(data.gender == "Masculino"){
                                document.getElementById("Masculino").checked = true;
                            }else{
                                document.getElementById("Feminino").checked = true;
                            }
                            document.getElementById("estado").value = data.address.estado;/*estado*/
                            document.getElementById("crp").value = data.crp;
                            document.getElementById("valormin").value = data.minValue;
                            document.getElementById("valormax").value = data.maxValue;
                            document.getElementById("descricao").value = data.description;
                            document.getElementById("formacao").value = data.formacao[0].name;

                            document.getElementById("idendereco").value = data.address.id;
                            document.getElementById("idcontato").value = data.contact.id;
                            document.getElementById("formacaoid").value = data.formacao[0].id;

                            for(var i = 0; i < data.themes.length; i++){
                                if(data.themes[i] == "ANSIEDADE"){
                                    document.getElementById("ANSIEDADE").checked = true;
                                }else if(data.themes[i] == "DEPRESSAO"){
                                    document.getElementById("DEPRESSAO").checked = true;
                                }
                            }
                            //console.log(data.photo);
                            var Image = "<img src='data:image/png;base64, "+ data.photo +"' alt='Foto de Perfil' class='ProfilePicture' />";
                            document.getElementById("ProfilePhoto").innerHTML = Image;
                            //document.getElementById("TEMAS").value = data.document;/*tema*/
                            //document.getElementById("FOTO").value = data.document;/*foto*/
                        })
            }
            idPsico = document.getElementById('idps').value;
            console.log(idPsico);
            FindPsico(idPsico);
        </script>

        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#0057B7;">
            <a class="navbar-brand" href="index.php">
                <img src="img/Psico_no_Precinho-logos_white.png" width="214.5" height="21.5" class="d-inline-block align-top" alt="" style="margin-left:15px;" alt="Psico no Precinho">
		    </a>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">*Gerenciamento*</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" onClick="FillChats()">Conversas</a>
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
                            <li><a class="dropdown-item" href="#">Meus Dados</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="form-signin" role="form">

            <h1 class="titulo">Meus Dados</h1>

            <div class="row">
                <div class="col Profile" id="ProfilePhoto">
                </div>
            </div>

            <div class="row">
            <div class="col-3">
                <label>
                Adicione uma nova foto:
                </label>
            </div>
            <div class="col-10">
                <input type="file" class="form-control" id="Imagem" accept="image/*" onchange="imageUploaded()">
            </div>
            <div class="col-2">
                <button class="btn btn-lg btn-primary btn-block btnAlteraImg" id="btnAlteraImg" onClick="<?php echo "AlteraFoto('".$ID."')"?>">Alterar</button>
            </div>
            </div>

            <input type="hidden" name="photop" id="photop">
            <input type="hidden" name="formacaoid" id="formacaoid">
            <input type='hidden' name='idcontato' id='idcontato'>
            <input type='hidden' name='idendereco' id='idendereco'>
            <input type='hidden' name='fotostring' id='fotostring'>

            <div class="row">

            <div class="col">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>

            <div class="col">
                <input type="text" class="form-control" name="senha" id="senha" placeholder="Senha" required>
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
                <input type="text" class="form-control" name="documento" id="documento" placeholder="Documento" disabled>
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
                <option value="none">Estado</option>
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
                <input type="text" class="form-control" name="crp" id="crp" placeholder="CRP" disabled>
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
                <input class="form-check-input" type="checkbox" value="" id="ANSIEDADE">
                <label class="form-check-label" for="flexCheckDefault">
                    ANSIEDADE
                </label>
            </div>
            </div>
            <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="DEPRESSAO">
                <label class="form-check-label" for="flexCheckDefault">
                    DEPRESSÃO
                </label>
            </div>
            </div>

            </div>

            <button class="btn btn-lg btn-primary btn-block botaoenviar" onClick="Alterar()" name="entrar">Salvar Dados</button>

        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Conversas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="list-group" id="conversasPsicologo">
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>