<?php

    include "conexao.php";
    $id_vaga=$_GET['id_vaga'];
    $sql="delete from vaga where cod_vaga=$id_vaga";
    $deletar=mysqli_query($conexao,$sql);

    echo"<script>
    alert('Vaga deletada com sucesso!$id_vaga');
    window.location.href='../paginas/vagas_cadastradas.php';
    </script>";



?>