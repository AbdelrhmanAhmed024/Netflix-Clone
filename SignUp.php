 <?php
$emailAddress = $_GET["user-email"];

@include 'config.php';
session_start();

if (isset($_POST['submit'])) {


  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $code = 0;



  $select = " SELECT * FROM user WHERE email = '$email' ";

  $result = mysqli_query($conn, $select);

  if (mysqli_num_rows($result) > 0) {

    $error[] = 'email already exist!';

  } else {

    if ($password != $cpass) {
      $error[] = 'password not matched!';
    } else {
      $insert = "INSERT INTO user(name, email, password,code) VALUES('$name','$email','$password','$code')";
      mysqli_query($conn, $insert);
      header('location:signin.php');
    }
  }

}
;


?> 
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
  <link rel="stylesheet" href="src/SignUp.css?v=<?php echo time(); ?>">
  <link rel="icon" href="assets/netflixIcon.png">
  <title>Netflix</title>
</head>

<body>
  <header class="site-header">
    <a href="home.html">
      <svg viewBox="0 0 111 30" class="svg-netflix-logo" focusable="true">

        <g id="netflix-logo">

          <path
            d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z"
            id="Fill-14"></path>

        </g>
      </svg>
    </a>

  </header>

  <main class="main-container">
    <section class="signup-card">

      <div class="card">
        <h2 class="card__title" style="color: black;" id="JNIE">Joining Netflix is easy.</h2>
        <p style="color: black;" id="ENYP">Enter your password and you'll be watching in no time.</p>
        <form action="" method="post">
          <?php
          if (isset($error)) {
            foreach ($error as $error) {
              echo '<span class="error-msg">' . $error . '</span>';
            }
            ;
          }
          ;
          ?>
          <div class="login-container">
            <label for="name" class="login-container__label" id="UN">Username</label>
            <input type="text" class="login-container__input" name="name" />
          </div>
          <div class="login-container">

            <label for="email" style="Font-size:11px;padding-left:21px" id="EM">Email Address</label>
            <input type="email" class="login-container__input" name="email"
              style="padding-bottom: 40px;padding-left: 21px;" value="<?php echo $emailAddress; ?>" required
               />
          </div><br>

          <div class="login-container">
            <label for="password" class="login-container__label" id="PW">Password</label>
            <input type="password" class="login-container__input" name="password" required />
          </div><br>

          <div class="login-container">
            <label for="cpassword" class="login-container__label" id="CPW">Confirm Password</label>
            <input type="password" class="login-container__input" name="cpassword" required />
          </div>

          <button type="submit" class="submit-button" id="ST" name="submit">Submit</button>
        </form>

        <button id="learn-more-btn" class="recaptcha-notification__link"
          style="background-color: transparent; cursor: pointer;" mouseover="this.style.textDecoration='underline'"
          onmouseout="this.style.textDecoration='none'" onclick="this.style.display='none'"></button>
        <div id="additional-text" style="display: none;">

        </div>
        </p>
      </div>

      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="site-footer-wrapper">
      <header class="site-footer__header">
        <p><a href="https://help.netflix.com/en/contactus" id="CUS">Questions? Contact us now.</a></p>
      </header>

      <nav class="footer-nav-container">
        <ul class="footer-nav">
          <a href="https://help.netflix.com/en/node/412">
            <li class="footer-nav__item" id="FAQ">FAQ</li>
          </a>
          <a href="https://help.netflix.com/">
            <li class="footer-nav__item" id="HC">Help Center</li>
          </a>
          <a href="https://help.netflix.com/legal/termsofuse">
            <li class="footer-nav__item" id="TOU">Terms of Use</li>
          </a>
          <a href="https://help.netflix.com/legal/privacy">
            <li class="footer-nav__item" id="PY">Privacy</li>
          </a>
          <a href="https://help.netflix.com/legal/privacy">
            <li class="footer-nav__item" id="CP">Cookie Preferences</li>
          </a>
          <a href="https://www.netflix.com/br-en/#">
            <li class="footer-nav__item" id="CI">Coporate Information</li>
          </a>
        </ul>
      </nav>

      <div class="lang">
        <span class="material-icons-outlined lang__icon">
          language
        </span>
        <select name="lang-selector" class="lang__switcher" id="language-selector">
          <option value="en" disable>English</option>
          <option value="ar">العربية</option>
        </select>
      </div>
    </div>
  </footer>
  <script src="src/SignUp.js"></script>
  <script src="src/labelAnimation.js"></script>
</body>

</html>