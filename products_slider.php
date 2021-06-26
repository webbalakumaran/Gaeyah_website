<!DOCTYPE html>
<html lang=en>
   <head>
      <meta charset=UTF-8>
      <meta name=viewport content="width=device-width, initial-scale=1.0">
      <link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css>
      <script src=https://code.jquery.com/jquery-3.5.1.min.js integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin=anonymous></script>
      <script src=https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js></script>
      <style>body{background-color:transparent}.carousel{height:250px}.carousel .carousel-item{padding:1%}</style>
   </head>
   <body>
      <div class=carousel>
         <a class=carousel-item href=#six!><img src=images/hc1.png></a>
         <a class=carousel-item href=#ten!><img src=images/electric_motor.png></a>
         <a class=carousel-item href=#one!><img src=images/wc1.png></a>
         <a class=carousel-item href=#seven!><img src=images/hc2.png></a>
         <a class=carousel-item href=#two!><img src=images/wc2.png></a>
         <a class=carousel-item href=#ten!><img src=images/em1.png></a>
         <a class=carousel-item href=#eight!><img src=images/hc3.png></a>
         <a class=carousel-item href=#three!><img src=images/wc3.png></a>
         <a class=carousel-item href=#ten!><img src=images/em2.png></a>
         <a class=carousel-item href=#nine!><img src=images/hc4.png></a>
         <a class=carousel-item href=#four!><img src=images/wc4.png></a>
         <a class=carousel-item href=#ten!><img src=images/em3.png></a>
         <a class=carousel-item href=#ten!><img src=images/hc5.png></a>
         <a class=carousel-item href=#five!><img src=images/wc5.png></a>
         <a class=carousel-item href=#ten!><img src=images/em4.png></a>
         <a class=carousel-item href=#eleven!><img src=images/hc6.png></a>
         <a class=carousel-item href=#ten!><img src=images/wc6.png></a>
      </div>
      <script>$(document).ready(function(){$(".carousel").carousel();setInterval(function(){$(".carousel").carousel("next")},3000)});</script>
   </body>
</html>