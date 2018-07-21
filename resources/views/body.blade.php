<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Complete Bootstrap 4 Website Layout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" herf="#"><img src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" >
                <li class="nav-item active">
                    <a  class="nav-link"  herf="#">Home</a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link" herf="#">Fashion</a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link" herf="#">Electronics</a>
                </li>
                <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
            </ul>

        </div>
    </div>
 </nav>




<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"> </li>
        <li data-target="#slides" data-slide-to="1"> </li>
        <li data-target="#slides" data-slide-to="2"> </li>
     </ul>
     <div class="carousel-inner">
         <div class="carousel-item active">
             <img src="img/one.jpg">
             <div class="carousel-caption">
                 <h1 class="display-2">Ecommerce</h1>
                 <h3> Complete website layout</h3>
                 <button type="button" class="btn btn-outline-light btn-lg">VIEW</button>
                         <button type="button" class="btn btn-primary btn-lg">  Getstart </button>
                 </div>
             </div>
             <div class="carousel-item"><img src="img/two.jpg"></div>
             <div class="carousel-item"><img src="img/three.jpg"></div>
         </div>
 </div>
<!--- Meet the team -->
<div class="comtainer-fluid padding" > 
<div class="row welcome text-center" > 
<div class="col-12"> 
    <h1 class="display-4"> Our Offer</h1>
</div>
<hr>
</div>
</div>

<!--- Cards -->
<div class="comtainer-fluid padding" > 
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team1.png">
                <div class="card-body">
                    <h4  class="card-title">koky
                    </h4>
                    <p class="card-text">fffffffffffffffffffffff</p>
                    <a herf="#" class="btn btn-outline-secondary">see product</a>
</div>
</div>
</div>
<div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team2.png">
                <div class="card-body">
                    <h4 class="card-title">Esraa
                    </h4>
                    <p class="card-text">dddddddddddd</p>
                    <a herf="#" class="btn btn-outline-secondary">see product</a>
</div>
</div>
</div>
<div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team3.png">
                <div class="card-body">
                    <h4  class="card-title">join
                    </h4>
                    <p class="card-text">eeeeeeeeeeeeeeeeee</p>
                    <a herf="#" class="btn btn-outline-secondary">see product</a>
</div>
</div>
</div>
</div>
<hr class="my-4">
</div>

<!--- Connect -->

<div class="comtainer-fluid padding" > 
<div class="row text-center padding" >

<div class="col-12">
    <h2>Connect </h2>
</div>
<div class="col-12 social padding">
    <a herf="www.facebook.com"> <i class="fab fa-facebook"></i></a>
    <a herf="#"><i class="fab fa-twitter"></i></a>
    <a herf="#"><i class="fab fa-google-plus-g"></i></a>
    <a herf="#"><i class="fab fa-instagram"></i></a>
    <a herf="#"><i class="fab fa-youtube"></i></a>
</div>
</div>
</div>

<!--- Footer -->
<Footer>
<div class="comtainer-fluid padding" > 
<div class="row text-center" >
<div class="col-12" >  
    <hr class="light">
    <h5>Service Area</h5>
    <hr class="light">
    <p>City, stste , 00000</p>
    <p>City, stste , 00000</p>
    <p>City, stste , 00000</p>
</div>
<div class="col-12">
    <hr class="light-100">
    <h5>&copy; Ecommerce.com</h5>
</div>
</div>
</div>
</Footer>

</body>