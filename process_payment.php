<?php 
 var_dump($_POST);

    require_once 'vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-555894209657742-022517-d6f9fa55ba6a66797760d013da8d49b7__LA_LB__-181662021");

    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = (float)$_POST['transactionAmount'];
    $payment->token = $_POST['token'];
    $payment->description = $_POST['description'];
    $payment->installments = (int)$_POST['installments'];
    $payment->payment_method_id = $_POST['paymentMethodId'];
    $payment->issuer_id = (int)$_POST['issuer'];

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compraste</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    
    <div class="container">
    
        <?php if ($response['status'] === 'approved' ) : ?>
            <h1>
                Su compra ha sido realizada. Gracias, vuelva prontos!
            </h1>

            <p>Detalles: <?php echo $response['status_detail']; ?></p>

        <?php else : ?>
            <h1>
                Fracaso absoluto
            </h1>

            <p>
                Intente otra vez.
            </p>

            <p>Detalles: <?php echo $response['status_detail']; ?></p>

        <?php endif; ?>
    </div>


</body>
</html>
