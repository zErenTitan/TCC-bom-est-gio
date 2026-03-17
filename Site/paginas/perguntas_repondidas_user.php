<?php
    
  session_start();
  if(isset($_SESSION['usuarioatual'] )){
    $usuario = "Bem Vindo ".$_SESSION['usuarioatual'];
    $logado = "Área do Usuário";
    $cadastro = "";
    $sair="Sair";
    include("../conexoes/conexao.php");
    $comparacao_nome = "select * from usuario where cod_usuario =" .$_SESSION['usu_id_atual'];
    $queryselect=mysqli_query($conexao,$comparacao_nome);
    $linha = mysqli_fetch_assoc($queryselect);
    if($linha){
      $cpf_usuario=$linha['cpf_usuario'];
    }
    
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/vaga.css">
    <link rel="stylesheet" href="../css/responsividade.css">
    
    <title>Perguntas Respondidas</title>
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
   
        h1{
            display:inline-flex;
            
        }
        p#qtd_perg{
            color: blue;
        }
        div.teste{
            border: solid green;
        }
        textarea.pergunta{
            border: solid rgb(255, 193, 7);
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

    
          <div style="margin-left:20%"class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
    
              <li class="nav-item ">
                  
                  <a class="nav-link" href="../index.php">Home</a>
              
              </li>
    
          <li class="nav-item">
          <p class="cabecalho"><a class="nav-link" href="SobreNos.php">Sobre Nós</a></p>
          </li>
    
          <li class="nav-item">
          <a class="nav-link" href="Fale_conosco.php">Fale Conosco</a>
                
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle font-weight-bold active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $logado; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../paginas/paginalogado.php"><?php echo $logado; ?></a>
              <a class="dropdown-item" href="../paginas/cadastre-se.php"><?php echo $cadastro; ?></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../paginas/logout.php"><?php echo $sair; ?></a>
            </div>
            </li>
        
    
          </ul>
         
          </nav>
      </div>
      <hr><br>
      <div class="container">

      <?php
            
            include "../conexoes/conexao.php";
            $numero_de_user=$_SESSION['usu_id_atual'];
            $sql="select cod_usuario , COUNT(resposta) as quantidade from (admin_usuario) where resposta is not null and cod_usuario = $numero_de_user group by cod_usuario";
            $interligacao=mysqli_query($conexao,$sql);
            $linha = mysqli_fetch_assoc($interligacao);
            if ($linha == null){
              $qntd_perg= 0;

            }else{
              $qntd_perg= $linha['quantidade'];
            }
            
            echo "<h1>Você possui <p id='qtd_perg'> &nbsp $qntd_perg&nbsp </p>perguntas respondidas.</h1>";
            $sql2="select resposta,pergunta from admin_usuario where cod_usuario = $numero_de_user ";
            $interligacao2=mysqli_query($conexao,$sql2);
            $i=0;
            
            
            if($qntd_perg == 0){
                
            }else{
            while($linha2 = mysqli_fetch_assoc($interligacao2) ){
                $pergunta =$linha2['pergunta'];
                $resposta =$linha2['resposta'];

              
                $i++;
                echo "<p><br>
                
                <p>Pergunta</p>
                <textarea class='pergunta form-control' aria-label='Com textarea' style='min-height:150px'>$pergunta</textarea>
                <br>
                <a class='btn btn-primary' data-toggle='collapse' href='#$i' role='button' aria-expanded='false' aria-controls='collapseExample'>
                  Ver resposta
                </a>
               
              </p>
              <div id='$i' class='teste collapse' id=' collapseExample'>
                <div class='card card-body'>
                  $resposta
                </div>
              </div>
              <br>
              <hr>";

            }
        
          }


      ?>
            
      
             
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
    
   
    <html>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/a3817343c2.js" crossorigin="anonymous"></script>


