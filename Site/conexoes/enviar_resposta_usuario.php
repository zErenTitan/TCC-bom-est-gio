<?php
    $resposta = $_POST['resposta'];
    $cod_pergunta=$_POST['codigo_pergunta'];
    include "conexao.php";
        $sql = "update admin_usuario set resposta = '$resposta' where cod_pergunta = $cod_pergunta";
        $atualizar =mysqli_query($conexao,$sql);

?>
   <script>
            alert("Resposta Enviada Com Sucesso!!!");
            window.location.href="../paginas/pagina_logado_admin.php"
        </script>