<?php
    $sessionId = $_POST["sessionId"] ?? "";
    $serviceCode = $_POST["serviceCode"] ?? "";
    $phoneNumber = $_POST["phoneNumber"] ?? "";
    $text = $_POST["text"] ?? "";

    if ($text == "") {
        $response = "CON Menu \n";
        $response .= "1. Compte \n";
        $response .= "2. Phone number \n";
    } else if ($text == "1") {
        $response = "CON Compte \n";
        $response .= "1. Compte CDF \n";
        $response .= "2. Compte USD \n";
    } else if ($text == "2") {
        $response = "END Phone number : +243 XXX XXX XXX \n";
    } else if ($text == "1*1") {
        $response = "END Compte CDF : 2000000.00 \n";
    } else if ($text == "1*2") {
        $response = "END Compte USD : 15000.00 \n";
    }

    header('Content-type; text/plain');
    echo $response;
?>
