<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8"/>
        <script>
            function FillChats(){
                const listadd = "\
                    <a href='#' class='list-group-item list-group-item-action'>\
                        <div class='ms-2 me-auto'>\
                            <div class='fw-bold'>\
                                <img src='img/avatar1.png' alt='Avatar' class='avatar'> \
                                Psicologo 1 \
                            </div>\
                            Content for list item \
                        </div> \
                        <span class='badge bg-primary rounded-pill'>14</span> \
                    </a>";
                
                document.getElementById("conversas").innerHTML = listadd;
            }
            
            function SearchPsico(){
                var nome = document.getElementById("nome").value;
                var masc = document.getElementById('Masculino').checked;
                var fem = document.getElementById('Feminino').checked;
                var ind = document.getElementById('Indiferente').checked;
                if (masc === true){
                    var genero = "Masculino";
                }else if (fem === true){
                    var genero = "Feminino";
                }else if (ind === true){
                    var genero = "Indiferente";
                }else { var genero = "erro na selecao";}
                var estado = document.getElementById("Estados").value;
                var crp = document.getElementById("crp").value;
                var valorMinimo = document.getElementById("valormin").value;
                var valorMaximo = document.getElementById("valormax").value;
                alert(nome + genero + crp + valorMinimo + valorMaximo + estado);
                //executar busca com os filtros no banco e retornar as informações NOME, VALORES, CRP, DESCRIÇÃO
                //concatenar o resultado dentro da segunte string para cada resultado encontrado
                const ExampleResult ="\
                <a class='list-group-item list-group-item-action' data-bs-toggle='modal' data-bs-target='#VerPsicologo' href='#' onClick='SelectPsico()'>\
                    <div class='ms-2 me-auto'>\
                            <ul class='list-inline'>\
                                <li class='list-inline-item'>\
                                    <div class='d-flex w-100 justify-content-between'>\
                                        <img src='img/avatar2.png' alt='Avatar' class='profile'> \
                                    </div>\
                                </li>\
                                <li class='list-inline-item'> \
                                    <div class='d-flex w-100 justify-content-between'>\
                                        <h5 class='mb-1'>\
                                            Victor Fernandes \
                                        </h5>\
                                        <small>\
                                            CRP - SP\
                                        </small>\
                                    </div>\
                                    <p class='mb-1'>\
                                        RS 0,00 - R$ 60,00 / sessão \
                                    </p> \
                                    <small> \
                                        Descrição disponibilizada pelo psicologo \
                                    </small> \
                                </li> \
                            </ul> \
                        </div> \
                    </div>  \
                </a>";
                document.getElementById("resultsArea").innerHTML = ExampleResult;
            }
            function SelectPsico(){
                //var idPsicologo = document.getElementById("idPsicoSelected").value;
                //puxa informações daquele psicologo
                var nomePsicologo = "Victor Fernandes";
                var crpPsicologo = "12345 - SP";
                var precoPsicologo = "De R$ 0,00 - R$ 60,00 / sessão";
                var descricaoPsicologo = "Descrção escrita pelo Psicologo";
                //document.getElementById("conversas").innerHTML = listadd; adiciona a imagem certa
                document.getElementById("NomePsicologo").innerText = nomePsicologo;
                document.getElementById("CRPPsicologo").innerText = crpPsicologo;
                document.getElementById("PrecoPsicologo").innerText = precoPsicologo;
                document.getElementById("DescricaoPsicologo").innerText = descricaoPsicologo;
            }
        </script>
        <style>
            .avatar {
                vertical-align: middle;
                width: 50px;
                height: 50px;
                border-radius: 50%;
            }
            .profile{
                vertical-align: middle;
                width: 100px;
                height: 100px;
                border-radius: 50%;
            }
            .profileSelected{
                vertical-align: middle;
                width: 200px;
                height: 200px;
                border-radius: 50%;
            }
            .searchArea {
                background-color:#0057B7;
            }
            .titulo{
                text-align: center;
                color: #ffffff;
                font-size: 30px;
                margin-bottom: 30px;
                margin-top: 10px;
            }
            .btnalterar{
                width:max-content;
                text-align:center;
                margin-top:15px;
            }
            .btnalterarposition{
                text-align: center;
            }
            .container {
                align:center;
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
            .PsicologoProfile{
                text-align: center;
            }
        </style>
    </head>
    <body>
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
                            <a class="nav-link active" aria-current="page" href="BuscarPsicologo.php">Buscar Pacientes</a>
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
                            <li><a class="dropdown-item" href="#">Ver Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Alterar Cadastro</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid searchArea">
            <div class = "form-signin">
                <h1 class='titulo'>Busque um Psicólogo</h1>
                <div class="col">
                    <input type="text" class="form-control" name = "nome" id="nome" placeholder="Nome">
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="Masculino" type="radio" name="exampleRadios" id="Masculino" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="Feminino" type="radio" name="exampleRadios" id="Feminino" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Feminino
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="Indiferente" type="radio" name="exampleRadios" id="Indiferente" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Indiferente
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <select id="Estados" class="form-control">
                        <option>Estado</option>
                        <option value = "SP" >SP</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name = "crp" id = "crp" placeholder="CRP">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name = "valormin" id="valormin" placeholder="Valor Mínimo">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name = "valormax" id="valormax" placeholder="Valor Máximo">
                    </div>
                </div>
                <div class="col">
                    <button class = "btn btn-lg btn-primary btn-block" name = "btnSearch" onClick='SearchPsico()'>Buscar Psicólogos</button>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid" id="resultsArea">
            
        </div>
        <div class="modal fade" id="VerPsicologo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="NomePsicologo" id="staticBackdropLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="PsicologoProfile">
                            <img src='img/avatar2.png'  alt='Avatar' class='profileSelected'> 
                        </div>
                        <div id="PsicologoProfile">
                            <h2 id="CRPPsicologo"></h2>
                            <h5 id="PrecoPsicologo"></h5>
                            <p id="DescricaoPsicologo"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Iniciar Conversa</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Conversas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="list-group" id="conversas">
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