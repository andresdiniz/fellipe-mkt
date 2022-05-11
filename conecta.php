<?php
    $servername = "localhost";/*"Mysql#.000webhost.com"; /* LETRA INICIAL MAUIUSCULA*/
    $username = "u247638240_fzconsig"; /*"id17543421_admandre";*/
    $password = "Fuiza@2022"; /*jJ7AKrr&gLwm_%cd*/
    $banco = "u247638240_dados_usuarios";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$banco);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>
