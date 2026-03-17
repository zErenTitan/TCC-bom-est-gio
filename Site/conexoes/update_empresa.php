<?php

    session_start();
    
    include("conexao.php");
    //Variáveis para atulizar cadastro

    $NomeEmpresa = $_POST["nomeemp"];
    $cnpj = $_POST["cnpj"];
    $empcidade = $_POST["empcidade"];
    $endereco = $_POST["endereco"];
    $Cep = $_POST["emp_cep"];
    $email = $_POST["email"];
    $Responsavel = $_POST["emp_resp"];
    $Usuario = $_POST["login"];
    $Senha = $_POST["senha"];
    $DataCad = $_POST["data_atual"];

    $sql = mysqli_query($conexao,"update empresa set emp_nome= '$NomeEmpresa', emp_cnpj= '$cnpj',emp_cidade= '$empcidade',
    emp_email= '$email',emp_responsavel= '$Responsavel', emp_endereco= '$endereco',emp_cep= '$Cep',
    login_empresa= '$Usuario',senha_empresa= '$Senha', data_atual= '$DataCad' where emp_codigo =" .$_SESSION['codigo_emp_atual']) or die ;
    
    
    
?>
<script>
    alert("<?php echo 'Informações Atualizadas Com Sucesso!'?>");
    window.location.href="../paginas/configconta.php"
</script>