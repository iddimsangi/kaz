<!DOCTYPE html>
<html>
<head>

    <!-- CSS (load bootstrap) -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <style>
        .navbar { border-radius:0;
                   color: #fff;
                   background-color: #017572;
                   font-size: 1.5em;
        }
        .jumbotron{
            color: #017572;
        }
        
    </style>

    <!-- JS (load angular, ui-router, and our custom js file) -->
    <script src="bower_components/angular/angular.min.js"></script>
    <script src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script src="bower_components/ngstorage/ngStorage.min.js"></script>
    <script src="app.js"></script>
</head>

<!-- apply our angular app to our site -->
<body>
<nav class="navbar" role="navigation">
    <div class="navbar-header">
    <a class="navbar-brand" ui-sref="#"><em>WEKEZA KILIMO</em></a>
    </div>
    <ul class="nav navbar-nav">
        <li><a ui-sref="home">HOME</a></li>
        <li><a ui-sref="product">MARKETING</a></li>
        <li><a ui-sref="home">MAPPING</a></li>
        <li><a ui-sref="product">DISCUSSION</a></li>

    </ul>
    <div class="collapse navbar-collapse navbar-right" id="#bs-WDM-navbar-collapse-1">
                  <a class="navbar-brand" ui-sref="#">iddimsangi</a>
        </div>
</nav>


<div class="jumbotron text-center">
    <h1>WELCOME TO WEKEZA KILIMO</h1>
</div>

 <div class="row">
        <div class="col-lg-3 col-sm-6 "> 
          <div class="thumbnail">
                <p><img src="img/wek5.jpg" alt=""></p>
                <p class="caption">maizes</p> 
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 "> 
          <div class="thumbnail">
                <p><img src="img/wek9.jpg" alt=""></p>
                <p class="caption">maizes</p> 
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 "> 
          <div class="thumbnail">
                <p><img src="img/wek10.jpeg" alt=""></p>
                <p class="caption">product</p> 
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 "> 
          <div class="thumbnail">
                <p><img src="img/wek8.jpeg" alt="">cotton</p>
                <p class="caption"></p> 
            </div>
        </div>

        


       
    </div>
<!-- NAVIGATION -->


<!-- MAIN CONTENT -->
<!-- THIS IS WHERE WE WILL INJECT OUR CONTENT ============================== -->
<div class="container">
    
</div>

</body>
</html>
