<?php
    include "conexao.php";
    $id_vaga=$_POST['id_vaga'];
    $nome_vaga=$_POST['nome_vaga'];
    $cidade=$_POST['cidade_vaga'];
    $salario=$_POST['salario_vaga'];
    $cargo=$_POST['cargo_vaga'];
    $requisitos=$_POST['requisitos'];
    $carga_hr=$_POST['carga_hr'];
 

    $sql="update vaga set nom_vaga='$nome_vaga', cidade_vaga='$cidade', salario_vaga='$salario', cargo_vaga = '$cargo',carga_hr_vaga= '$carga_hr' , requisitos='$requisitos' where cod_vaga = $id_vaga ";
    $gravar= mysqli_query($conexao,$sql) or die ("");

    if ($gravar){
        echo"<script>
        alert('Vaga atualizada com sucesso!');
        window.location.href='../paginas/vagas_cadastradas.php';
        </script>";
        
    }

?>