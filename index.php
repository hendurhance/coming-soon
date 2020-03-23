<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title>OctaJobs Coming Soon</title>
</head>
<body>
   <section>
   <div id="particles-js">
     <div class="row">
     
     <div class="col-left">
     <div class="content-box">
     <div class="welcome-text"><p>Our Job Portal is Coming Soon!</p></div>
     <div class="counter" id="countdown">
       
     </div>
     <div class="contact">
       Follow Us On Social Media
       <div class="socio">
        <a href="">FACEBOOK</a> - 
        <a href="">INSTAGRAM</a> - 
        <a href="">TWITTER</a> 
       </div>
     </div>
     </div>
     </div>

     <div class="col-right">
     <div class="content-box">
     <div class="logo">
       <img src="assets/img/OctaJobs.svg" alt="OctaJobs Logo">
     </div>
     <div class="main-text">
        POST - FIND - APPLY
        <p>Our website is under constructions currently, Get a notification on your e-mail for updates.</p>
     </div>
     <div class="subscribe">
       <form action="php/process.php" method="post">
       <input type="email" name="email" class="form-sub" placeholder="Get Notify by Email" required="">
       <div class="prepend">
         <button name="subscribe" class="submit-btn" type="submit">Subscribe</button>
       </div>
           <?php
            if(isset($_SESSION['msg'])){
              echo($_SESSION['msg']);
              unset($_SESSION['msg']);
            }
          ?>
       </form>
     </div>
     </div>
     </div>
     
     </div>
     </div>
   </section>





<script src="assets/js/app.js"></script>
</body>
</html>