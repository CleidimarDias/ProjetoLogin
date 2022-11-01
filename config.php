<?php

    $servname="localhost";
    $username="root";
    $password="";
    $dbname="login";

    // Criando concexão com o banco de dados cadastro_clientes

    $conn = new mysqli( $servname, $username, $password, $dbname);

    if ($conn->connect_error ){
        die("Connection failed:" . $conn->connect_error);
    }
    echo "Conected Successfuly <br>";

?>    