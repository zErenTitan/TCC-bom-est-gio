<?php
  $Ana = "Ana Beatriz";
  $Eu = "Murilo Silva";
  $Pezinho = "Matheus Gamma";
  $Edu = "Eduardo Ortolani";
  session_start();
  if(isset($_SESSION['usuarioatual'])){
    $usuario =  "Área Usuário";
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
    <title>Sobre Nós</title>
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

    .texto{
      text-align: center;
    }
    .textoPreto
    {
      color:white;
    }
    .tituloModalEduardo
    {
      color:green;
      font-weight:bold;
    }
      .tituloModalAna
    {
      color:pink;
      font-weight:bold;
    }
    .tituloModalME
    {
      color:#daa520;
      font-weight:bold;
    }
    .tituloModalPe
    {
      color:black;
      font-weight:bold;
    }
    .tituloModalPE
    {
      color:red;
      font-weight:bold;
    }
    .tituloModalJhe
    {
      color:Blue;
      font-weight:bold;
    }
    .tituloModalJess
    {
      color:#993399;
      font-weight:bold;
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
          <a class="nav-link font-weight-bold active" href="SobreNos.php">Sobre Nós</a>
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
    </div>
    


   <div class="container col-8 table-responsive">



   <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col" class="texto">Nome</th>
      <th scope="col" class="texto" width="100px">Foto</th>
      <th scope="col" class="texto">Email</th>
    </tr>
  </thead>
  <tbody>
   
  <tr>
      <th scope="row" class="texto"><br>Ana <br><br><br>             <!-- Botão para acionar modal -->
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#ModalAna">
  Ver mais...
</button>

<!-- Modal -->
<div class= " container modal fade ModalAna" id="ModalAna" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title tituloModalAna bg-dark" id="TituloModalCentralizado">Ana Beatriz Pupim</h5>
        
      </div>
      <div class="modal-body textoPreto text-light bg-dark">
        
        Me chamo Ana... Participei do desenvolvimento desse site com xx anos
      </div>
      <div class="modal-footer bg-dark">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div></th>
      <td><img src="../imgs/lol.jpg" width="300px" height="200px"></td>
      <td><br><br><br>AnaBeatrizPupim14@gmail.com</td>
      </tr>  
    
    <tr>
      <th scope="row" class="texto"><br>Eduardo <br><br><br>             <!-- Botão para acionar modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalDu">
  Ver mais...
</button>

<!-- Modal -->
<div class="modal fade" id="ModalDu" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title tituloModalEduardo" id="TituloModalCentralizado">Eduardo Ortalani Turco</h5>

      </div>
      <div class="modal-body textoPreto bg-dark">
        
        Me chamo Eduardo... Participei do desenvolvimento desse site com xx anos
      </div>
      <div class="modal-footer bg-dark">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div></th>
      <td><img src="../imgs/lol.jpg" width="300px" height="200px"></td>
      <td><br><br><br>Eduardo18330@gmail.com</td>
    </tr>

    <tr>
      <th scope="row" class="texto"><br>Jéssica <br><br><br>             <!-- Botão para acionar modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalJess">
  Ver mais...
</button>

<!-- Modal -->
<div class="modal fade" id="ModalJess" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title tituloModalJess" id="TituloModalCentralizado">Jéssica Del Vecchio</h5>
        
      </div>
      <div class="modal-body textoPreto bg-dark">
        
        Me chamo Jéssica... Participei do desenvolvimento desse site com xx anos
      </div>
      <div class="modal-footer bg-dark">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div></th>
      <td><img src="../imgs/lol.jpg" width="300px" height="200px"></td>
      <td><br><br><br>Jessica@gmail.com</td>
    </tr>
    <tr>
      <th scope="row" class="texto"><br>Jhenifer <br><br><br>             <!-- Botão para acionar modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#ModalJhe">
  Ver mais...
</button>

<!-- Modal -->
<div class="modal fade" id="ModalJhe" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title tituloModalJhe" id="TituloModalCentralizado">Jhenifer</h5>
        
      </div>
      <div class="modal-body textoPreto bg-dark">
        
        Me chamo Jhenifer... Participei do desenvolvimento desse site com xx anos
      </div>
      <div class="modal-footer bg-dark">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div></th>
      <td><img src="../imgs/lol.jpg" width="300px" height="200px"></td>
      <td><br><br><br>Jhenifer@gmail.com</td>
    </tr>
  
    <tr>
      <th scope="row" class="texto"><br>Matheus <br><br><br>             <!-- Botão para acionar modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#ModalPe">
  Ver mais...
</button>

<!-- Modal -->
<div class="modal fade" id="ModalPe" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title tituloModalPe" id="TituloModalCentralizado">Matheus Tiago Contrera Gama</h5>
        
      </div>
      <div class="modal-body textoPreto bg-dark">
        
        Me chamo Matheus... Participei do desenvolvimento desse site com xx anos
      </div>
      <div class="modal-footer bg-dark">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div></th>
      <td><img src="../imgs/lol.jpg" width="300px" height="200px"></td>
      <td> <br><br><br>MatheusGama661@gmail.com</td>
    </tr>

    <tr>
      <th scope="row" class="texto"><br>Murilo <br><br><br>             <!-- Botão para acionar modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalME">
  Ver mais...
</button>

<!-- Modal -->
<div class="modal fade" id="ModalME" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark">
        <h5 class="modal-title tituloModalME" id="TituloModalCentralizado">Murilo Luiz Silva de Sousa</h5>
        
      </div>
      <div class="modal-body textoPreto bg-dark">
        
        Meu nome é Murilo eu comecei na área de tecnologia por volta dos meus 11 (onze) anos, mas apenas com jogos de computadores. Anos depois, no 9° ano do Ensino Fundamental, foi quando eu realmente comecei na parte de programação, redes, e essa área mais técnica. Hoje aos meus 18 (dezoito) anos eu possuo 2 cursos técnicos na área de informática. Já desenvolvi sistemas vigentes em comércios da cidade onde eu moro, entretanto todos voltado para aplicações desktop. Este foi o primeiro projeto voltado para web que eu participo.
      </div>
      <div class="modal-footer bg-dark">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div></th>
      <td><img src="../imgs/lol.jpg" width="300px" height="200px"></td>
      <td><br><br><br>TheAmazingBr33@outlook.com</td>
    </tr>
  </tbody>
</table>


</div>
            <!-- Content here -->
  
   </div>
          
        </div>
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
















       

