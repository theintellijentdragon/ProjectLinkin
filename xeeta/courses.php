<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liebling.com</title>

<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendr/bootstrap/js/bootstrap-modal.js" rel="stylesheet" media="screen">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
	
<!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	
	
	
  </head>
  <body>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '682999928485410',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>





<!--EDIT A6 begins-->
<!--Login and signup added in the navbar below-->
<!--EDIT A6 ends-->



<!--Edit A1 begins>
<!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
		<a class="navbar-brand" href="index.html"><img src="img/Capture.jpg" height="42"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
		
		
		
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php?option=home">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="courses.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?option=home">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Portfolio
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="index.php?option=home">1 Column Portfolio</a>
                <a class="dropdown-item" href="index.php?option=home">2 Column Portfolio</a>
                <a class="dropdown-item" href="index.php?option=home">3 Column Portfolio</a>
                <a class="dropdown-item" href="index.php?option=home">4 Column Portfolio</a>
                <a class="dropdown-item" href="index.php?option=home">Single Portfolio Item</a>
              </div>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="#">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Log In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



<!--Edit A1 end-->
<!--Edit A2 begins-->

<header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1510074377623-8cf13fb86c08?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0a38661364c1153b472b3ec80114c3cf&auto=format&fit=crop&w=752&q=80')">
            <div class="carousel-caption d-none d-md-block">
              <h3>ZugZwang</h3>
              <p>Begin the process of professionalism</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1513885237723-b0f4e51908d9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=14d5713801061fd6da0118ff14b42547&auto=format&fit=crop&w=695&q=80')">
            <div class="carousel-caption d-none d-md-block">
              <h3>White Collar</h3>
              <p>Compare the world of online courses</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1524749292158-7540c2494485?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ab5846a70b2ce31cf27899249b229b1e&auto=format&fit=crop&w=750&q=80')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Elegant</h3>
              <p>Learn and become the picasso of internet world</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>




<!--Edit A2 ends-->
  
<!--EDIT A3 Removing Navbar from original content-->
<!--EDIT A# explain: having navbar above and Slider below-->

<!--EDIT A4 Including page content-->

<!--EDIT A5 Including Sections-->


    <!-- Section: Features v.4 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5"><div style="font-family: 'Pacifico', serif;">Why is it so great?</div></h2>
  <!-- Section description -->
  <p class="lead grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4">

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fa fa-2x fa-flag-checkered deep-purple-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">International</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fa fa-2x fa-flask deep-purple-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">Experimental</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-md-0 mb-3">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fa fa-2x fa-glass deep-purple-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">Relaxing</h5>
          <p class="grey-text mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 text-center">
      <img class="img-fluid" src="https://images.unsplash.com/photo-1509966756634-9c23dd6e6815?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=670298bf5d0b94c29ec68504d7ba36b8&auto=format&fit=crop&w=410&q=80" alt="Sample image">
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4">

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fa fa-2x fa-heart deep-purple-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">Beloved</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fa fa-2x fa-flash deep-purple-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">Rapid</h5>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-2">
          <i class="fa fa-2x fa-magic deep-purple-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-10">
          <h5 class="font-weight-bold mb-3">Magical</h5>
          <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.4 -->

<script>
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("cookie").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","cookie.php",true);

xmlhttp.send();
</script>
 



<div id="header">
<?php
$option=$_GET["option"];
if ($option=="about")
{
  include 'file_read.php';
}


if  ($option=="courses")
{
  include 'courses.php';
}

if  ($option=="gallery")
{
  include 'gallery.php';
}

if  ($option=="registration")
{
  include 'registration1.html';
}

if  ($option=="login")
{
  include 'login.html';
}

if  ($option=="contact")
{
  include 'file_read1.php';
}

if  ($option=="home")
{
  include 'home.php';
}
?>

</div>

<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	
<!--EDIT A7 begins-->
<!--Modals Not Working So not implemented-->
<!--EDIT A7 ends-->	
	
	
	
	
	
	
  </body>

</html>



