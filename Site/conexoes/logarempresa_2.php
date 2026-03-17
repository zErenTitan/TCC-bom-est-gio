<?php
    session_start();
    include("conexao.php");

    $usuario=$_POST['txtUsuario'];
    $senha=$_POST['txtSenha'];

    $sql="select * from empresa";

    $queryselect=mysqli_query($conexao,$sql);

    while($dados=mysqli_fetch_array($queryselect)) {
        if($dados['login_empresa'] == $usuario && $dados['senha_empresa'] == $senha){
            $_SESSION['emp_atual']=$dados['emp_nome'];
            $_SESSION['codigo_emp_atual']=$dados['emp_codigo'];
            header("location:../paginas/Fale_conosco.php");
            
        }else{
            echo"<script>
            alert('Login/Senha Invalidas!');
            window.location.href='../paginas/Fale_conosco.php'
        </script>";
           
           
        }

    }


