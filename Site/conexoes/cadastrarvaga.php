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
         session_start();
         if(!(isset($_SESSION['codigo_emp_atual']))){
            header("location:loginempresa.php");
            
                 
         }else{
             $empcodigo=$_SESSION['codigo_emp_atual'];
         }
    

    
        include ("conexao.php");
        $nomvaga=$_POST['nomvaga'];
        $cargovaga=$_POST['cargovaga'];
        $requisitos=$_POST['requisitos'];
        $cidvaga=$_POST['cidvaga'];
        $cargahr=$_POST['cargahr'];
        $salvaga=$_POST['salvaga']; 
       

    
        
        //echo("insert into vaga(nom_vaga,cargo_vaga,requisitos,cidade_vaga,carga_hr_vaga,salario_vaga,descricao_vaga) values('$nomvaga','$cargovaga','$requisitos','$cidvaga','$cargahr','$salvaga','$descricao')");
        $sql=mysqli_query($conexao,"insert into vaga(nom_vaga,emp_codigo,cargo_vaga,requisitos,cidade_vaga,carga_hr_vaga,salario_vaga)
        values('$nomvaga','$empcodigo','$cargovaga','$requisitos','$cidvaga','$cargahr','$salvaga')") or die ("Cadastro não inserido.");
         $situacao="Registro Inserido com Sucesso!";
   
   
   ?>
        <script>
            alert("<?php echo $situacao ?>");
            window.location.href="../paginas/cadastrarvagas.php"
        </script>
       
        
       
    


    
</body>
</html>