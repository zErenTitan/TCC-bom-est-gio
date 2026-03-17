<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    

    
        include ("conexaocadastro.php");
        $nomvaga=$_POST['nomvaga'];
        $cargovaga=$_POST['cargovaga'];
        $requisitos=$_POST['requisitos'];
        $cidvaga=$_POST['cidvaga'];
        $cargahr=$_POST['cargahr'];
        $salvaga=$_POST['salvaga']; 
        $descricao=$_POST['descricao'];
        if($nomvaga== true && $cargovaga == true && $requisitos == true && $cidvaga == true && $cargahr == true && $salvaga == true && $descricao == true) {
        
        //echo("insert into vaga(nom_vaga,cargo_vaga,requisitos,cidade_vaga,carga_hr_vaga,salario_vaga,descricao_vaga) values('$nomvaga','$cargovaga','$requisitos','$cidvaga','$cargahr','$salvaga','$descricao')");
        $sql=mysqli_query($conexao,"insert into vaga(nom_vaga,cargo_vaga,requisitos,cidade_vaga,carga_hr_vaga,salario_vaga,descricao_vaga)
        values('$nomvaga','$cargovaga','$requisitos','$cidvaga','$cargahr','$salvaga','$descricao')") or die ("Cadastro não inserido.");
        
        echo"<script>
        alert('Cadastro Realizado Com Sucesso!!!');
        window.location.href='../index.php';
        </script>";
        
        
        }else{
        echo ("<a href='CadVagas.html'>ERRO, FAVOR COMPLETAR OS CAMPOS</a>");
            
        }
    ?>


    
</body>
</html>