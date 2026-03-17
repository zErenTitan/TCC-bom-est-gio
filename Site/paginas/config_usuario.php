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
    do{
      $NomeCompleto = $linha['nome_usuario'];
      $DataNasc = $linha['data_nasci'];
      $CPF = $linha['cpf_usuario'];
      $Cidade = $linha['cidade_usuario'];
      $Telefone = $linha['telefone'];
      $Email = $linha['email'];
      $Usuario = $linha['login_usuario'];
      $Senha = $linha['senha_usuario'];
    }while ( $linha = mysqli_fetch_assoc($queryselect));
    
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
    <link rel="stylesheet" href="../css/responsividade.css">
    
    <title>Configurações</title>
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
          <a class="nav-link" href="SobreNos.php">Sobre Nós</a>
          </li>
    
          <li class="nav-item">
          <a class="nav-link" href="Fale_conosco.php">Fale Conosco</a>
                
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle font-weight-bold active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo "Bem Vindo ".$_SESSION['usuarioatual']; ?>
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
        <form action="../conexoes/update_usuario.php" method="POST">
            <div class="form-group row">
              <label  class="col-sm-2 col-form-label"for="nomeusuario">Nome Usuario:</label>
              
              <input style="min-width:44vw;" type="text" class="form-control col-sm-2 col-form-label"  name="nomeusuario" id="nomeusuario" value="<?php echo $NomeCompleto;?>" required>  
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"for="data_nasci">Data Nascimento:</label>
                
                <input style="min-width:44vw" type="text" class="col-sm-2 col-form-label form-control"  name="data_nasci" id="data_nasci" value="<?php echo $DataNasc?>" required>
              </div>
              <div class="form-group row">
                  <label class=" col-sm-2 col-form-label" for="cpf">CPF</label>
                  <br>
                  <input style="min-width:44vw"  type="text" class="col-sm-2 col-form-label form-control"  name="cpf" id="cpf" value="<?php echo $CPF?>" readonly="true">
                </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="cidusuario">Cidade:</label>
              <br>
              <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-label"  name="cidusuario" id="cidusuario" value="<?php echo $Cidade?>" required>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="telefone">Telefone:</label>
              <br>
              <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-labell"  name="telefone" id="telefone" value="<?php echo $Telefone?>" required>
            </div>
            <div class="form-group row" >
              <label class="col-sm-2 col-form-label" for="email">E-mail:</label>
              <br>
              <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-labell"  name="email" id="email" value="<?php echo $Email?>" required>
            
            </div>
            <div class="form-group row" >
                <label class="col-sm-2 col-form-label" for="login">Novo Usuario:</label>
                <br>
                <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-labell"  name="login" id="login" value="<?php echo $Usuario?>" required>
              
              </div>
              <div class="form-group row" >
                <label class="col-sm-2 col-form-label" for="senha">Nova Senha:</label>
                <br>
                <input style="min-width:44vw"  type="text" class="form-control col-sm-2 col-form-labell"  name="senha" id="senha"  value="<?php echo $Senha?>"required>
              
              </div>
              
            <div class="form-group" style="margin-left:47vw">
              <input type="submit" class="btn btn-primary" value="Atualizar Cadastro">
            </div>
            
          </form>
    
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
    <html>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/a3817343c2.js" crossorigin="anonymous"></script>


