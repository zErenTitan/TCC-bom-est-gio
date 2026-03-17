<?php
include("conexao.php");
    session_start();
  $nome = $_POST ["nomeusuario"];
  $Data_Nascimento = $_POST["data_nasci"];
  $CPF = $_POST["cpf"];
  $Cidade = $_POST["cidusuario"];
  $Telefone = $_POST ["telefone"];
  $Email = $_POST ["email"];
  $login = $_POST ["login"];
  $senha = $_POST ["senha"];
  $sql = mysqli_query($conexao, "update usuario set nome_usuario='$nome',data_nasci='$Data_Nascimento',cidade_usuario='$Cidade',cpf_usuario='$CPF',
  telefone='$Telefone',email='$Email',login_usuario='$login',senha_usuario='$senha' where cod_usuario =" .$_SESSION['usu_id_atual']) 
  or die  ("Cadastro não inserio"); 


  echo"<script>
  alert('Cadastro Realizado Com Sucesso!!!');
  window.location.href='../paginas/paginalogado.php';
  </script>";
  

?>