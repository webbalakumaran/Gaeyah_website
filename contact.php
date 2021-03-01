<?php
  if(isset($_POST['send'])){
    print_r($_POST);
    try {
      $servername = "localhost";
      $username = "root";
      $pass = "";
      $dbname = "test";
      $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $insert_download_request = "INSERT INTO form_details(Name, Email, Subject, Message) VALUES(?,?,?,?)";
      $insert_download_request = $conn->prepare($insert_download_request);
      $insert_download_request->bindParam(1, $_POST['name'],PDO::PARAM_STR);
      $insert_download_request->bindParam(2, $_POST['email'],PDO::PARAM_STR);
      $insert_download_request->bindParam(3, $_POST['subject'],PDO::PARAM_STR);
      $insert_download_request->bindParam(4, $_POST['message'],PDO::PARAM_STR);
      $insert_download_request->execute(); 
      echo '<p style="    width: 350px;
      color: white;
      padding: 11px;
      background: green;
      z-index: 23;
      position: absolute;
      top: 17%;
      border-radius: 11px;
      right: 20px;">Thank you getting in touch with us</p>'; 
      }
  catch(PDOException $e)
      {
          $conn = null;
          echo "DBCONNECT-> Connection failed: " . $e->getMessage() .'<br>';
          echo "Something went wrong. Please try again later.";
      }
    
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-2EC4DMENT7"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-2EC4DMENT7');
    </script>
    <title>Gaeyah Transmission</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
		.ftco-navbar-light .navbar-nav > .nav-item > .nav-link{
			color: black;
		}
		.active{
			color: #ed201f!important;
		}

		@media (min-width: 320px) and (max-width: 480px) {
			.nav-position{
			display: none!important;
			}
		}
		@media (min-width: 481px) and (max-width: 767px) {
			.nav-position{
			display: none!important;
			}
		}
		@media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {
			.nav-position{
			display: none!important;
			}	
		}
		@media (min-width: 768px) and (max-width: 1024px) {
			.nav-position{
			display: none!important;
			}  
		}
				
	</style>


  </head>
  <body>
    
	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <span class="nav-position" style="margin-left: 200px;"></span>
		<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" style="width:150px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="oi oi-menu"></span> MENU
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown"  style="float: right!important;">
			<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Company
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="about.php">About</a>
					<a class="dropdown-item" href="news.php">News & Events</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="products.php">Products</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="industry.php">Industry</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="references.php">Reference</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="salespartners.php">Sales Partner</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="contact.php">Contact</a>
			</li>
			</ul>
		</div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-color: rgb(213, 212, 207);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center my-cover">
            <h1 class="mb-3 bread">Contact</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact </span></p>
          </div>
        </div>
      </div>
    </section>
   	
   	<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info" style="zoom:95%">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> No.17/3B, G J Complex, Avadi Main Road, Senneerkuppam, Chennai 600 056, Tamil Nadu. </p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://8754422004">+91 8754422004</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Sales: </span><a href="mailto:sales@gaeyah.com">sales@gaeyah.com</a></p>
            <p><span>Operations: </span><a href="mailto:supplychain@gaeyah.com">supplychain@gaeyah.com</a></p>
            <p><span>Partnerships and others: </span><a href="mailto:corporate@gaeyah.com">corporate@gaeyah.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>GST No:</span> <a href="#">33AAVFG7925K1ZR</a></p>
          </div>
        </div>
        <div class="row block-9 no-gutters">
          <div class="col-lg-6 order-md-last d-flex">
            <form method="post" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="subject">
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" name="send" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-lg-6 d-flex">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15546.460286568914!2d80.1131999!3d13.0601562!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd709bca6d36a313b!2sGaeyah%20Transmission!5e0!3m2!1sen!2sin!4v1614619008504!5m2!1sen!2sin" width="600" height="560" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </section>

    <?php require("footer.php");?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>