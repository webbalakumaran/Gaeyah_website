<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link href="http://www.novustec.co.in/static/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css'>
      <script src="http://www.novustec.co.in/static/js/jquery.min.js"></script>
      <script type="text/javascript" src="http://www.novustec.co.in/static/js/bootstrap-3.1.1.min.js"></script>
      <script src="https://kit.fontawesome.com/09cc2f1fac.js" crossorigin="anonymous"></script>
      <style>
         @media only screen and (min-width: 768px) {/*desktop*/
         .img-thumbnail{
         height: 450px;
         }
         }
         /* Start Gallery CSS */
         .thumb {
         margin-bottom: 15px;
         }
         .thumb:last-child {
         margin-bottom: 0;
         }
         /* CSS Image Hover Effects: https://www.nxworld.net/tips/css-image-hover-effects.html */
         .thumb 
         figure img {
         -webkit-filter: grayscale(100%);
         filter: unset;
         -webkit-transition: .3s ease-in-out;
         transition: .3s ease-in-out;
         }
      </style>
   </head>
   <body style="padding-top:2%;padding-bottom:7%">
      <section class="container">
         <br>
         <div class="row gallery">
            <div class="col-md-4 col-xs-6 thumb">
               <a href="images/w1.png">
                  <figure><img class="img-fluid img-thumbnail" src="images/w1.png" ></figure>
               </a>
            </div>
            <div class="col-md-4 col-xs-6 thumb">
               <a href="images/w2.png">
                  <figure><img class="img-fluid img-thumbnail" src="images/w2.png" ></figure>
               </a>
            </div>
            <div class="col-md-4 col-xs-6 thumb">
               <a href="images/w3.png">
                  <figure><img class="img-fluid img-thumbnail" src="images/w3.png" ></figure>
               </a>
            </div>
            <div class="col-md-4 col-xs-6 thumb">
               <a href="images/w4.png">
                  <figure><img class="img-fluid img-thumbnail" src="images/w4.png" ></figure>
               </a>
            </div>
            <div class="col-md-4 col-xs-6 thumb">
               <a href="images/w5.png">
                  <figure><img class="img-fluid img-thumbnail" src="images/w5.png" ></figure>
               </a>
            </div>
            <div class="col-md-4 col-xs-6 thumb">
               <a href="images/w6.png">
                  <figure><img class="img-fluid img-thumbnail" src="images/w6.png" ></figure>
               </a>
            </div>
         </div>
         <br>
         </div>
      </section>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
      <script>
         $(document).ready(function() {
             $(".gallery").magnificPopup({
                 delegate: "a",
                 type: "image",
                 tLoading: "Loading image #%curr%...",
                 mainClass: "mfp-img-mobile",
                 gallery: {
                     enabled: true,
                     navigateByImgClick: true,
                     preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                 },
                 image: {
                     tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                 }
             });
         });
      </script>
   </body>
</html>