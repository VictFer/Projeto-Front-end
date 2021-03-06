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
                            <a class="nav-link active" aria-current="page" href="BuscarPsicologo.php">Buscar Psic??logos</a>
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

        <div class = "form-signin" role = "form">

            <h1 class="titulo">Cadastro</h1>

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
                    <input type="text" class="form-control" name = "endereco" id="endereco" placeholder="Endere??o">
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
                    <input type="text" class="form-control" name = "documento" id="documento" placeholder="Documento" disabled>
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
                    <label>G??nero</label>
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
            <button class = "btn btn-lg btn-primary btn-block botaoenviar" onClick="Cadastro()" name = "entrar">Criar Conta</button>
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