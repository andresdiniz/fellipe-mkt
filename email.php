<?php
    include ('conecta.php');
    $nome = $_POST["tName"];
    $email = $_POST["tEmail"];
    $tel = $_POST["tTel"];
    
    $timezone = new DateTimeZone("America/Sao_Paulo");
    $agora = new DateTime('now', $timezone);
    $result = $agora->format("Y-m-d H:i:s");
    $somenteNumeros = preg_replace('/[^0-9]/', '', $tel);
    $sql = "INSERT INTO leads (ID, Nome, Email, Telefone, dataatual) VALUES (NULL, '$nome','$email','$somenteNumeros','$result')";
    $whatsapp = "https://wa.me/" . $somenteNumeros;
    if ($conn->query($sql) === TRUE) {
    include('obrigado.html');
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "centraldeatendimento@fzconsignados.com.br";
    $to = "fellipe-fiuza@hotmail.com";
    $subject = "Solicitação de contato";
    $message = "Nova solicitação de contato:</br>
        Nome: .$nome</br>
        Email: .$email</br>
        Telefone: .$tel</br>
        Whastapp: .$whatsapp 
        Favor entrar em contato com o cliente";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    
     } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
       }
?>