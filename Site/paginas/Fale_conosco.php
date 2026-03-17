<?php
  session_start();
  if(isset($_SESSION['usuarioatual'])){
    $usuario = "Área Usuário";
    $logado = "Área do Usuário";
    $cadastro = "";
    $sair="Sair";
  }else if(isset ($_SESSION['emp_atual'])){
    $usuario = "Área Empresa";
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
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/responsividade.css">
    <title>Fale Conosco</title>
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
    
              <li class="nav-item ">
                  
                  <a class="nav-link " href="../index.php">Home</a>
              
              </li>
    
          <li class="nav-item">
          <a class="nav-link" href="SobreNos.php">Sobre Nós</a>
          </li>
    
          <li class="nav-item">
          <a class="nav-link font-weight-bold active" href="Fale_conosco.php">Fale Conosco</a>
                
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
                echo"<a class='dropdown-item' href='../paginas/paginalogado.php'>Área Usuário</a>
                <a class='dropdown-item' href='../paginas/logout.php'>Sair</a>";

              }else if(isset($_SESSION['emp_atual'])) {
                echo"<a class='dropdown-item' href='../paginas/pagina_logado_emp.php'>Área Empresa</a>
                <a class='dropdown-item' href='../paginas/logout.php'>Sair</a>";
              
                

              }else {
                echo "<a class='dropdown-item' href='../paginas/login_selecionar.php'>Login</a>
                <a class='dropdown-item' href='../paginas/tegistrarselecionar.php'>Registrar</a>";
                

              }
            ?>
            </div>
            </li>
        
    
          </ul>
          
          </nav>
  </div>
    
    
    

    <hr><br>
    <?php 
      if(isset($_SESSION['usuarioatual']) || isset($_SESSION['emp_atual']) ){
        
      }else {

     echo" 


       <link rel='stylesheet' href='../css/frmLogin.css'>

        <div class='modal fade' data-backdrop='static' data-keyboard='false'  id='exemplomodal' tabindex='-1' role='dialog' aria-
         labelledby='myLargeModalLabel'>
        <div class='modal-dialog modal-lg' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>

                   
                    <h4 class='modal-title' id='gridSystemModalLabel'>Faça Login para Continuar ou <a href='registrarselecionar.php'>Registre-se!</a></h4>
                    <div id='voltar_index'>
                    
                  </div>
               
                    <div id='voltar_index'>
                      <a href='../index.php'>Voltar à Pagina Inicial</a>
                    </div>
                </div>
                <div class='modal-body'>
                <form action='../conexoes/logar_2.php' method='POST'>
  
                <div class='container'>
                <h3 >Aluno</h3>
                <br>
                  <label for='uname'><b>Usuário</b></label>
                  <input type='text' placeholder='Enter Username' name='txtUsuario' required>
              
                  <label for='psw'><b>Senha</b></label>
                  <input type='password' placeholder='Enter Password' name='txtSenha' required>
              
                  <button type='submit'>Login</button>
                  
                </div>
              
               
              </form>
        
      
      
      
              </div>
              <div class='container'>
      
        <form action='../conexoes/logarempresa_2.php' method='POST'>
          <div class='container'>
          <h3 >Empresa</h3>
          <br>
            <label for='uname'><b>Usuário</b></label>
            <input type='text' placeholder='Enter Username' name='txtUsuario' required>
        
            <label for='psw'><b>Senha</b></label>
            <input type='password' placeholder='Enter Password' name='txtSenha' required>
        
            <button type='submit'>Login</button>
            
          </div>
        
          
  
          
          </div>
        </form>
  



        </div>
              
            </div>
      
          </div>
        
                </div>
                <div class='modal-footer'>
                   
                </div>
                </div>
            </div>
            </div>
            <script type='text/javascript'>

          $(document).ready(function() {
              $('#exemplomodal').modal('show');
          })
          </script>";

            
      }

    
        
    ?>

    <!--Aqui vai começar o conteúdo da página!-->
      <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
      <div class="row">
         
            <!-- Content here -->
              <!--Fotos da feira 2019;<br>
              Fotos de eventos 2019;<br>
              Fotos de eventos 2020;<br> -->
                <div class="container">
                       <div class="row">
                           <h1 class="text-primary">
                            Fale Conosco
                           </h1>
                       </div>
                            <form action="../conexoes/Fale_con_Listar.php" method="POST">
                              <div class="row">
                                <div class="col-6">
                                   <br>
                                        <div class="form-group">
                                        
                                          <label for="Descrição">
                                          Pergunta:
                                          </label>
                                         <textarea type="text" name='pergunta' required class="form-control" 
                                         rows="10" cols="40" maxlength="500"
                                         name=Descrição id="Descrição"></textarea>

                                  </div>
                                </div>

                                      <div class="col-12">
                                <input type="submit" class="btn btn-primary" value="Enviar">
                                </div>
                                    </div>
                               
                                 </form>
                            </div>
                </div>

                
  
          </div>
         
      </div>
      
      <br><br><br><br>
    
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


    </div>


    </body>

</html>
















       

