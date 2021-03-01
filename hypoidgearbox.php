<?php
   if(isset($_POST['download'])){
     try {
       $servername = "localhost";
       $username = "root";
       $pass = "Gaeyah4S00per";
       $dbname = "Gaeyah";
       $catalog_name = "Hypoid gearbox";
       $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $pass);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $insert_download_request = "INSERT INTO download_requests(CompanyName, Name, Email, Mobile, catalogName) VALUES(?,?,?,?,?)";
       $insert_download_request = $conn->prepare($insert_download_request);
       $insert_download_request->bindParam(1, $_POST['companyName'],PDO::PARAM_STR);
       $insert_download_request->bindParam(2, $_POST['name'],PDO::PARAM_STR);
       $insert_download_request->bindParam(3, $_POST['email'],PDO::PARAM_STR);
       $insert_download_request->bindParam(4, $_POST['mobile'],PDO::PARAM_STR);
       $insert_download_request->bindParam(5, $catalog_name,PDO::PARAM_STR);
       $insert_download_request->execute(); 
       echo "success"; 
       header('Content-Type: application/download');
       header('Content-Disposition: attachment; filename="Hypoid Catalog.pdf"');
       header("Content-Length: " . filesize("files/Hypoid Catalog.pdf"));
   
       $fp = fopen("files/Hypoid Catalog.pdf", "r");
       fpassthru($fp);
       fclose($fp);
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
         .btn-link{
         color: #ed201f;
         }
         .btn-link:hover{
         color: #ed201f; 
         }
         .gear-pic{
         width:55%;
         }
         .table-striped tbody tr:nth-of-type(odd){
         background: transparent;
         }
         .card-body{
         padding:0;
         }
         .gallery{
         height:1770px;
         }
         @media only screen and (max-width: 768px) {/*mobile*/
         .gear-pic{
         width:100%;
         }
         .gallery{
         height:1130px;
         }
         }
         .btn.btn-primary{
         margin-top:10px;
         }
         .form-group{
         margin-bottom: 0px;
         }
         /* textarea.form-control{
         height:50px!important;
         }  */
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
                  <a class="nav-link active" href="products.php">Products</a>
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
                  <a class="nav-link " href="contact.php">Contact</a>
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
                  <h1 class="mb-3 bread">Hypoid Gearbox </h1>
                  <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="practice-areas.html">Products <i class="ion-ios-arrow-forward"></i></a></span> <span>Hypoid Gearbox</span></p>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section ftco-degree-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 ftco-animate">
                  <p>
                     <img src="images/hypoid.png" alt="" class="img-fluid gear-pic">
                  </p>
                  <h2 class="mb-3">Characteristics:</h2>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p> -->
                  <ul>
                     <li>High quality aluminium alloy, appearance elegant</li>
                     <li>Good heat dissipation capacity, high carrying ability.</li>
                     <li>Installed in multi-surfaces output shaft, various input and output type, connect with other transmission machinery easily.</li>
                     <li>Smaller size compact structure, light weight and output type, conjoin other transmission machinery easily.</li>
                     <li>Run steadily and low noise.</li>
                     <li>High reliability and high efficiency.</li>
                  </ul>
                  <!-- <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p> -->
                  <!-- <span><a href="files/Hypoid Catalog.pdf" class="btn btn-primary" target="_blank">Request Catalogue</a></span> -->
                  <span><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal" data-whatever="@getbootstrap">Request Catalogue</button></span>
                  <span><a href="files/Why Hypoid over Worm.pdf" class="btn btn-primary" target="_blank">Why Hypoid gear box?</a></span><br><br>
               </div>
            </div>
         </div>
         <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Download Catalogue</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <form method="POST">
                        <div class="form-group">
                           <label for="company-name" class="col-form-label">Company Name:</label>
                           <input type="text" class="form-control" id="company-name" name="companyName" required>
                        </div>
                        <div class="form-group">
                           <label for="name" class="col-form-label">Name:</label>
                           <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                           <label for="email-text" class="col-form-label">Email:</label>
                           <input type="email" class="form-control" id="email-text" name="email" required>
                        </div>
                        <div class="form-group">
                           <label for="mobile" class="col-form-label">Mobile:</label>
                           <input type="text" class="form-control" id="mobile" name="mobile" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required>
                        </div>
                        <br>
                        <center><button type="submit" class="btn btn-primary" name="download">Download</button></center>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <iframe src="hypoid_gallery.php" frameborder="0" width="100%" class="gallery"></iframe>    
            </div>
         </div>
         <?php //require("hypoid_gallery.php");?>
         <div class="container">
            <h2 class="mb-3">Applications:</h2>
            <p><b>NOTE:</b> A - Uniform load, B - Moderate shock load, C - Heavy shock load</p>
            <div class="row">
               <div class="col-lg-6" style="padding:0">
                  <div id="accordion">
                     <div class="card">
                        <div class="card-header" id="headingTwo">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#ONE" aria-expanded="false" aria-controls="ONE">
                              AIR BLOWERS
                              </button>
                           </h5>
                        </div>
                        <div id="ONE" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Air blower (axial or radial)</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Rn of colling tower</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Induced draught fan</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Rotary piston type fan </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Turbo-fan </td>
                                       <td>A</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              CONSTRUCTION MACHINERY
                              </button>
                           </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Concrete mixer</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Hoist</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Road building machinery</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Boring mill</td>
                                       <td>B</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              CHEMICAL MACHINERY
                              </button>
                           </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Mixer (liquid)</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Mixer (half liquid)</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Centrifuge (heavy)</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Centrifuge (light)</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Cooling rolling drum</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Dry rolling drum</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Mixer</td>
                                       <td>B</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#FOUR" aria-expanded="false" aria-controls="FOUR">
                              COMPRESSOR
                              </button>
                           </h5>
                        </div>
                        <div id="FOUR" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Piston type copressor</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Turbo compressor</td>
                                       <td>B</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#FIVE" aria-expanded="false" aria-controls="FIVE">
                              TRANSMISSION FREIGHTER
                              </button>
                           </h5>
                        </div>
                        <div id="FIVE" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td> Pal conveyer</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Balance lifter </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Trough conveyer </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Ribbon conveyer (large piece) </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Ribbon conveyer (small piece) </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Drum-type flour conveyer </td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Chain conveyer </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Ring type conveyer</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Lifter</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Hoist </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Crank-connecting conveyor </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Lifter </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Worm conveyer </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Steel-band conveyer </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Chain reed-type conveyer  </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Crab freighter </td>
                                       <td>B</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#SIX" aria-expanded="false" aria-controls="SIX">
                              HOIST
                              </button>
                           </h5>
                        </div>
                        <div id="SIX" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Bracket swing aear assembly</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Hoisst gear assembly </td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Derrick gear assembly </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Siering gear assembly  </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Moving gear assembly </td>
                                       <td>C</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#SEVEN" aria-expanded="false" aria-controls="SEVEN">
                              LAND DREDGER
                              </button>
                           </h5>
                        </div>
                        <div id="SEVEN" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Drum-type coveyer </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Drum-type rotation wheel </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Dredger head </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Powered crab  </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Pump</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Pump turning gear assembly  </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Moving gear assembly (apron wheel)  </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Moving gear assembly (track) </td>
                                       <td>B</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#EIGHT" aria-expanded="false" aria-controls="EIGHT">
                              FOODSTUFF PROCESSING MACHINERY
                              </button>
                           </h5>
                        </div>
                        <div id="EIGHT" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Placer or box filler </td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Cane crusher </td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Cane cutter </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Cane crasher</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Mixer</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Paste bucket</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Packager</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Beet slicer</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Beet washing machine</td>
                                       <td>B</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#NINE" aria-expanded="false" aria-controls="NINE">
                              MOTOR AND CONVERSION EQUIPMENTS
                              </button>
                           </h5>
                        </div>
                        <div id="NINE" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Frequency converter </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Motor</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Welding motor </td>
                                       <td>C</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#TEN" aria-expanded="false" aria-controls="TEN">
                              WASHING MACHINE
                              </button>
                           </h5>
                        </div>
                        <div id="TEN" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Rolling drum </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Washing machine</td>
                                       <td>B</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#ELEVEN" aria-expanded="false" aria-controls="ELEVEN">
                              METAL ROLLER MACHINE
                              </button>
                           </h5>
                        </div>
                        <div id="ELEVEN" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Steel cutter</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Chain conveyer </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Cold mill </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Continuous casting equipments </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Cold bed </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Cropper </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Cross steering transmitter </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Deruster </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Heavy and medium steel mill </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Bar mill</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Bar transmission machine</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Bar pusher </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Push bed </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Shears </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Lumber elevator platform </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Roll Adjusting Equipments </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Roller levelling machine </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Mill rolling way (heavy)</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Mill rolling way (light)</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Sheet rolling mill </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Trimming shears </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Pipe welder </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Soldering machine (belt material and wire rod)</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Wire drawbench </td>
                                       <td>B</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6" style="padding:0">
                  <div id="accordion">
                     <div class="card">
                        <div class="card-header" id="headingTwo">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#twelve" aria-expanded="false" aria-controls="twelve">
                              METAL PROCESSING MACHINE TOOLS  
                              </button>
                           </h5>
                        </div>
                        <div id="twelve" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Power shaft </td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Drop hammer</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Machine tool and necessary</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Machine tool and necessary</td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Machine tool and main driving equipment</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Metal facing machine </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Plate-leveling machine </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Tool Backinq-out punch </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Press machine tool</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Cutting machine</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Sheet bending machine tool</td>
                                       <td>B</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingTwo">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#thirteen" aria-expanded="false" aria-controls="thirteen">
                              PETROLEUM PROCESSING MACHINERY 
                              </button>
                           </h5>
                        </div>
                        <div id="thirteen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Pump of oil pipe line </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Rotary drilling equipment </td>
                                       <td>C</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#fourteen" aria-expanded="false" aria-controls="fourteen">
                              PAPERING MACHINE 
                              </button>
                           </h5>
                        </div>
                        <div id="fourteen" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Glazing press</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Multilayer paper board machine</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Drying cylinder</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Glazing cylinder</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Masher </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Mashing and breaking machine </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Suction roll</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Wet paper roller machine </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Water absorbing roller machine</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Welon machine </td>
                                       <td>C</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#fifteen" aria-expanded="false" aria-controls="fifteen">
                              PUMPS
                              </button>
                           </h5>
                        </div>
                        <div id="fifteen" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Centrifugal pump (thin liquid) </td>
                                       <td>A</td>
                                    </tr>
                                    <tr>
                                       <td>Centrifugal pump (half liquid)</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Displacement pump </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Plunger pump </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Force pump </td>
                                       <td>C</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#sixteen" aria-expanded="false" aria-controls="sixteen">
                              PLASTIC EQUIPMENTS 
                              </button>
                           </h5>
                        </div>
                        <div id="sixteen" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Glazing press </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Ejecting press </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Spiral extruding machine </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Mixing machine </td>
                                       <td>B</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#seventeen" aria-expanded="false" aria-controls="seventeen">
                              RUBBER EQUIPMENT 
                              </button>
                           </h5>
                        </div>
                        <div id="seventeen" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Glazing press </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Ejecting press</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Mixing stir machine</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Kneading machine</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Roller machine </td>
                                       <td>C</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#eighteen" aria-expanded="false" aria-controls="eighteen">
                              STONE PORCELAIN CLAY PROCESSING EQUIPMENTS 
                              </button>
                           </h5>
                        </div>
                        <div id="eighteen" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Ball crusher</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Ejecting press and breaker</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Breaker</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Brick press </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Beating crusher</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Converter</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Cylinder mill </td>
                                       <td>C</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#nineteen" aria-expanded="false" aria-controls="nineteen">
                              TEXTILE MACHINERY 
                              </button>
                           </h5>
                        </div>
                        <div id="nineteen" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Feeding machine </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Loom machine</td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Dyeing machine </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Purified drum </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Welon machine </td>
                                       <td>B</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#twenty" aria-expanded="false" aria-controls="twenty">
                              WASTER TREATMENT EQUIPMENTS 
                              </button>
                           </h5>
                        </div>
                        <div id="twenty" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Air blast </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Screw pump </td>
                                       <td>B</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#twenty-one" aria-expanded="false" aria-controls="twenty-one">
                              WOOD PROCESSING MACHINE TOOL 
                              </button>
                           </h5>
                        </div>
                        <div id="twenty-one" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <table class="table table-striped">
                                 <tbody>
                                    <tr>
                                       <td>Barker</td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Facing machine </td>
                                       <td>B</td>
                                    </tr>
                                    <tr>
                                       <td>Saw bench </td>
                                       <td>C</td>
                                    </tr>
                                    <tr>
                                       <td>Wood processing machine tool</td>
                                       <td>A</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <br><br>
         </div>
         <!-- .col-md-8 -->
         </div>
         </div>
         </div>
      </section>
      <!-- .section -->
      <?php require("footer.php");?>
      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen">
         <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
         </svg>
      </div>
      <div style="position:fixed;right:50px;bottom:0px;background-color:#3aaa52;padding:8px;">
         <a href="contact.php" style="color:white;"><span class="icon icon-envelope"></span>&nbsp;&nbsp;&nbsp;Contact Now</a>
      </div>
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