<?php   
$servidor="localhost";
$usuario="root";
$senha="";
$banco="bdvagas";
$conexao=mysqli_connect($servidor,$usuario,$senha) or die ("Não foi possível conectar ao servidor MYSQL.");
mysqli_select_db($conexao,$banco) or die ("Não foi possível conectar ao banco.")
?>