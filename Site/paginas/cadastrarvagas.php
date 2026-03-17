<?php
  session_start();
  if(isset($_SESSION['usuarioatual'])){
    $usuario = "Bem Vindo ".$_SESSION['usuarioatual'];
    $logado = "Área do Usuário";
    $cadastro = "";
    $sair="Sair";
    header('location:loginempresa.php');
  }else if(isset($_SESSION['emp_atual'])){
    $usuario ="Área Empresa";
    $logado = "Área da Empresa";
    $sair = "Sair";
   
  }else{
    $usuario = "Login";
    $logado = "Login";
    $cadastro = "Cadastre-se";
    $sair="";
    header('location:loginempresa.php'); 
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
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/responsividade.css">
    <title>Cadastrar Vaga</title>
  </head>
  <body>    
    
 
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

      .nav-item{
        margin:0vw 3vw;
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
    
              <li class="nav-item active">
                  
                  <a class="nav-link font-weight-bold active" href="../index.php">Home</a>
              
              </li>
    
          <li class="nav-item">
          <a class="nav-link" href="SobreNos.php">Sobre Nós</a>
          </li>
    
          <li class="nav-item">
          <a class="nav-link" href="Fale_conosco.php">Fale Conosco</a>
                
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php
                echo $usuario;
              ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              if (isset($_SESSION['usuarioatual']) ){
                echo"<a class='dropdown-item' href='paginalogado.php'>Área Usuário</a>
                <a class='dropdown-item' href='logout.php'>Sair</a>";

              }else if(isset($_SESSION['emp_atual'])) {
                echo"<a class='dropdown-item' href='pagina_logado_emp.php'>Área da Empresa</a>
                <a class='dropdown-item' href='logout.php'>Sair</a>";
              
                

              }else {
                echo "<a class='dropdown-item' href='/login_selecionar.php'>Login</a>
                <a class='dropdown-item' href='/registrarselecionar.php'>Registrar</a>";
                

              }
            ?>
            </div>
            </li>
        
    
          </ul>
          
          </nav>
  </div>
    
    
    

    <hr><br>
<div class="container">
<!--Aqui vai começar o conteúdo da página!-->
<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
  
    
     
        <form action="../conexoes/cadastrarvaga.php" method="POST">
          <div class="form-group row">
            <label  class="col-sm-2 col-form-label" for="nomevaga">Nome da Vaga:</label>
            
            <input required type="text" class="form-control col-sm-6 col-form-label"  name="nomvaga" id="nomvaga">
          </div>
          <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="nomevaga">Cargo:</label>
              
              <input required  type="text" class="col-sm-6 col-form-label form-control"  name="cargovaga" id="cargovaga">
            </div>
            
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nomevaga">Cidade:</label>
            <br>
            <input required  type="text" class="form-control col-sm-6 col-form-label"  name="cidvaga" id="cidvaga">
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nomevaga">Carga Horária:</label>
            <br>
            <input required  type="text" class="form-control col-sm-6 col-form-label "  name="cargahr" id="cargahr">
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="nomevaga">Salário:</label>
            <br>
            <input required  type="text" class="form-control col-sm-6 col-form-labell"  name="salvaga" id="salavaga">
          </div>
          <div class="form-group row" >
            <label class="col-sm-2 col-form-label" for="descrivaga">Requisitos:</label>
            <br>
            <textarea  required  type="text" class="col-sm-6 col-form-label form-control"  name="requisitos" id="requisitos" rows="5"></textarea>
          
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Cadastrar Vaga">
          </div>
        </form>
      </div>
            
           
      <footer id ="rodape" class="container-xl " >
      <div id="img" class="imgelogin">
   
      <img width="250" height="100" src="../imgs/titulo01.png" alt="">


        
        
          
        
      </div>
      <div class="links">
           <a   class="text-secondary"style="text-decoration:none;" href="../index.php"><p class="rodape1">Home</p></a> 

            <a  class="text-secondary"style="text-decoration:none;" href="paginas/SobreNos.php"><p class="rodape1">Sobre Nós</p></a>

          <a   class="text-secondary"style="text-decoration:none;" href="paginas/Fale_Conosco.php"><p class="rodape1">Fale Conosco</p></a>
              
      </div>
      <div id="container_contato">
            <p class="rodape1">Entre em Contato Conosco:</p>
      
        <div id="contato">
            
          <a href="https://www.facebook.com/"><i  class="fab fa-facebook icon"></i></a> 
          
          <a href="tel:55+(16) 99103-1604"><i style="color:green" class="fab fa-whatsapp icon"></i></a>
        </div>
      </div>
     

    </footer>
  </div>

              

</body>


  </html>
















       

