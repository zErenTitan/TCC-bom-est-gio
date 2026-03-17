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
    
  }else if(isset($_SESSION['codigo_emp_atual'])){
    $usuario = "Bem Vindo ".$_SESSION['codigo_emp_atual'];
    $logado = "Área da Empresa";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/vaga.css">
    <link rel="stylesheet" href="../css/responsividade.css">
    <title>Vagas Cadastradas por Você</title>
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
      
      div#vagas_listar{
        display: inline-flex;
      }
      div.vagas{
        border: 0.1vw  black solid;
        border-radius: 0.75vw;
        padding:  0.10vw;
        background-color: rgba(148, 148, 148, 0.815);

    }
    
   
    
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
              <a class="dropdown-item" href="../paginas/pagina_logado_emp.php"><?php echo $logado; ?></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../paginas/logout.php"><?php echo $sair; ?></a>
            </div>
            </li>
        
    
          </ul>
         
          </nav>
      </div>
      <hr><br>
      <div class="container">
        <h1>Vagas cadastradas por você:</h1>
        
        <br>
          <?php
          

            $id_emp= $_SESSION['codigo_emp_atual'];
            include("../conexoes/conexao.php");
            $vagas = " select * from vaga where emp_codigo = $id_emp";
            $queryselect=mysqli_query($conexao,$vagas)or die ("Erro na consulta");
            $linha = mysqli_fetch_assoc($queryselect);

            do{ 
                $NomeVaga = $linha['nom_vaga'];
                echo"<div id='vagas_listar'>
                <form method='POST' action='#$NomeVaga'>
                <input type='submit' class='btn btn-primary' value='$NomeVaga'> 
                </form> </div> &nbsp";
                



            }while($linha = mysqli_fetch_assoc($queryselect));


            $vagas2 = " select * from vaga where emp_codigo = $id_emp";
            $queryselect=mysqli_query($conexao,$vagas2)or die ("Erro na consulta");
            $linha2 = mysqli_fetch_assoc($queryselect);
           echo"<br>
           <br>";
            do{ 
                $NomeVaga = $linha2['nom_vaga'];
                $Cidade = $linha2['cidade_vaga'];
                    $Salario = $linha2['salario_vaga'];
                    $Cargo = $linha2['cargo_vaga'];
                    $Requisitos = $linha2['requisitos'];
                    $carga_hr=$linha2['carga_hr_vaga'];
                    
                    $idempresa=$linha2['emp_codigo'];
                    $id_vaga=$linha2['cod_vaga'];
                    
                  
                   
                      echo "
                        <div id='$NomeVaga' class='vagas container'>
                          <form method='POST' action='../conexoes/atualizar_vaga.php'>
                            <input type='hidden' name='id_vaga' value='$id_vaga'>
                            <div class='descricoes   input-group-prepend'> 
                            <input type='text' name='cidade_vaga ' class=' form-control nom_vaga'  value='Nome da vaga:'>
                              <input type='text' class='form-control ' name='nome_vaga'  value='$NomeVaga'>
                              <hr>
                            </div>
    
                           
    
                            <div class='descricoes   input-group-prepend'> 
                            <input type='text' name='' class=' form-control cidade'  value='Cidade:'>
                            <input type='text' name='cidade_vaga' class='form-control'  value='$Cidade'>
                            </div>
    
                            <div class='descricoes   input-group-prepend'> 
                            <input type='text' name='' class='sal form-control '  value='Salário:'>
                            <input type='text' name='salario_vaga' class='form-control'  value='$Salario'>
                            </div>
    
                            <div class='descricoes   input-group-prepend'> 
                            <input type='text' name='' class='cargo form-control '  value='Cargo:'>
                            <input type='text' name='cargo_vaga' class='form-control'  value='$Cargo'>
                            </div>
    
                            <div class='descricoes   input-group-prepend'> 
                            <input type='text' name='' class='hr form-control '  value='Carga horária:'>
                            <input type='text' name='carga_hr' class='form-control'  value='$carga_hr'>
                            </div>

                            <div class='descricoes   input-group-prepend'> 
                            <input type='text' name='' class='requisitos form-control '  value='requisitos:'>
                           
                            <textarea   rows='6.5'  style='resize: none'  name='requisitos' class='form-control'  >$Requisitos </textarea>
                           
                            </div>

                            
                            
                            <div id='botao'>
                            <input type='submit' class='btn btn-success' value='Atualizar Vaga!'>                        
                            </form>
                            <form method='GET' action='../conexoes/deletar_vaga.php'>
                            <input type='hidden' name='id_vaga' value='$id_vaga'>
                            <div id='cancelar'>
                            <input type='submit' class='btn btn-danger' value='Deletar vaga'>  
                            </div>
                            </form>
                            </div>
                            
                          
                          </div>
                          
                          
                          ";
                        
                    
                      
                      echo "<br>";
                   
               
              
             }while ($linha2 = mysqli_fetch_assoc($queryselect));
             
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


