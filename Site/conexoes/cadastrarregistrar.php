<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php  
   include("conexao.php");

  $nome = $_POST ["nomeusuario"];
  $Data_Nascimento = $_POST["data_nasci"];
  $CPF = $_POST["cpf"];
  $Cidade = $_POST["cidusuario"];
  $Telefone = $_POST ["telefone"];
  $Email = $_POST ["email"];
  $login = $_POST ["login"];
  $senha = $_POST ["senha"];
  $data_atual = $_POST ["data_atual"];
  $sql = mysqli_query($conexao, "insert into usuario (nome_usuario,data_nasci,cidade_usuario,cpf_usuario,telefone,email,login_usuario,senha_usuario,data_cadastro)
  values ('$nome',' $Data_Nascimento','$Cidade', '$CPF','$Telefone','$Email','$login','$senha','$data_atual' )") 
  or die  ("Cadastro não inserio");


  echo("Regristo inserido");


?>


</body>
</html>














