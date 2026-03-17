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
        $nomeemp=$_POST['nomeemp'];
        $cnpj=$_POST['cnpj'];
        $empcidade=$_POST['empcidade'];
        $endereco=$_POST['endereco'];
        $cep=$_POST['emp_cep'];
        $email=$_POST['email']; 
        $emp_resp=$_POST['emp_resp'];
        $login=$_POST['login'];
        $senha=$_POST['senha'];
        $data_atual = $_POST ["data_atual"];
     {
        
        //echo("insert into vaga(nom_vaga,cargo_vaga,requisitos,cidade_vaga,carga_hr_vaga,salario_vaga,descricao_vaga) values('$nomvaga','$cargovaga','$requisitos','$cidvaga','$cargahr','$salvaga','$descricao')");
        $sql=mysqli_query($connection,"insert into empresa(emp_nome,emp_cnpj,emp_cidade,emp_endereco,emp_cep,emp_email,emp_responsavel,login_empresa,senha_empresa,data_atual)
        values('$nomeemp','$cnpj','$empcidade','$endereco','$cep','$email','$emp_resp','$login','$senha','$data_atual')") or die ("Cadastro não inserido.");
        
        echo"<script>
        alert('Cadastro Realizado Com Sucesso!!!');
        window.location.href='../index.php';
        </script>";
        
        
        
        }
    ?>


    
</body>
</html>