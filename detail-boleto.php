<!DOCTYPE html>
<html>
    <head>
        <title>E-commerce sample</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=1024">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>

        <link rel="stylesheet" href="/assets/custom.css" type="text/css">
    </head>

    <body>
        <div id="page-container">
            <div class="header-container">
                <img src="/assets/images/banner.jpg"/>
            </div>
            <div id="content-wrap">
                <br>  
                <div class="col-lg-8 main-section p-3 bg-white">
                <div class="row m-0">
                    <div class="col-lg-6 left-side-product-box pb-3">
                        <img id="product_img" src="<?php echo $_POST['img'] ?>" class="border p-3">
                    </div>
                    <div class="col-lg-6">
                        <div class="right-side-pro-detail border p-3 m-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p id="product_title" class="m-0 p-0"> <?php echo $_POST['title'] ?> </p>
                                </div>
                                <div class="col-lg-12">
                                    <p id="product_price" class="m-0 p-0 price-pro"> <?php echo $_POST['price'] ?> </p>
                                    <hr class="p-0 m-0">
                                </div>
                                <div class="col-lg-3">
                                    <br><h6>Quantity :</h6>
                                    <input id="product_quantity" type="number" class="form-control text-center w-100" value="1">
                                </div>
                                <div class="col-lg-12">
                                    <hr class="p-0 m-0">
                                    <br>
                                    <form action="/process_payment/boleto.php" method="post" id="paymentForm">
                                        <h3>Detalhe do comprador</h3>
                                        <div>
                                            <div>
                                                <label for="email">E-mail</label>
                                                <input id="email" name="email" type="text" value="test@test.com"></select>
                                            </div>
                                            <div>
                                                <label for="docType">Tipo de documento</label>
                                                <select id="docType" name="docType" data-checkout="docType" type="text"></select>
                                            </div>
                                            <div>
                                                <label for="docNumber">Número do documento</label>
                                                <input id="docNumber" name="docNumber" data-checkout="docNumber" type="text"/>
                                            </div>
                                            <div>
                                                <label for="nome">Nome</label>
                                                <input id="nome" name="nome" value="nome" type="text">
                                            </div>
                                            <div>
                                                <label for="sobrenome">Sobrenome</label>
                                                <input id="sobrenome" name="sobrenome" value="sobrenome" type="text">
                                            </div>
                                        </div>
<!--                                        <h3>Detalhes do cartão</h3>-->
<!--                                        <div>-->
<!--                                            <div>-->
<!--                                                <label for="cardholderName">Titular do cartão</label>-->
<!--                                                <input id="cardholderName" data-checkout="cardholderName" type="text">-->
<!--                                            </div>-->
<!--                                            <div>-->
<!--                                                <label for="">Data de vencimento</label>-->
<!--                                                <div>-->
<!--                                                    <input type="text" placeholder="MM" id="cardExpirationMonth" data-checkout="cardExpirationMonth"-->
<!--                                                           onselectstart="return false" onpaste="return false"-->
<!--                                                           oncopy="return false" oncut="return false"-->
<!--                                                           ondrag="return false" ondrop="return false" autocomplete=off>-->
<!--                                                    <span class="date-separator">/</span>-->
<!--                                                    <input type="text" placeholder="YY" id="cardExpirationYear" data-checkout="cardExpirationYear"-->
<!--                                                           onselectstart="return false" onpaste="return false"-->
<!--                                                           oncopy="return false" oncut="return false"-->
<!--                                                           ondrag="return false" ondrop="return false" autocomplete=off>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div>-->
<!--                                                <label for="cardNumber">Número do cartão</label>-->
<!--                                                <input type="text" id="cardNumber" data-checkout="cardNumber"-->
<!--                                                       onselectstart="return false" onpaste="return false"-->
<!--                                                       oncopy="return false" oncut="return false"-->
<!--                                                       ondrag="return false" ondrop="return false" autocomplete=off>-->
<!--                                            </div>-->
<!--                                            <div>-->
<!--                                                <label for="securityCode">Código de segurança</label>-->
<!--                                                <input id="securityCode" data-checkout="securityCode" type="text"-->
<!--                                                       onselectstart="return false" onpaste="return false"-->
<!--                                                       oncopy="return false" oncut="return false"-->
<!--                                                       ondrag="return false" ondrop="return false" autocomplete=off>-->
<!--                                            </div>-->
<!--                                            <div id="issuerInput">-->
<!--                                                <label for="issuer">Banco emissor</label>-->
<!--                                                <select id="issuer" name="issuer" data-checkout="issuer"></select>-->
<!--                                            </div>-->
<!--                                            <div>-->
<!--                                                <label for="installments">Parcelas</label>-->
<!--                                                <select type="text" id="installments" name="installments"></select>-->
<!--                                            </div>-->
<!--                                            <div>-->
                                                <input type="hidden" name="transactionAmount" id="transactionAmount" value="<?php echo $_POST['price'] ?>" />
<!--                                                <input type="hidden" name="paymentMethodId" id="paymentMethodId" />-->
                                                <input type="hidden" name="description" id="description" value="<?php echo $_POST['title'] ?>"/>
