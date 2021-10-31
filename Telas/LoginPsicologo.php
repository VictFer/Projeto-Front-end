<!DOCTYPE html>
<html lang = "en">
   
    <head>
      <title>Login</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script>
         function set(){
            document.getElementById("textEmail").value = "vinicius00.vc@outlook.com";
            document.getElementById("textSenha").value = "Vinny312!";
         }

         function loginPsicologo(data) {

            const url = 'https://limitless-escarpment-62515.herokuapp.com/api/psychologist/login';

            const request = fetch(url, {
            method: 'post',
            headers: {
               'Accept': 'application/json, text/plain, */*',
               'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
            })
            .then(
               res =>{
                  if (res.ok){
                     /*console.log("S");*/
                     location.href = 'AlterarPsicologo.php';
                  }else{
                     /*console.log("N");*/
                     var erroLogin =
                     "<div class='alert alert-danger alertando' role='alert'> \
                        Informações incorretas ! Tente Novamente. \
                     </div>";
                     document.getElementById("erroArea").innerHTML = erroLogin;
                  }
               }
            )
            .catch(() => console.log("NOT"))
            return request;
         }
         function Authentication(){
            var emailpsico = document.getElementById('textEmail').value;
            var passwordpsico = document.getElementById('textSenha').value;
            var body = {
               userName: emailpsico,
               password: passwordpsico
            };
            loginPsicologo(body);

            
             /*Função retorna verdadeiro ou falso
            
            if (auth === true){
               window.location.href = 'AlterarCliente.php';    //tela de exemplo para saber se funciona, a tela inicial do psicologo sera Gerenciamento ou a tela com as informações dele.
            }else{
               alert("E-mail ou Senha incorretos. Tente Novamente!");
            }
            */
         }
      </script>
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #0057B7;
         }
         .alertando{
            font-size: medium;
         }
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            border-radius:15px;
            background-color: #ffffff;
         }
         
         .form-signin,
         .form-signin .checkbox {
            margin-bottom: 15px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         .form-signin input[type="password"] {
            margin-bottom: 25px;
         } 
         h1{
            text-align: center;
            color: #0057B7;
            font-size: 25px;
         }
         h2{
            text-align:center;
         }
         .btnEntraPsi{
             width:300;
         }
         a{
             font-size: 15px;
             color: #0057B7;
         }
      </style>
   </head>
	
   <body>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                        
      <div class="container form-signin ">
            
            <h1 onClick="set()">Entrar</h1>
            
            <div id="erroArea">

            </div>

            <input type = "text" class = "form-control" 
               name = "email" id="textEmail" placeholder = "Email" required ></br>
            
            <input type = "password" class = "form-control"
               name = "senha" id="textSenha" placeholder = "Senha" required>

            <h2>
               <button class = "btn btn-lg btn-primary btn-block btnEntraPsi" onClick="Authentication()" name = "entrar">
                  Entrar
               </button>
            <h2>
            <a href = "CadastroPsicologo.php">Não possui uma conta? Cadastre-se</a>
      </div>                  
      
   </body>
</html>