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
    header("location:../paginas/login_selecionar.php");
    echo
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
    
    <title>Vagas Disponíveis</title>
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

        <h1>Vagas Disponíveis</h1>
        <br>
          <?php
          

            $id_usuario= $_SESSION['usu_id_atual'];
            include("../conexoes/conexao.php");
            // echo " select * from vaga, empresa where vaga.emp_codigo=empresa.emp_codigo and vaga.cod_vaga not IN(select cod_vaga from usuario_vaga where cod_usuario = $_SESSION['usu_id_atual'])";
            $vagas = " select * from vaga, empresa where vaga.emp_codigo=empresa.emp_codigo and vaga.cod_vaga not IN(select cod_vaga from usuario_vaga where cod_usuario =  $id_usuario)";
            $queryselect=mysqli_query($conexao,$vagas)or die ("Erro na consulta");
            $linha = mysqli_fetch_assoc($queryselect);


            
            do{
                $NomeVaga = $linha['nom_vaga'];
                //$NomeEmpresa = $linha['data_nasci']
                $Cidade = $linha['cidade_vaga'];
                $Salario = $linha['salario_vaga'];
                $Cargo = $linha['cargo_vaga'];
                $Requisitos = $linha['requisitos'];
                $idempresa=$linha['emp_codigo'];
                $id_vaga=$linha['cod_vaga'];
                $nomeempresa=$linha['emp_nome'];
      
              
               
                  echo "
                    <div class='vagas container' id='$id_vaga'>
                      <form method='POST' action='selecionar_vaga.php'>
                        <input type='hidden' name='id_vaga' value='$id_vaga'>
                        <div class='descricoes primeira'> 
                          <input type='text' class='form-control ' name='nomevaga' readonly value='Nome da Vaga: $NomeVaga'>
                        </div>

                        <div class='descricoes'>
                        <input type='text' name='emp_nome' class='form-control' readonly value='Nome da Empresa: $nomeempresa'>
                        </div>

                        <div class='descricoes'>
                        <input type='text' name='cidadevaga' class='form-control' readonly value='Cidade: $Cidade'>
                        </div>

                        <div class='descricoes'>
                        <input type='text' name='salario_vaga' class='form-control' readonly value='Salário: $Salario'>
                        </div>

                        <div class='descricoes'>
                        <input type='text' name='cargo_vaga' class='form-control' readonly value='Cargo: $Cargo'>
                        </div>

                        <div class='textarea' >
                        <textarea   rows='6.5'  style='resize: none' cols='50' maxlength='10vw'  name='requisitos' class='form-control' readonly >Requisitos: $Requisitos </textarea>
                        </div>
                        <div id='botao'>
                        <input type='submit' class='btn btn-primary' value='Clique aqui para candidatar-se!'>                        
                        </div>
                      </form>
                      </div>
                      
                      
                      ";
                    
                
                  
                  echo "<br>";
               
              
             }while ($linha = mysqli_fetch_assoc($queryselect));
             
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


