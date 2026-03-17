<?php
    $resposta = $_POST['resposta'];
    $cod_pergunta_emp=$_POST['codigo_pergunta_emp'];
    include "conexao.php";
        $sql = "update admin_empresa set resposta = '$resposta' where cod_perg_emp = $cod_pergunta_emp";
        $atualizar =mysqli_query($conexao,$sql);

?>
   <script>
            alert("Resposta Enviada Com Sucesso!!!");
            window.location.href="../paginas/pagina_logado_admin.php"
        </script>