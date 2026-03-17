 <?php 
        session_start(); 
        $cod_usuario = $_SESSION['usu_id_atual'];
        
        
      
        $mensagem =  $_POST['pergunta'];
        
        include "conexao.php";
        
       
        if(isset($cod_usuario)){
            $sql="insert into admin_usuario (cod_admin,cod_usuario,pergunta) values('1','$cod_usuario','$mensagem')";
             $conectar=mysqli_query($conexao,$sql);
            echo " <script>
            alert('Pergunta Enviada com Sucesso!');
            window.location.href='../paginas/paginalogado.php'
             </script>";
        }else if(isset($_SESSION['codigo_emp_atual'])){
            $cod_empresa = $_SESSION['codigo_emp_atual'];
            $sql2= "insert into admin_empresa (cod_admin,cod_empresa,pergunta) values ('1','$cod_empresa','$mensagem')";
            $conectar2= mysqli_query($conexao,$sql2);
            echo " <script>
            alert('Pergunta Enviada com Sucesso! ');
            window.location.href='../paginas/pagina_logado_emp.php'
             </script> ";

        }
        ?>
       

    