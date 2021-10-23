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
                                Paciente 1 \
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
            .CampoMensagens{
                height: 346px;
                display: flex;
                flex-direction: column-reverse;
            }
            .MessageArea{
                /*position: absolute;
                bottom: 0;
                left: 0;*/
                width:100%;
                display: inline; /* the default for span *//
                border:1px solid;
                background-color: white;
                border-color: #a4aebf ;
            }
            .btnSendMessage{
                width:100%;
                height:100%;
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
                            <li><a class="dropdown-item" href="#">Ver Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Alterar Cadastro</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

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

        <nav class="nav">
            <a class="nav-link active" aria-current="page" href="#">
                <img src='img/avatar3.png' alt='Avatar' class='avatar'>
            </a>
            <a class="nav-link disabled" href="#">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Vinicius Costa</h5>
                </div>
            </a>
        </nav>
        

        <div class="overflow-auto CampoMensagens">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Paciente</h5>
                        <small class="text-muted">21/10/2021 12:30</small>
                    </div>
                    <p class="mb-1">Olá, não vou conseguir comparecer a sessão de hoje !</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary text-end" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <small class="text-muted text-center">21/10/2021 12:35</small>
                        <h5 class="mb-1">Psicologo</h5>
                    </div>
                    <p class="mb-1 text-break">Ok. Nos vemos na proxima sessão, então. Até!</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Paciente</h5>
                        <small class="text-muted">21/10/2021 12:40</small>
                    </div>
                    <p class="mb-1">Até !</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action ">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Paciente</h5>
                        <small class="text-muted">21/10/2021 12:30</small>
                    </div>
                    <p class="mb-1">Olá, não vou conseguir comparecer a sessão de hoje !</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary text-end" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <small class="text-muted text-center">21/10/2021 12:35</small>
                        <h5 class="mb-1">Psicologo</h5>
                    </div>
                    <p class="mb-1 text-break">Ok. Nos vemos na proxima sessão, então. Até!</p>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Paciente</h5>
                        <small class="text-muted">21/10/2021 12:40</small>
                    </div>
                    <p class="mb-1">Até !</p>
                </a>
            </div>
        </div>

        <div class="mb-3 MessageArea fixed-bottom">
            <br>
            <div class="container-fluid row">
                <div class="container-fluid col-10">
                    <textarea class="form-control typeMessage" id="Mensagem" placeholder="Digite sua Mensagem." rows="3"></textarea>
                </div>
                <div class="container-fluid col-2">
                    <button class="btn btn-primary btnSendMessage">Enviar</button>
                </div>
            </div>
            <br>
        </div>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    </body>
</html>