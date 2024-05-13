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
         <img src="../../img/Movie Details/Images/transformers.jpg" class="background-image">
         <video src="../../img/Trailers/Transformers.mp4" controls id="Mov" poster="../../img/Movie Details/images/transformers-last-knight.jpg" autoplay></video>
     </div>
     <div class="container1">
         <div class="poster1">
             <!-- Insert your poster content here -->
             <img src="../../img/Movie Details/Images/transformersP.jpg" id="img1" alt="Poster">
         </div>
         <div class="text1">
             <!-- Insert your text content here -->
             <div class="text-content">
                 <h1 style="color: white;">Transformers The Last Knight</h1>
                 <p><i class="fa fa-star"></i>5.20&nbsp;154 min</p>
                 <p>A deadly threat from Earth&apos;s history reappears and a hunt for a lost artifact takes place between Autobots and Decepticons, while Optimus Prime encounters his creator in space.</p>
             </div>
             <p><span class="MA">Country:</span>&nbsp;&nbsp;&nbsp;United States, China, Mexico, Canadas</p>
             <p><span class="MA">Genre:</span>&nbsp;&nbsp;&nbsp;Thriller, Sci-Fi, Adventure, Action</p>
             <p><span class="MA">Release:</span>&nbsp;&nbsp;&nbsp;18-06-2017</p>
             <p><span class="MA">Production:</span>&nbsp;&nbsp;&nbsp;Paramount Pictures, Di Bonaventura Pictures, Hasbro</p>
            
             <p><span class="MA">Cast:</span>&nbsp;&nbsp;&nbsp;
             <div class="cast">
                 <div class="owl-carousel cast">
                     <div class="actor">
                         <img src="../../img/Movie Details/images/MarkWahlberg.jfif" alt="Actor 1" style="  width: 150px;border-radius:5px;">
                         <p>Mark Wahlberg</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/AnthonyHopkins.jfif" alt="Actor 2" style="  width: 150px;border-radius:5px;">
                         <p>Anthony Hopkins</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/Josh Duhamel.jfif" alt="Actor 3" style="  width: 150px;border-radius:5px;">
                         <p>Josh Duhamel</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/Jerrod.jfif" alt="Actor 4" style="  width: 150px;border-radius:5px;">
                         <p>Jerrod Carmichael</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/StanleyTucci.jfif" alt="Actor 5" style="  width: 150px;border-radius:5px;">
                         <p>Stanley Tucci</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/LauraHaddock.jfif" alt="Actor 6" style="  width: 150px;border-radius:5px;">
                         <p>Laura Haddock</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/SantiagoCabrera.jfif" alt="Actor 7" style="  width: 150px;border-radius:5px;">
                         <p>Santiago Cabrera</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/JohnGoodman.jfif" alt="Actor 8" style="  width: 150px;border-radius:5px;">
                         <p>John Hollingworth</p>
                     </div>
                     
                 </div>
                 </p>
             
         </div>


 </body>

 </html>