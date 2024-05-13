<?php

    @include 'config.php';

    session_start();

    if (!isset($_SESSION['user_name'])) {
        header('location:home.html');
    }

    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> Netflix </title>
     <link rel="icon" href="../../assets/netflixIcon.png">
     <!-- GOOGLE FONTS -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- OWL CAROUSEL -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

     <!-- BOX ICONS -->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <!-- CSS -->
     <link rel="stylesheet" href="../../src/Movies.css?v=<?php echo time(); ?>">


 </head>

 <body>

     <!-- NAV -->
     <div class="nav-wrapper">
         <div class="container">
             <div class="nav">
                 <a href="../../movies.php" class="logo">
                     <img src="../../assets/netflix-logo.png" alt="logo">
                 </a>
                 <ul class="nav-menu" id="nav-menu"><img src="../../assets/NetflixPP.png" alt="Profile Picture" width="30px" height="30px" style="border-radius:5px">
                     <li style="font-size:17px;font-weight:700;text-transform: uppercase;">&nbsp
                         <?php echo $_SESSION['user_name'] ?>
                     </li>
                     <li>
                         <a href="../../logout.php" class="btn-log">
                             <i class="fa fa-sign-out" style="font-size:19px" title="Log Out"></i>
                         </a>
                     </li>
                 </ul>

             </div>
         </div>
     </div>
     <!-- END NAV -->
     <div class="video-container">
         <img src="../../img/Movie Details/images/Jwc4.jpeg" class="background-image">
         <video src="../../img/trailers/john_wick.mp4" controls id="Mov" poster="../../img/Movie Details/images/JWM.jpg" autoplay></video>
     </div>
     <div class="container1">
         <div class="poster1">
             <!-- Insert your poster content here -->
             <img src="../../img/Movie Details/images/Poster.jpg" id="img1" alt="Poster">
         </div>
         <div class="text1">
             <!-- Insert your text content here -->
             <div class="text-content">
                 <h1 style="color: white;">John Wick Chapter 4</h1>
                 <p><i class="fa fa-star"></i>8.20&nbsp;169 min</p>
                 <p>John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.</p>
             </div>
             <p><span class="MA">Country:</span>&nbsp;&nbsp;&nbsp;United States</p>
             <p><span class="MA">Genre:</span>&nbsp;&nbsp;&nbsp;Thriller,Action,Crime</p>
             <p><span class="MA">Release:</span>&nbsp;&nbsp;&nbsp;24-03-2023</p>
             <p><span class="MA">Production:</span>&nbsp;&nbsp;&nbsp;Lionsgate, Summit Entertainment, 87Eleven Entertainment</p>
            
             <p><span class="MA">Cast:</span>&nbsp;&nbsp;&nbsp;
             <div class="cast">
                 <div class="owl-carousel cast">
                     <div class="actor">
                         <img src="../../img/Movie Details/images/1.png" alt="Actor 1">
                         <p>Keanu Reeves</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/2.png" alt="Actor 2">
                         <p>Scott Adkins</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/3.png" alt="Actor 3">
                         <p>Donnie Yen</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/4.png" alt="Actor 4">
                         <p>Lance Reddick</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/5.png" alt="Actor 5">
                         <p>Rina Sawayama</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/6.png" alt="Actor 6">
                         <p>Ian McShane</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/7.png" alt="Actor 7">
                         <p>Natalia Tena</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/8.png" alt="Actor 8">
                         <p>Hiroyuki Sanada</p>
                     </div>
                     
                 </div>
                 </p>
             
         </div>


 </body>

 </html>