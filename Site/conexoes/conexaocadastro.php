<?php
    $Server = "localhost";
    $Pass = "";
    $User = "root";
    $Database = "bdvagas";

    $connection = mysqli_connect($Server,$User,$Pass) or die ("Não foi possível se conectar ao servidor.");
    mysqli_select_db($connection,$Database) or die ("Não foi possível se conectar ao banco de dados.");
?>