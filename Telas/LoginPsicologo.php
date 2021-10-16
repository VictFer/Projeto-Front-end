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
      <title>Login</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #0057B7;
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

         button[type="submit"]{
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
                        
        <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            
            <h1>Entrar</h1>
            
            <input type = "text" class = "form-control" 
               name = "email" placeholder = "Email" required ></br>
            
           <input type = "password" class = "form-control"
               name = "senha" placeholder = "Senha" required>

            <input type = "text" class = "form-control" 
               name = "crp" placeholder = "CRP" required ></br>

            <h2>
           <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "entrar">
                Entrar
           </button>
            <h2>
            <a href = "CadastroPsicologo.php">Não possui uma conta? Cadastre-se
         </form>                  
      
   </body>
</html>