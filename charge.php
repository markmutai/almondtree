<?php

require_once('iframe.php');

if (!empty($_POST)) {

    // convert form data to json format
    $postArray = array(
        "firstName" => $_POST['firstName'],
        "lastName" => $_POST['lastName'],
        "email" => $_POST['email'],
        "phoneNumber" => $_POST['phoneNumber'],

    ); //you might need to process any other post fields you have..

    $json = json_encode($postArray);
}

// $firstName     = $_POST['firstName'];
// $lastName         = $_POST['lastName'];
// $email             = $_POST['email'];
// $phoneNumber    = $_POST['phoneNumber'];

$pesapal = new pesapalV3Helper();

$consumer_key = 'g6KBCf0TtwXN5Jw75Sm6v/4oM0CD3ONx';
$consumer_secret = 'R+6MpoJlRAlSus9buQ2XPc39ppE=';

$signature_method = new OAuthSignatureMethod_HMAC_SHA1();

$iframelink = 'https://www.pesapal.com/API/PostPesapalDirectOrderV4';

$token = $pesapal->getAccessToken($consumer_key, $consumer_secret);
