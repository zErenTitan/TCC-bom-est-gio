<?php
  session_start();
  
  if(isset($_SESSION['usuarioatual'])){
    $name = "Área Usuário";
    $logado = "Área do Usuário";
    $cadastro = "";
    $sair="Sair";
    $usuariol=($_SESSION['usuarioatual']);
  }else if(isset($_SESSION['emp_atual'])){
    $name ="Área Empresa";
    $logado = "Área da Empresa";
    $sair = "Sair";
   
    
  } else{
    $name = "Login";
    $logado = "Login";
    $cadastro = "Cadastre-se";
    $sair="";
  }

  $nomevaga = array();
  $cidadevaga = array();
  $requisitosvaga = array();
  $emp_nome= array();
  $cod_vaga=array();


  $conn=include ('conexoes/conexao.php');
  $sql="select * from vaga  order by cod_vaga desc limit 3";
  $result=mysqli_query($conexao,$sql);

 

 
   
    while($row =mysqli_fetch_assoc($result) ){
      
        array_push($nomevaga,$row['nom_vaga']);
        array_push($cidadevaga,$row['cidade_vaga']);
        array_push($requisitosvaga,$row['requisitos']);
        array_push($cod_vaga,$row['cod_vaga']);

        
       
        
        
   
        $sql2="select emp_nome from empresa where emp_codigo = ".$row['emp_codigo']."";
        $result2 = mysqli_query($conexao,$sql2);
        if($result2){
          while($row2 = $result2 -> fetch_row()){
         
            array_push($emp_nome,$row2[0]);
          }

        }
     
        $valor3=array_pop($cod_vaga);
           
        $valor1=$valor3 + 2;
        $valor2=$valor3 + 1;
        
    }
    
    
  
  $sql3= "select count(cod_vaga) from vaga ";
  $sql4= "select count(emp_codigo) from empresa ";
  $sql5= "select count(cod_usuario) from usuario ";
  $result3=  mysqli_query($conexao,$sql3);
  $result4= mysqli_query($conexao,$sql4);
  $result5= mysqli_query($conexao,$sql5);
  if($result3 && $result4 && $result5){
    $row3 = $result3 -> fetch_row();
    $row4 = $result4 -> fetch_row();
    $row5 = $result5 -> fetch_row();
  }
 
?>
<script>
  var nomevaga= <?php echo json_encode($nomevaga); ?>;
  var cidadevaga = <?php echo json_encode($cidadevaga); ?>;
  var requisitosvaga = <?php echo json_encode($requisitosvaga); ?>;
  var nome_empresa = <?php echo json_encode($emp_nome); ?>;
  var num_vaga = <?php echo $row3[0];?>;
  var num_emp= <?php echo $row4[0];?>;
  var num_users = <?php echo $row5[0];?>;
  
