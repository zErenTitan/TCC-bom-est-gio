<?php
  session_start();
  if(isset($_SESSION['adm_atual'])){
   $nome_adm = $_SESSION['adm_atual'];
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
    <link rel="stylesheet" href="../css/logado_admin.css">
  
    
  
    <title>Área Admin</title>
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
      footer#rodape{
        background-color: rgb(255, 193, 7);
        
        margin-top:7vw;
        
      }

      .nav-item{
        margin:0vw 3vw;
      }
      @media (min-width: 0px) and (max-width: 900px) {
     #rodape{
      
      position:absolute;
      min-width: 100%;

      }
    
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

    
          <a class="navbar-brand" href="logout.php"> Sair</a>
        
          
          </nav>
    </div>  
    
    
    

    <hr><br>
  
      <div class="container">
        <div id="titulo">
          <h1>Bem vindo <p id="adm_nom"><?php echo $nome_adm;?></p></h1>
        </div>
        <div class="opcao_admin">
          <form method="POST">
              <input type="submit" class="btn btn-secondary" name="usuario" value="Perguntas de Usuários">
              <input type="submit" class="btn btn-secondary" name="empresa" value="Perguntas de Empresas">
            </form>
          </div>
        
        <div id="perguntas">
            <?php 
              include "../conexoes/conexao.php";
              $contar = "select pergunta , COUNT(pergunta) from (admin_usuario) where resposta is null";
              $interligacao3=mysqli_query($conexao,$contar);
              $linha=mysqli_fetch_assoc($interligacao3);
              $perguntasusudisp= $linha['COUNT(pergunta)'];
              $contar2="select pergunta , COUNT(pergunta) from (admin_empresa) where resposta is null";
              $interligacao4=mysqli_query($conexao,$contar2);
              $linha3=mysqli_fetch_assoc($interligacao4);
              $perguntasempdisp=$linha3['COUNT(pergunta)'];

                          

                
            ?>
            
            
            
            
            </div>
            <br>
            <div id="perguntas_disp"></div>
            <?php
            if(isset($_POST['usuario'])){
              echo"<p>Você possui $perguntasusudisp perguntas de usuários para responder!</p>";
              $pessoa="select ad.pergunta,u.nome_usuario,ad.cod_pergunta FROM admin_usuario as ad inner join usuario as u on u.cod_usuario = ad.cod_usuario where ad.resposta is null";
              $interligacao2=mysqli_query($conexao,$pessoa);
              
            
            while ($linha2 = mysqli_fetch_assoc($interligacao2) ){
                            
              
                  $nome_pessoa= $linha2['nome_usuario'];
                  $pergunta = $linha2['pergunta'];
                  $codigo_pergunta= $linha2['cod_pergunta'];
              
                  echo "<form method='POST'  action='../conexoes/enviar_resposta_usuario.php'>
                          
                        <div class='perg_resp'> 
                        <p>Nome</p>
                          <input type='text' class='form-control ' name='pessoa' readonly value=$nome_pessoa>
                          <input type='hidden' name='codigo_pergunta' value='$codigo_pergunta'>
                        </div>
                        <br>
                        <div class='perg_resp'>
                        
                        <p>Pergunta</p>
                        <textarea style='min-height:150px' class='form-control'  readonly aria-label='Com textarea' name='resposta'>$pergunta</textarea>
                        </div>
                        <br>
                        <div class='perg_resp'>
                        <p>Resposta</p>
                        <textarea style='min-height:150px' class='form-control' aria-label='Com textarea' name='resposta'></textarea>
                        </div>
                        <br>
                        <div class='perg_resp'>
                        <input type='submit' class='btn btn-outline-secondary ' name='responder'  value='Responder'>
                        </div>
                        
                        </form>   
                        <br><hr class='risco'> ";
                            
                            
            }
                           
                  
     
                
              }else if(isset($_POST['empresa'])){
                echo"<p>Você possui $perguntasempdisp perguntas de empresas para responder!</p>";
                $pessoa="select ad.pergunta,emp.emp_nome,ad.cod_perg_emp FROM admin_empresa as ad inner join empresa as emp on emp.emp_codigo = ad.cod_empresa where ad.resposta is null";
                $interligacao5=mysqli_query($conexao,$pessoa);
                
              
                while ($linha5 = mysqli_fetch_assoc($interligacao5) ){
                              
                  
                  $nome_pessoa= $linha5['emp_nome'];
                  $pergunta = $linha5['pergunta'];
                  $resposta = ""; 
                  $cod_pergunta_emp=$linha5['cod_perg_emp'];
                      echo "<form method='POST'  action='../conexoes/enviar_resposta_empresa.php'>
                              
                              <div class='perg_resp'> 
                              <p>Nome</p>
                                <input type='hidden' name='codigo_pergunta_emp' value='$cod_pergunta_emp'>
                                <input type='text' class='form-control ' name='pessoa' readonly value=$nome_pessoa>
                              </div>
                              <br>
                              <div class='perg_resp'>
                              
                              <p>Pergunta</p>
                              <textarea style='min-height:150px' class='form-control'  readonly aria-label='Com textarea' name='resposta'>$pergunta</textarea>
                              </div>
                              <br>
                              <div class='perg_resp'>
                              <p>Resposta</p>
                              <textarea style='min-height:150px' class='form-control' aria-label='Com textarea' name='resposta'></textarea>
                              </div>
                              <br>
                              <div class='perg_resp'>
                              <input type='submit' class='btn btn-outline-secondary ' name='responder'  value='Responder'>
                              </div>
                              
                              </form>   
                              <br><hr class='risco'> ";
                    
                    
                  }
              }
            ?> 
        </div>
      
      
      </div>

              
              
    
  
   
        
    


    </div>
    <footer id ="rodape" class="container-xl"  >
                <div id="img" class="imgelogin">
                <img width="250" height="100" src="../imgs/titulo01.png" alt="">
                </div>
              </footer>

    </body>
  </html>
















       

