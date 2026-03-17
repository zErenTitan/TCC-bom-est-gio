<?php   
  session_start();
  //include("../conexoes/DadosEmpresa.php");
  if(isset($_SESSION['usuarioatual'])){
    $usuario = "Área do Usuário";
    $logado = "Área do Usuário";
    $cadastro = "";
    $sair="Sair";
  }else if(isset($_SESSION['emp_atual'])){
    $usuario = "Área Empresa";
    $logado = "Área da Empresa";
    $sair = "Sair";
  }else{
    $usuario = "Login";
    $logado = "Login";
    $cadastro = "Cadastre-se";
    $sair="";
  }
  if(isset($_SESSION['codigo_emp_atual']))
  {
      include("../conexoes/conexao.php");
      $comparacao_nome = "select * from empresa where emp_codigo =" .$_SESSION['codigo_emp_atual'];
      $queryselect = mysqli_query($conexao,$comparacao_nome);
      $linha = mysqli_fetch_assoc($queryselect);
      do
      {
      $NomeCompleto = $linha['emp_nome'];
      $CNPJ = $linha['emp_cnpj'];
      $Cidade = $linha['emp_cidade'];
      $Email = $linha['emp_email'];
      $Responsavel = $linha['emp_responsavel'];
      $Endereco = $linha['emp_endereco'];
      $CEP = $linha['emp_cep'];
      $Login = $linha['login_empresa'];
      $Senha = $linha['senha_empresa'];
      $DataCad = $linha['data_atual'];
  }while ( $linha = mysqli_fetch_assoc($queryselect));
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
    <link rel="stylesheet" href="../css/responsividade.css">
    <title>Configurações</title>
  </head>
  <body >
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
          <a class="nav-link" href="SobreEtec.php">Sobre a Etec</a>
          </li>
    
          <li class="nav-item">
          <a class="nav-link" href="Fale_conosco.php">Fale Conosco</a>
                
          </li>
      
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle font-weight-bold active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php
                echo "Área Empresa";
              ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            
            <?php
              if(isset($_SESSION['emp_atual'])){
                echo"<a class='dropdown-item' href='pagina_logado_emp.php'>Área Empresa</a>
                <a class='dropdown-item' href='../paginas/logout.php'>Sair</a>";

              }else {
                header("location:../index.php");
              
                

              }
            ?>
            </div>
            </li>
        
    
          </ul>
          </nav>
      </div>
      <hr><br>

      <?php  
        //    include("../conexoes/dadosusuario.php");
      

?>



      <div class="container">
        <form action="../conexoes/update_empresa.php" method="POST">
            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"for="nomeemp">Nome da Empresa:</label>
              
              <input style="min-width:44vw;" type="text" class="form-control col-sm-2 col-form-label"  name="nomeemp" id="nomeemp" value="<?php echo"$NomeCompleto"?>" required>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"for="cnpj">CNPJ</label>
                
                <input style="min-width:44vw" type="text" class="col-sm-2 col-form-label form-control"  name="cnpj" id="cnpj"  value="<?php echo"$CNPJ"?>" required>
              </div>
              <div class="form-group row">
                  <label class=" col-sm-2 col-form-label" for="empcidade">Cidade Empresa</label>
                  <br>
                  <input style="min-width:44vw"  type="text" class="col-sm-2 col-form-label form-control"  name="empcidade" id="empcidade" value="<?php echo"$Cidade"?>" required>
                </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="empendereco">Endereço da Empresa:</label>
              <br>
              <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-label"  name="endereco" id="endereco" value="<?php echo"$Endereco"?>" required>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="emp_cep">CEP:</label>
              <br>
              <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-labell"  name="emp_cep" id="emp_cep" value="<?php echo"$CEP"?>" required>
            </div>
            <div class="form-group row" >
              <label class="col-sm-2 col-form-label" for="email">E-mail:</label>
              <br>
              <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-labell"  name="email" id="email" value="<?php echo"$Email"?>" required>
            
            </div>
            <div class="form-group row" >
              <label class="col-sm-2 col-form-label" for="emp_resp">Responsável </label>
              <br>
              <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-labell"  name="emp_resp" id="emp_resp" value="<?php echo"$Responsavel"?>" required>
            
            </div>
            <div class="form-group row" >
                <label class="col-sm-2 col-form-label" for="login">Usuario:</label>
                <br>
                <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-labell"  name="login" id="login" value="<?php echo"$Login"?>" required>
              
              </div>
              <div class="form-group row" >
                <label class="col-sm-2 col-form-label" for="senha">Senha:</label>
                <br>
                <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-labell"  name="senha" id="senha" value="<?php echo"$Senha"?>" required>
              
              </div>
              <div class="form-group row" >
                <label class="col-sm-2 col-form-label" for="data_atual">Data de Cadastro:</label>
                <br>
                <input  type="datetime" class="form-control col-sm-3 col-form-labell"  name="data_atual" id="data_atual" value="<?php echo"$DataCad"?>" readonly="true">
              
              </div>
            <div class="form-group" style="margin-left:47vw">
              <input type="submit" class="btn btn-primary" value="Salvar Dados">
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
<html>