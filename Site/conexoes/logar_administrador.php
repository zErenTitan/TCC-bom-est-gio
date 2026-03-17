<?php
    session_start();
    include("conexao.php");

    $usuario=$_POST['txtUsuario'];
    $senha=$_POST['txtSenha'];

    $sql="select * from admin ";

    $queryselect=mysqli_query($conexao,$sql);

    while($dados=mysqli_fetch_array($queryselect)) {
        if($dados['login_admin'] == $usuario && $dados['senha_admin'] == $senha){
            $_SESSION['adm_atual']=$dados['nome_admin'];
            $_SESSION['adm_id']=$dados['cod_admin'];
                
            header("location:../paginas/pagina_logado_admin.php");

        }else{
            header("location:../login_admin.php");
           
        }

    }





?>