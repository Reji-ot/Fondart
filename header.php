<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondart Bakehouse</title>

     <!-- Bootstrap CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

 <!-- Owl carousel CDN-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
     integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
     integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

 <!-- Fontawesome CDN -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
     integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

 <!-- Custom CSS file -->
 <link rel="stylesheet" href="style.css" type="text/css" />

<?php

//require functions.php file
require ('functions.php');

?>

</head>
<body>
    
     <!-- Start Header-->
        <header id="header" class ="mb-5 mb-md-0">
        <!-- <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-20 text-black-50 m-0"></p>
            <div class="font-rale font-size-14">
                <a href="./login.html" class="px-3 border-right border-left text-dark">Login</a>
                <a href="#" class="px-3 border-right text-dark">Wishlist</a>
            </div>
        </div> -->
    

    <!-- Primary Navigation -->
        <nav class="navbar navbar-light fixed-top navbar-expand-md">
        <div class="container-fluid">
          <a href="./index.php" class="navbar-brand navbar-left d-flex"><img src="./assets/logo/FAB_logo.png" alt="brand-logo" class='logo ms-2'/>
          <h1 class="ms-2 font-Carentro d-none d-md-block">FondArt Bakehouse</h1></a>
        
          <!-- Toggler/collapsibe Button -->
            <Button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </Button>
          
          <div class="collapse navbar-collapse navbar-toggleable-md m-auto" id="collapsibleNavbar">
          <ul class="navbar-nav nav-pills nav-fill me-2 ms-auto font-Trajan">
            <li class="nav-item">
              <a  href="./index.php" class="nav-link font-size-18 color-gold">HOME</a>
            </li>
            <li class="nav-item">
              <a href="./story.php" class="nav-link font-size-18 color-gold">STORY</a>
            </li>
            <li class="nav-item">
              <a href="./shelf.php" class="nav-link font-size-18 color-gold">SHELF</a>
            </li>
            <li class="nav-item">
              <a href="./contact.php" class="nav-link font-size-18 color-gold" >CONTACT</a>
            </li>
            <li>
                <form action="#" class="font-size-14 font-rale">
                    <a href="./shelf.php" class="py-2 rounded-pill color-pink-bg">
                        <span class="font-size-18 px-1 text-dark"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-2 py-2 rounded-pill text-white bg-dark font-Trajan">Shop Now</span>
                    </a>
                </form>
            </li>
        </ul>
                
          </div>
        </div>
        
        </nav>
    <!-- !Primary Navigation -->    
        </header>
    <!-- !Start Header-->
    
    <!-- Start Mainsite -->
    <main>