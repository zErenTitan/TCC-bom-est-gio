<?php
    
    session_start();
    $id_final2=$_SESSION['cod_vaga'];

    include ("../conexoes/conexao.php");
    $contar = 1;
    
        $extensao = strtolower(substr($_FILES['curriculo']['name'], -4));
        $novo_nome=md5(time()) . $extensao;
        $teste2="../paginas/curriculos/";
        $codigo_usuario = $_SESSION['usu_id_atual'];
        
        $upload_file= $teste2.basename($_FILES['curriculo']['name']);
        move_uploaded_file($_FILES['curriculo']['tmp_name'], $teste2.$novo_nome);


        mysqli_query($conexao ,"insert into usuario_vaga(cod_usuario,cod_vaga,curriculo) values('$codigo_usuario',' $id_final2','$novo_nome')");
        
                      
        echo"<script>
        alert('Sua candidatura foi realizada com sucesso! ');
        window.location.href='../paginas/Vagas.php';
        </script>
        
        
        ";
                    
                    
?>