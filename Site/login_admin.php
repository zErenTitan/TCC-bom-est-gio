<?php
  session_start();
  if(isset($_SESSION['login_adm'])){
    echo "você já esta logado.";
    header('location:paginas/pagina_logado_admin.php');
    
    
    $usuario = "Bem Vindo ".$_SESSION['usuarioatual'];
    $logado = "Área do Usuário";
    $cadastro = "";
    $sair="Sair";
  }else{
    $usuario = "Login";
    $logado = "Login";
    $cadastro = "Cadastre-se";
    $sair="";
  }



?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login_admin.css">
  
    <title>Home</title>
  </head>
  <body>    
    <div style="max-width: 100%;">
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a3817343c2.js" crossorigin="anonymous"></script>
    <style>
     
      body{
            font-style: normal;
            font-size: 1em; 
            font-family: "Tahoma";
            color: black;
            overflow-x: hidden;

      }
      footer#rodape{
        background-color: rgb(255, 193, 7);
        
        margin-top:7vw;
        
      }

      .nav-item{
        margin:0vw 3vw;
      }
    
   
    </style>
   
  
  <div class="container-xl">
      <nav class="navbar navbar-expand-lg navbar-light bg-warning" style="display: flex;flex-direction: row;justify-content: space-between;">
        <a class="navbar-brand" href="#">
          <img src="imgs/titulo01.png" width="250" height="100" class="d-inline-block align-top" alt="">        
        </a>
        
        
    
        
        
          
          </nav>
      </div>
    
    
    

    <hr><br>
  
    <!--Aqui vai começar o conteúdo da página!-->

    
     
    
  
    <div class="container" >
      
           <!-- Content here -->
      
      <form action="conexoes/logar_administrador.php" method="POST">
  
          <div class="container">
          <h3 >Administradores</h3>
          <br>
            <label for="uname"><b>Usuário</b></label>
            <input type="text" placeholder="Enter Username" name="txtUsuario" required>
        
            <label for="psw"><b>Senha</b></label>
            <input type="password" placeholder="Enter Password" name="txtSenha" required>
        
            <button type="submit">Login</button>
            
          </div>
      
          
        </form>
  



        </div>
        
    </div>


    </div>
    <footer id ="rodape" class="container-xl fixed-bottom" >
      <div id="img" class="imgelogin">
      <img width="250" height="100" src="imgs/titulo01.png" alt="">
      </div>
    </footer>
    </body>
  </html>
















       