<!--                                                <br>-->
<!--                                                <button type="submit">Pagar</button>-->
<!--                                                <br>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                        <input type="submit">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <br><br>
            </div>
            <footer id="footer" class="bg-secondary">  
                <div class="card-body text-left">
                    <img src="/assets/images/logo.png" style="width: 100px"/>
                    <h6 style="color: white; display:inline"> | Workshop Resource</h6>
                </div>
            </footer>
        </div>

        <script>
            window.Mercadopago.setPublishableKey("TEST-fd1af9f1-9872-4937-86a9-7522706d0de8");
// <!--            -->
            window.Mercadopago.getIdentificationTypes();
<!--            document.getElementById('cardNumber').addEventListener('change', guessPaymentMethod);-->
<!---->
<!--            function guessPaymentMethod(event) {-->
<!--                let cardnumber = document.getElementById("cardNumber").value;-->
<!--                if (cardnumber.length >= 6) {-->
<!--                    let bin = cardnumber.substring(0,6);-->
<!--                    window.Mercadopago.getPaymentMethod({-->
<!--                        "bin": bin-->
<!--                    }, setPaymentMethod);-->
<!--                }-->
<!--            };-->
<!---->
<!--            function setPaymentMethod(status, response) {-->
<!--                if (status == 200) {-->
<!--                    let paymentMethod = response[0];-->
<!--                    document.getElementById('paymentMethodId').value = paymentMethod.id;-->
<!---->
<!--                    if(paymentMethod.additional_info_needed.includes("issuer_id")){-->
<!--                        getIssuers(paymentMethod.id);-->
<!--                    } else {-->
<!--                        getInstallments(-->
<!--                            paymentMethod.id,-->
<!--                            document.getElementById('transactionAmount').value-->
<!--                        );-->
<!--                    }-->
<!--                } else {-->
<!--                    alert(`payment method info error: ${response}`);-->
<!--                }-->
<!--            }-->
<!--            function getIssuers(paymentMethodId) {-->
<!--                window.Mercadopago.getIssuers(-->
<!--                    paymentMethodId,-->
<!--                    setIssuers-->
<!--                );-->
<!--            }-->
<!---->
<!--            function setIssuers(status, response) {-->
<!--                if (status == 200) {-->
<!--                    let issuerSelect = document.getElementById('issuer');-->
<!--                    response.forEach( issuer => {-->
<!--                        let opt = document.createElement('option');-->
<!--                        opt.text = issuer.name;-->
<!--                        opt.value = issuer.id;-->
<!--                        issuerSelect.appendChild(opt);-->
<!--                    });-->
<!---->
<!--                    getInstallments(-->
<!--                        document.getElementById('paymentMethodId').value,-->
<!--                        document.getElementById('transactionAmount').value,-->
<!--                        issuerSelect.value-->
<!--                    );-->
<!--                } else {-->
<!--                    alert(`issuers method info error: ${response}`);-->
<!--                }-->
<!--            }-->
<!--            function getInstallments(paymentMethodId, transactionAmount, issuerId){-->
<!--                window.Mercadopago.getInstallments({-->
<!--                    "payment_method_id": paymentMethodId,-->
<!--                    "amount": parseFloat(transactionAmount),-->
<!--                    "issuer_id": issuerId ? parseInt(issuerId) : undefined-->
<!--                }, setInstallments);-->
<!--            }-->
<!---->
<!--            function setInstallments(status, response){-->
<!--                if (status == 200) {-->
<!--                    document.getElementById('installments').options.length = 0;-->
<!--                    response[0].payer_costs.forEach( payerCost => {-->
<!--                        let opt = document.createElement('option');-->
<!--                        opt.text = payerCost.recommended_message;-->
<!--                        opt.value = payerCost.installments;-->
<!--                        document.getElementById('installments').appendChild(opt);-->
<!--                    });-->
<!--                } else {-->
<!--                    alert(`installments method info error: ${response}`);-->
<!--                }-->
<!--            }-->
<!--            doSubmit = false;-->
<!--            document.getElementById('paymentForm').addEventListener('submit', getCardToken);-->
<!--            function getCardToken(event){-->
<!--                event.preventDefault();-->
<!--                if(!doSubmit){-->
<!--                    let $form = document.getElementById('paymentForm');-->
<!--                    window.Mercadopago.createToken($form, setCardTokenAndPay);-->
<!--                    return false;-->
<!--                }-->
<!--            };-->
<!---->
<!--            function setCardTokenAndPay(status, response) {-->
<!--                if (status == 200 || status == 201) {-->
<!--                    let form = document.getElementById('paymentForm');-->
<!--                    let card = document.createElement('input');-->
<!--                    card.setAttribute('name', 'token');-->
<!--                    card.setAttribute('type', 'hidden');-->
<!--                    card.setAttribute('value', response.id);-->
<!--                    form.appendChild(card);-->
<!--                    doSubmit=true;-->
<!--                    form.submit();-->
<!--                } else {-->
<!--                    alert("Verify filled data!\n"+JSON.stringify(response, null, 4));-->
<!--                }-->
<!--            };-->
<!---->
<!--            //-->
<!--        </script>-->
    </body>
</html>