<?php
session_start();
if(isset($_SESSION['usuarioatual'])){
    unset($_SESSION['usuarioatual']);
    unset($_SESSION['usu_id_atual']);
    header ("location:../index.php");
}else if(isset($_SESSION['emp_atual'])){
    unset($_SESSION['emp_atual']);
    unset($_SESSION['cod_emp_atual']);
    header ("location:../index.php");
}else if(isset($_SESSION['adm_atual'])){
    unset($_SESSION['adm_atual']);
    unset($_SESSION['adm_id']);
    header ("location:../index.php");
}


?>