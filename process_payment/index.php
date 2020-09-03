<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require_once '../vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-1665974097876927-061114-12cf919c7efdb42a7a9f4a8f66f9ccc2-37127590");

    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = (float)$_POST['transactionAmount'];
    $payment->token = $_POST['token'];
    $payment->description = $_POST['description'];
    $payment->installments = (int)$_POST['installments'];
    $payment->payment_method_id = $_POST['paymentMethodId'];

    $payer = new MercadoPago\Payer();
    $payer->email = $_POST['email'];
    $payer->identification = array(
        "type" => $_POST['docType'],
        "number" => $_POST['docNumber']
    );
    $payment->payer = $payer;

    $payment->save();

    $response = array(
        'status' => $payment->status,
        'status_detail' => $payment->status_detail,
        'id' => $payment->id
    );
    echo json_encode($response);