</script>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cssindex.css">
    <link rel="stylesheet" href="css/rodape.css">
    <link rel="stylesheet" href="css/vagasrecentes.css">
    <link rel="stylesheet" href="css/responsividade.css">
  
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

      .nav-item{
        margin:0vw 3vw;
      }
   
    </style>

  
  <div class="container-xl">
      <nav class="navbar navbar-expand-lg navbar-light bg-warning" style="display: flex;flex-direction: row;justify-content: space-between;">
        <a class="navbar-brand" href="#">
          <img src="titulo01.png" width="250" height="100" class="d-inline-block align-top" alt="">        
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
          </button>

    
          <div style="margin-left:20%" class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
    
              <li class="nav-item active">
                  
                  <a class="nav-link font-weight-bold active" href="index.php">Home</a>
              
              </li>
    
          <li class="nav-item">
          <a class="nav-link" href="paginas/SobreNos.php">Sobre Nós</a>
          </li>
    
          <li class="nav-item">
          <a class="nav-link" href="paginas/Fale_conosco.php">Fale Conosco</a>
                
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php
                echo $name;
              ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
            
            
              if (isset($_SESSION['usuarioatual']) ){
                echo"<a class='dropdown-item' href='paginas/paginalogado.php'>Área Usuário</a>
                <a class='dropdown-item' href='paginas/logout.php'>Sair</a>";

              }else if(isset($_SESSION['emp_atual'])) {
                echo"<a class='dropdown-item' href='paginas/pagina_logado_emp.php'>Área Da Empresa</a>
                <a class='dropdown-item' href='paginas/logout.php'>Sair</a>";
              
                

              }else {
                echo "<a class='dropdown-item' href='paginas/login_selecionar.php'>Login</a>
                <a class='dropdown-item' href='paginas/registrarselecionar.php'>Registrar</a>";
                

              }
            ?>
            </div>
            </li>
        
    
          </ul>
          
          </nav>
  </div>
    
    
    

  <hr>
    

      <!--Aqui vai começar o conteúdo da página!-->
      <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
  <div class="container">

    <div id="carouselExampleIndicators" class="carousel slide" data-interval="3500" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="imgs/teste1.png" alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="imgs/teste2.png" alt="Segundo Slide">
        </div>
        
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </div>  
  <br><br><br><br>
  </div>

  <div class="container" id="vagasrecentes">
      <div id="titulovagas">
        <h3 style="align-itens:center;">Vagas Mais Recentes</h3>
        
      </div>
      
      <div id="container_vagas">
        <div class="vagas">
            <div class="containerdados">
              
            </div>    
            <?php 
            
            echo"<form method='GET' action='paginas/Vagas.php#$valor1'>
            <input type='hidden' name='id_vaga' value='$valor1'>
           <input type='submit' class='btnmaisinfo' value='Mais informações'>
           </form>";
             ?> 
        </div>
        <div class="vagas">
              <div class="containerdados">
                  
              </div>   
              <?php 
               echo"<form method='GET' action='paginas/Vagas.php#$valor2'>
               <input type='hidden' name='id_vaga' value='$valor2'>
              <input type='submit' class='btnmaisinfo' value='Mais informações'>
              </form>";
             ?> 
        </div>
        <div class="vagas">
            <div class="containerdados">
            
           
              
            </div>  
            <?php 
              echo"<form method='GET' action='paginas/Vagas.php#$valor3'>
              <input type='hidden' name='id_vaga' value='$valor3'>
             <input type='submit' class='btnmaisinfo' value='Mais informações'>
             </form>";
             ?> 
        </div>
      </div>

  
  
  </div>

  <br><br><br><br>

  <div class="container infos2">
    
    <div class="teste numeros" id="numdevagas"> 
      <p class="txtnum">Número de Vagas Cadastradas</p>

    </div>
    <div class="emp numeros" id="numdeemp">

      <p class="txtnum">Número de Empresas Cadastradas</p>

    </div>

    <div class="user numeros" id="numdeuser">

    <p class="txtnum">Número de Usuários Cadastrados</p>

    </div>
  
  
  </div>



    <footer id ="rodape" class="container-xl " >
    <div id="img" >
   
   <img  class="imglogin" src="imgs/titulo01.png" alt="">


     
     
       
     
   </div>
      
      <div class="links">
           <a   class="text-secondary"style="text-decoration:none;" href="index.php"><p class="rodape1">Home</p></a> 

            <a  class="text-secondary"style="text-decoration:none;" href="paginas/SobreNos.php"><p class="rodape1">Sobre Nós</p></a>

          <a   class="text-secondary"style="text-decoration:none;" href="paginas/Fale_Conosco.php"><p class="rodape1">Fale Conosco</p></a>
              
      </div>
      <div id="container_contato">
            <p class="rodape1">Entre em Contato Conosco:</p>
      
        
            
          <a href="https://www.facebook.com/"><i  class="fab fa-facebook icon"></i></a> 
          
          <a href="tel:55+(16) 99103-1604"><i style="color:green" class="fab fa-whatsapp icon"></i></a>
        </div>
      </div>
     

    </footer>

            


 

</html>
<script src="js/index.js">
</script>
















       

