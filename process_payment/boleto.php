<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

MercadoPago\SDK::setAccessToken("TEST-1665974097876927-061114-12cf919c7efdb42a7a9f4a8f66f9ccc2-37127590");

$payment = new MercadoPago\Payment();
$payment->transaction_amount = (float)$_POST['transactionAmount'];
$payment->description = $_POST['description'];
$payment->payment_method_id = "bolbradesco";
$payment->payer = array(
    "email" => $_POST['email'],
    "first_name" => $_POST['nome'],
    "last_name" => $_POST['sobrenome'],
    "identification" => array(
        "type" => $_POST['docType'],
        "number" => $_POST['docNumber']
    ),
);

$payment->save();
echo $payment->transaction_details->external_resource_url;