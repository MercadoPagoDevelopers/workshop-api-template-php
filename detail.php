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
                                    <!-- ADD PAYMENT FORM HERE -->
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
    </body>
</html>