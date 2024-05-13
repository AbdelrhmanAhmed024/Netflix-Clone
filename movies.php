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
    <link rel="icon" href="assets/netflixIcon.png">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="src/Movies.css?v=<?php echo time(); ?>">
    
</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="" class="logo">
                    <img src="img/logo.png" alt="logo">
                </a>
                <ul class="nav-menu" id="nav-menu"><img src="assets/NetflixPP.png" alt="Profile Picture" width="30px" height="30px" style="border-radius:5px">
                    <li style="font-size:17px;font-weight:700;text-transform: uppercase;">&nbsp
                        <?php echo $_SESSION['user_name'] ?>
                    </li>
                    <li>
                        <a href="logout.php" class="btn-log">
                            <i class="fa fa-sign-out" style="font-size:19px" title="Log Out"></i>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- END NAV -->

    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="img/JW.jpeg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                John Wick
                            </div>
                            <div class="item-content-description top-down delay-4">
                            John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="img/Movie Details/JWC4.php" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Play</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="img/TheWitcher.png" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                The Witcher
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Geralt of Rivia, a solitary monster hunter, struggles to find his place in a world where
                                people often prove more wicked than beasts.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="img/Movie Details/Witcher.php" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Play</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="img/wanda-banner.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Wanda Vision
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Blends the style of classic sitcoms with the MCU, in which Wanda Maximoff and Vision -
                                two super-powered beings living their ideal suburban lives - begin to suspect that
                                everything is not as it seems.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="img/Movie Details/Wanda.php" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Play</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="img/transformer-banner.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Transformers
                            </div>
                            <div class="item-content-description top-down delay-4">
                                An ancient struggle between two Cybertronian races, the heroic Autobots and the evil
                                Decepticons, comes to Earth, with a clue to the ultimate power held by a teenager.
                            </div>
                            <div class="item-action top-down delay-6">
                                <a href="img/Movie Details/Transformers.php" class="btn btn-hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Play</span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
            </div>
        </div>
        <!-- END HERO SLIDE -->
        <!-- TOP MOVIES SLIDE -->
        <div class="section-header">
            Top movies
        </div>
        <div class="top-movies-slide">
            <div class="owl-carousel" id="top-movies-slide">
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <img src="img/movies/MissionImpossible.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Mission: Impossible - Fallout
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <img src="img/movies/joker.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Joker
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <img src="img/movies/300).jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            300
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <img src="img/movies/DarkKnight.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Dark Knight
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <img src="img/movies/Inception.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Inception
                        </div>
                    </div>

                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <img src="img/movies/The Equalizer_.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Equalizer
                        </div>
                    </div>

                </div>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
        <!-- END TOP MOVIES SLIDE -->
    </div>
    <!-- END HERO SECTION -->

    <!-- LATEST MOVIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest movies
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/movies/All Quiet on the Western Front.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            All Quiet on the Western Front
                            <div class="movie-item-info">
                                <p>Director: Edward Berger</p>
                                <p>Release Date: September 29, 2022</p>
                                <p>IMDb Rating: 7.8/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/movies/DayShift_.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            DayShift
                            <div class="movie-item-info">
                                <p>Director: J.J. Perry</p>
                                <p>Release Date: August 12, 2022</p>
                                <p>IMDb Rating: 6.1/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/movies/TheGrayMan.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Gray Man
                            <div class="movie-item-info">
                                <p>Director: Anthony Russo & Joe Russo</p>
                                <p>Release Date: July 22, 2022</p>
                                <p>IMDb Rating: 6.5/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/movies/oxygen.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Oxygen
                            <div class="movie-item-info">
                                <p>Director: Alexandre Aja</p>
                                <p>Release Date: May 12, 2021</p>
                                <p>IMDb Rating: 6.5/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/movies/AMFT.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            A Man From Toronto
                            <div class="movie-item-info">
                                <p>Director: Patrick Hughes</p>
                                <p>Release Date: June 24, 2022</p>
                                <p>IMDb Rating: 5.8/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/movies/sweet.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Sweet Girl
                            <div class="movie-item-info">
                                <p>Director: Brian Andrew Mendoza</p>
                                <p>Release Date: August 20, 2021</p>
                                <p>IMDb Rating: 5.5/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/movies/beast.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Beast
                            <div class="movie-item-info">
                                <p>Director: Baltasar Kormákur</p>
                                <p>Release Date: August 19, 2022</p>
                                <p>IMDb Rating: 5.6/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST MOVIES SECTION -->

    <!-- LATEST SERIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest series
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
          
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/series/moneyheist.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Money Heist
                            <div class="movie-item-info">
                                <p>Director: Álex" Pina Calafi</p>
                                <p>Release Date: 2017-2021</p>
                                <p>IMDb Rating: 8.2/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/series/lucifer.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Lucifer
                            <div class="movie-item-info">
                                <p>Director: Tom Kapinos</p>
                                <p>Release Date: 2016-2021</p>
                                <p>IMDb Rating: 8.1/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/series/witch.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Witch at Court
                            <div class="movie-item-info">
                                <p>Director: Kim Young-kyun</p>
                                <p>Release Date: 2017</p>
                                <p>IMDb Rating: 7.4/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/series/Wednesday.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Wednesday
                            <div class="movie-item-info">
                                <p>Director: Alfred Gough & Miles Millar</p>
                                <p>Release Date: 2022</p>
                                <p>IMDb Rating: 8.1/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/series/vikings.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Vikings
                            <div class="movie-item-info">
                                <p>Director: Michael Hirst</p>
                                <p>Release Date: 2013-2020</p>
                                <p>IMDb Rating: 8.5/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/series/witcher.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Witcher
                            <div class="movie-item-info">
                                <p>Director: Lauren Schmidt Hissrich</p>
                                <p>Release Date: 2019-?</p>
                                <p>IMDb Rating: 8.1/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                 <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/series/StrangerThings.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Stranger Things
                            <div class="movie-item-info">
                                <p>Director: Shawn Levy</p>
                                <p>Release Date: 2016-2022</p>
                                <p>IMDb Rating: 8.7/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST SERIES SECTION -->

    <!-- Children SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                Children
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/children/PussInBoots.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">                      
                            <div class="movie-item-info">
                                <p>Director: Joel Crawford & Januel Mercado</p>
                                <p>Release Date: 2022</p>
                                <p>IMDb Rating: 7.9/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/children/croods.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Croods
                            <div class="movie-item-info">
                                <p>Director: Kirk DeMicco & Chris Sanders</p>
                                <p>Release Date: 2013</p>
                                <p>IMDb Rating: 7.2/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/children/dragon.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Dragonball
                            <div class="movie-item-info">
                                <p>Director: Akira Toriyama</p>
                                <p>Release Date: 1989-?</p>
                                <p>IMDb Rating: 8.8/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM --> 
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/children/coco.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Coco
                            <div class="movie-item-info">
                                <p>Director: Lee Unkrich & Adrian Molina</p>
                                <p>Release Date: 2017</p>
                                <p>IMDb Rating: 8.4/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/children/Naruto.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Naurto
                            <div class="movie-item-info">
                                <p>Director: Masashi Kishimoto</p>
                                <p>Release Date: 2002-2007</p>
                                <p>IMDb Rating: 8.4/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/children/over.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Over the Moon
                            <div class="movie-item-info">
                                <p>Director: Glen Keane & John Kahrs</p>
                                <p>Release Date: 2020</p>
                                <p>IMDb Rating: 6.3/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="img/children/HTTYD_.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            How To Train Your Dragon 2
                            <div class="movie-item-info">
                                <p>Director: Dean DeBlois</p>
                                <p>Release Date: 2014</p>
                                <p>IMDb Rating: 7.8/10</p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END Children SECTION -->
    <!-- FOOTER SECTION -->
    <footer class="section">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="content">
                        <a href="home.html" class="logo">
                            <img src="img/logo.png" alt="logo">
                        </a>
                        <ul class="footer-menu">
                            <li>
                                <a href="https://help.netflix.com/en/contactus">Questions? Contact us.</a>
                            </li>
                    </div>
                </div>
                <div class="col-8 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <ul class="footer-menu">
                                    <li>
                                        <a href="https://help.netflix.com/en/node/412">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="https://help.netflix.com/">Help Center</a>
                                    </li>
                                    <li>
                                        <a href="https://www.netflix.com/youraccount">Account</a>
                                    </li>
                                    <li>
                                        <a href="https://media.netflix.com/">Media Center</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <ul class="footer-menu">
                                    <li>
                                        <a href="http://ir.netflix.com/">Investor Relations</a>
                                    </li>
                                    <li>
                                        <a href="https://jobs.netflix.com/jobs">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="https://www.netflix.com/watch">Ways to Watch</a>
                                    </li>
                                    <li>
                                        <a href="https://help.netflix.com/legal/termsofuse">Privacy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <ul class="footer-menu">

                                    <li>
                                        <a href="https://help.netflix.com/legal/termsofuse">Terms of Use</a>
                                    </li>
                                    <li>
                                        <a href="https://help.netflix.com/legal/privacy">Cookie Preferences</a>
                                    </li>
                                    <li>
                                        <a href="https://www.netflix.com/br-en/#">Corporate Information</a>
                                    </li>
                                    <li>
                                        <a href="https://help.netflix.com/legal/corpinfo">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <ul class="footer-menu">

                                    <li>
                                        <a href="https://help.netflix.com/contactus">Speed Test</a>
                                    </li>
                                    <li>
                                        <a href="https://help.netflix.com/legal/notices">Legal Notices</a>
                                    </li>
                                    <li>
                                        <a href="https://www.netflix.com/br-en/browse/genre/839338">Only on Netflix</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER SECTION -->
    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="src/Movies.js"></script>

</body>

</html>