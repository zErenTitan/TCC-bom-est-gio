<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/responsividade.css">
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a3817343c2.js" crossorigin="anonymous"></script>


    <title>Cadatrar Usuário</title>
  </head>
  <body >
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
          <img src="../titulo01.png" width="250" height="100" class="d-inline-block align-top" alt="">        
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
          </button>

    
          <div style="margin-left:20%" class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
    
              <li class="nav-item ">
                  
                  <a class="nav-link" href="../index.php">Home</a>
              
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
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              if((isset($_SESSION['usuarioatual']))){
                echo"<a class='dropdown-item' href='../paginas/paginalogado.php'>área Usuário</a>
                <a class='dropdown-item' href='../paginas/logout.php'>Sair</a>";

              }else {
                echo"<a class='dropdown-item' href='login_selecionar.php'>Login</a>
                <a class='dropdown-item active' href='registrarselecionar.php'>Cadastre-se</a>";
             

              }
            ?>
            </div>
              </li>
        
    
          </ul>
         
          </nav>
      </div>
      <hr><br>
  
    
    <div class="container">
        <form action="../conexoes/cadastrarregistrar.php" method="POST">
            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"for="nomeusuario">Nome Usuario:</label>
              
              <input style="min-width:44vw;" type="text" class="form-control col-sm-2 col-form-label"  name="nomeusuario" id="nomeusuario" required>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"for="data_nasci">Data Nascimento:</label>
                
                <input style="min-width:44vw" type="text" class="col-sm-2 col-form-label form-control"  name="data_nasci" id="data_nasci" required>
              </div>
              <div class="form-group row">
                  <label class=" col-sm-2 col-form-label" for="cpf">CPF</label>
                  <br>
                  <input style="min-width:44vw"  type="text" class="col-sm-2 col-form-label form-control"  name="cpf" id="cpf" required>
                </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="cidusuario">Cidade:</label>
              <br>
              <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-label"  name="cidusuario" id="cidusuario" required>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="telefone">Telefone:</label>
              <br>
              <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-labell"  name="telefone" id="telefone" required>
            </div>
            <div class="form-group row" >
              <label class="col-sm-2 col-form-label" for="email">E-mail:</label>
              <br>
              <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-labell"  name="email" id="email" required>
            
            </div>
            <div class="form-group row" >
                <label class="col-sm-2 col-form-label" for="login">Usuario:</label>
                <br>
                <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-labell"  name="login" id="login" required>
              
              </div>
              <div class="form-group row" >
                <label class="col-sm-2 col-form-label" for="senha">Senha:</label>
                <br>
                <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-labell"  name="senha" id="senha" required>
              
              </div>
              <div class="form-group row" >
                <label class="col-sm-2 col-form-label" for="data_atual">Data de Cadastro:</label>
                <br>
                <input  type="datetime" class="form-control col-sm-2 col-form-labell"  name="data_atual" id="data_atual" readonly="true">
              
              </div>
            <div class="form-group" style="margin-left:47vw">
              <input type="submit" class="btn btn-primary" value="Cadastrar Usuário">
            </div>
            
          </form>
    
    </div>
</div>



</div>  
<footer id ="rodape" class="container-xl" >
      <div id="img" class="imgelogin">
   
      <img width="250" height="100" src="../imgs/titulo01.png" alt="">


        
        
          
        
      </div>
      <div class="links">
           <a   class="text-secondary"style="text-decoration:none;" href="../index.php"><p class="rodape1">Home</p></a> 

            <a  class="text-secondary"style="text-decoration:none;" href="SobreNos.php"><p class="rodape1">Sobre Nós</p></a>

          <a   class="text-secondary"style="text-decoration:none;" href="Fale_Conosco.php"><p class="rodape1">Fale Conosco</p></a>
              
      </div>
      <div id="container_contato">
            <p class="rodape1">Entre em Contato Conosco:</p>
      
        <div id="contato">
            
          <a href="https://www.facebook.com/"><i  class="fab fa-facebook icon"></i></a> 
          
          <a href="tel:55+(16) 99103-1604"><i style="color:green" class="fab fa-whatsapp icon"></i></a>
        </div>
      </div>
     

    </footer>
</body>
</html>

<script>
    var today = new Date();
    var dia = today.getDate();
    var mes = today.getMonth() +1;
    var ano = today.getFullYear();
    //alert(dia + "/" + mes + "/" + ano);
    document.getElementById("data_atual").value=(dia + "/" + mes + "/" + ano);
</script>
