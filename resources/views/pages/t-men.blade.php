<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FASHION</title>

    <link rel="icon" type="image/png" href="images/title.jpg">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
    <link rel="stylesheet" type="text/css" href="css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!--[if lt IE 9]-->
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <!--[endif]-->
</head>
<body>
   
                <!--**************start  sidenav*****************-->
    <div id="mySidenav4" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">&times;</a>
            
            <div style="margin: 10px;">
                
                <button type="button" class="btn btn-secondary category-button btn-lg btn-block" data-filter = "all"> All </button>
                <button type="button" class="btn btn-secondary category-button btn-lg btn-block" data-filter = "POLO">POLO</button>
                <button type="button" class="btn btn-secondary category-button btn-lg btn-block" data-filter = "ADIDAS">ADIDAS</button>
                <button type="button" class="btn btn-secondary category-button btn-lg btn-block" data-filter = "LONG">LONG</button>
                <button type="button" class="btn btn-secondary category-button btn-lg btn-block" data-filter = "OTHER">SLEEVE</button>
            </div>
        </div>


        <!--**************end  sidenav*****************-->

<div id="main4">
    <section class="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Centered nav only <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown08">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <br>
    <center><h1>NEW ARRIVALS</h1></center>
    <hr>

    <h1 onclick="openNav4()"><i class="fa fa-bars"></i></h1>
    <div class="container-fluid card-deck" style="padding: 2% 8% 5% 8%;">
        <div class="row">
          

            <div class="col-lg-3 col-md-6 all POLO">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t3.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>POLO</h6>
                        <p>Man</p>
                        <h6>$15.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 all LONG">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t7.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>LONG</h6>
                        <p>Man</p>
                        <h6>$20.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 all ADIDAS">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t5.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>ADIDAS</h6>
                        <p>Man</p>
                        <h6>$30.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 all OTHER">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t12.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>SLEEVE</h6>
                        <p>Man</p>
                        <h6>$32.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 all ADIDAS">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t11.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>ADIDAS</h6>
                        <p>Man</p>
                        <h6>$22.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 all POLO">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t2.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>POLO</h6>
                        <p>Man</p>
                        <h6>$18.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 all OTHER">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t8.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>SLEEVE</h6>
                        <p>Man</p>
                        <h6>$15.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 all OTHER">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t18.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>SLEEVE</h6>
                        <p>Man</p>
                        <h6>$24.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 all ADIDAS">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t15.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>ADIDAS</h6>
                        <p>Man</p>
                        <h6>$30.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 all LONG">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t20.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>LONG</h6>
                        <p>Man</p>
                        <h6>$12.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 all ADIDAS">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t6.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>ADIDAS</h6>
                        <p>Man</p>
                        <h6>$22.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 all POLO">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t22.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>POLO</h6>
                        <p>Man</p>
                        <h6>$44.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 all ADIDAS">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t21.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>ADIDAS</h6>
                        <p>Man</p>
                        <h6>$22.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 all LONG">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t24.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>LONG</h6>
                        <p>Man</p>
                        <h6>$32.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 all OTHER">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t13.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>SLEEVE</h6>
                        <p>Man</p>
                        <h6>$52.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 all LONG">
                <div class="card">
                    <img class="card-img-top" src="images/fashion/Men/t21.jpg" alt="Card image cap">
                    <div class="type">
                        <h6>LONG</h6>
                        <p>Man</p>
                        <h6>$22.00</h6>
                        <center>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>
                        </center>
                        <center><a href="#" class="btn btn-primary">ADD TO CARD <i class="fa fa-cart-plus"></i></a></center>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>


<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myjs.js" ></script>
<script src="js/wow.min.js"></script>
<script>new WOW().init();</script>
<script src="js/jquery.nicescroll.min.js"></script>
</body>
</html>