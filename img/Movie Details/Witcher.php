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
         <img src="../../img/Movie Details/Images/TheWitcher.png" class="background-image">
         <video src="../../img/Trailers/The Witcher.mp4" controls id="Mov" poster="../../img/Movie Details/images/TheWitcherV.jpg" autoplay></video>
     </div>
     <div class="container1">
         <div class="poster1">
             <!-- Insert your poster content here -->
             <img src="../../img/Movie Details/Images/WitcherP.jfif" id="img1" alt="Poster">
         </div>
         <div class="text1">
             <!-- Insert your text content here -->
             <div class="text-content">
                 <h1 style="color: white;">The Witcher</h1>
                 <p><i class="fa fa-star"></i>8.1&nbsp;na min</p>
                 <p>Geralt of Rivia, a solitary monster hunter, struggles to find his place in a world where people often prove more wicked than beasts.</p>
             </div>
             <p><span class="MA">Country:</span>&nbsp;&nbsp;&nbsp;United States, Hungary, Poland</p>
             <p><span class="MA">Genre:</span>&nbsp;&nbsp;&nbsp;Drama, Adventure, Action</p>
             <p><span class="MA">Release:</span>&nbsp;&nbsp;&nbsp;17-12-2021</p>
             <p><span class="MA">Production:</span>&nbsp;&nbsp;&nbsp;Netflix, Cinesite, Hivemind</p>
            
             <p><span class="MA">Cast:</span>&nbsp;&nbsp;&nbsp;
             <div class="cast">
                 <div class="owl-carousel cast">
                     <div class="actor">
                         <img src="../../img/Movie Details/images/HenryCavill.jfif" alt="Actor 1" style="  width: 150px;border-radius:5px;">
                         <p>Henry Cavill</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/AnyaChalotra.jfif" alt="Actor 2" style="  width: 150px;border-radius:5px;">
                         <p>Anya Chalotra</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/FreyaAllan.jfif" alt="Actor 3" style="  width: 150px;border-radius:5px;">
                         <p>Freya Allan</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/JoeyBatey.jfif" alt="Actor 4" style="  width: 150px;border-radius:5px;">
                         <p>Joey Batey</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/MyAnnaBuring.jfif" alt="Actor 5" style="  width: 150px;border-radius:5px;">
                         <p>MyAnna Buring</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/MimiNdiweni.jfif" alt="Actor 6" style="  width: 150px;border-radius:5px;">
                         <p>Mimi Ndiweni</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/EamonFarren.jfif" alt="Actor 7" style="  width: 150px;border-radius:5px;">
                         <p>Eamon Farren</p>
                     </div>
                     <div class="actor">
                         <img src="../../img/Movie Details/images/AnnaShaffer.jfif" alt="Actor 8" style="  width: 150px;border-radius:5px;">
                         <p>Anna Shaffer</p>
                     </div>
                     
                 </div>
                 </p>
             
         </div>


 </body>

 </html>