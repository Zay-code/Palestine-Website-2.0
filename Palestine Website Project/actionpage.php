<?php
if(isset($_POST['submit']))
{
    $secretKey = "6LclHPgaAAAAALUUax1RbIfxAuFqnP6s5h_q3F-W";
    $responsKey = $_POST['g-recaptcha-response'];
    $UserIP = $_SERVER['REMOTE_ADDR'];
    $url = "http://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responsKey&remoteip=$UserIP";

    $response = file_get_contents($url);
    $response = json_decode($response);


}
?>