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
                <div class="row">
                        <div class="col-md-4">
                            <figure class="card card-product">
                                <div class="img-wrap"> 
                                    <img src="/assets/images/samsung-galaxy-s9-xxl.jpg">
                                </div>
                                <figcaption class="info-wrap">
                                    <h6 class="title text-dots"><a href="#">Samsung Galaxy S9</a></h6>
                                    <div class="action-wrap">
                                        <form action="/detail.php" method="post">
                                            <input type="hidden" name="img" value="/assets/images/samsung-galaxy-s9-xxl.jpg">
                                            <input type="hidden" name="title" value="Samsung Galaxy S9">
                                            <input type="hidden" name="price" value="1500">
                                            <button type="submit" class="mp-button float-right">Buy</button>
                                        </form>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$1500</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div> 
                        <div class="col-md-4">
                            <figure class="card card-product">
                                <div class="img-wrap">
                                    <img src="/assets/images/l6g6.jpg">
                                </div>
                                <figcaption class="info-wrap">
                                    <h6 class="title text-dots"><a href="#">LG G6</a></h6>
                                    <div class="action-wrap">
                                        <form action="/detail.php" method="post">
                                            <input type="hidden" name="img" value="/assets/images/l6g6.jpg">
                                            <input type="hidden" name="title" value="LG G6">
                                            <input type="hidden" name="price" value="1000">
                                            <button type="submit" class="mp-button float-right">Buy</button>
                                        </form>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$1000</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div> 
                        <div class="col-md-4">
                            <figure class="card card-product">
                                <div class="img-wrap"> 
                                    <img src="/assets/images/u_10168742.jpg">
                                </div>
                                <figcaption class="info-wrap">
                                    <h6 class="title text-dots"><a href="#">iPhone 8</a></h6>
                                    <div class="action-wrap">
                                        <form action="/detail.php" method="post">
                                            <input type="hidden" name="img" value="/assets/images/u_10168742.jpg">
                                            <input type="hidden" name="title" value="iPhone 8">
                                            <input type="hidden" name="price" value="1600">
                                            <button type="submit" class="mp-button float-right">Buy</button>
                                        </form>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$800</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <figure class="card card-product">
                                <div class="img-wrap"> 
                                    <img src="/assets/images/motorola-moto-g5-plus-1.jpg">
                                </div>
                                <figcaption class="info-wrap">
                                    <h6 class="title text-dots"><a href="#">Motorola G5</a></h6>
                                    <div class="action-wrap">
                                        <form action="/detail.php" method="post">
                                            <input type="hidden" name="img" value="/assets/images/motorola-moto-g5-plus-1.jpg">
                                            <input type="hidden" name="title" value="Motorola G5">
                                            <input type="hidden" name="price" value="900">
                                            <button type="submit" class="mp-button float-right">Buy</button>
                                        </form>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$900</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div> 
                        <div class="col-md-4">
                            <figure class="card card-product">
                                <div class="img-wrap">
                                    <img src="/assets/images/motorola-moto-g4-3.jpg">
                                </div>
                                <figcaption class="info-wrap">
                                    <h6 class="title text-dots"><a href="#">Moto G4</a></h6>
                                    <div class="action-wrap">
                                        <form action="/detail.php" method="post">
                                            <input type="hidden" name="img" value="/assets/images/motorola-moto-g4-3.jpg">
                                            <input type="hidden" name="title" value="Moto G4">
                                            <input type="hidden" name="price" value="300">
                                            <button type="submit" class="mp-button float-right">Buy</button>
                                        </form>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$300</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div> 
                        <div class="col-md-4">
                            <figure class="card card-product">
                                <div class="img-wrap"> 
                                    <img src="/assets/images/003.jpg">
                                </div>
                                <figcaption class="info-wrap">
                                    <h6 class="title text-dots"><a href="#">Sony XPeria ZX2</a></h6>
                                    <div class="action-wrap">
                                        <form action="/detail.php" method="post">
                                            <input type="hidden" name="img" value="/assets/images/003.jpg">
                                            <input type="hidden" name="title" value="Sony Xperia XZ2">
                                            <input type="hidden" name="price" value="1000">
                                            <button type="submit" class="mp-button float-right">Buy</button>
                                        </form>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$1000</span>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
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