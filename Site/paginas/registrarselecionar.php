<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cssselecionar.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/responsividade.css">
  
    <title>Selecionar Cadastro</title>
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
           
           font-family: "Tahoma";
           color: black;
           overflow-x: hidden;

     }

     .nav-item{
       margin:0vw 3vw;
     }
     
     @media (min-width: 0px) and (max-width: 900px) {
     #rodape{
      
      position:absolute;


      }
    
     }

  
   </style>

    <div class="container-xl">
      <nav class="navbar navbar-expand-lg navbar-light bg-warning" style="display: flex;flex-direction: row;justify-content: space-between;">
        <a class="navbar-brand" href="#">
          <img src="../imgs/titulo01.png" width="250" height="100" class="d-inline-block align-top" alt="">        
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
          </button>

    
          <div style="margin-left:20%" class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
    
              <li class="nav-item">
                  
                  <a class="nav-link  " href="../index.php">Home</a>
              
              </li>
    
          <li class="nav-item">
          <a class="nav-link" href="SobreNos.php">Sobre Nós</a>
          </li>
    
          <li class="nav-item">
          <a class="nav-link" href="Fale_conosco.php">Fale Conosco</a>
          </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bold active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Login
        </a>
          <div class="dropdown-menu " aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="login_selecionar.php">Login</a>
        <a class="dropdown-item active" href="registrarselecionar.php">Cadastre-se</a>
        <div class="dropdown-divider"></div>
        
        </div>
                
          </li>
        </nav>
    </div>
     <hr>
     <div id="icon_reg">
        <img id="registrar_icone" src="../imgs/registrar_icon.png" alt="">
    
    </div>
         
    <div class="container containerbotoes" href="logarempresa.php" >
            
        <a href="registrar_emp.php" id="at">
            <div id="logarempresa" class="btn_selecionar">
                <i class="fas fa-building icon" ></i>
                <br>

                <p class="logar">Registrar Empresa</p>
            </div>
        </a>
        <a href="cadastre-se.php" id="at">
            <div id="logarusuario" class="btn_selecionar">
                <i class="fas fa-user icon"></i>
                <br>

                <p class="logar">Registrar Aluno</p>
    
            </div>
        </a>    
    </div>
   <footer id ="rodape" class="container-xl " >
    <div id="img" >
   
   <img  class="imglogin" src="../imgs/titulo01.png" alt="">


     
     
       
     
   </div>
      
      <div class="links">
           <a   class="text-secondary"style="text-decoration:none;" href="../index.php"><p class="rodape1">Home</p></a> 

            <a  class="text-secondary"style="text-decoration:none;" href="SobreNos.php"><p class="rodape1">Sobre Nós</p></a>

          <a   class="text-secondary"style="text-decoration:none;" href="Fale_Conosco.php"><p class="rodape1">Fale Conosco</p></a>
              
      </div>
      <div id="container_contato">
            <p class="rodape1">Entre em Contato Conosco:</p>
      
        
            
          <a href="https://www.facebook.com/"><i  class="fab fa-facebook icon"></i></a> 
          
          <a href="tel:55+(16) 99103-1604"><i style="color:green" class="fab fa-whatsapp icon"></i></a>
        </div>
      </div>
     

    </footer>


</body>
</html>