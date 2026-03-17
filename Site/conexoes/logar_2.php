<?php
    session_start();
    include("conexao.php");

    $usuario=$_POST['txtUsuario'];
    $senha=$_POST['txtSenha'];

    $sql="select * from usuario";

    $queryselect=mysqli_query($conexao,$sql);

    while($dados=mysqli_fetch_array($queryselect)) {
        if($dados['login_usuario'] == $usuario && $dados['senha_usuario'] == $senha){
            $_SESSION['usuarioatual']=$dados['nome_usuario'];
            $_SESSION['usu_id_atual']=$dados['cod_usuario'];
                
            header("location:../paginas/Fale_conosco.php");

        }else{
            echo"<script>
            alert('Login/Senha Invalidas!');
            window.location.href='../paginas/Fale_conosco.php'
        </script>";
           
        }

    }





?>