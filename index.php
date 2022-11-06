<?php
  if(isset($_GET['msg'])) {
    $msg = "Success";
  } elseif (isset($_GET['error'])) {
    $msg = $_GET['error'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pianist Seohyang</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@700&display=swap" rel="stylesheet">
</head>
<div class="">
  <header>
    <div class="header__img">
      <div class="container--header">
        <button class="nav-toggle" aria-label="open navigation">
            <span class="hamburger"></span>
        </button>
        <nav class="nav ">
            <ul class="nav__list nav__list--primary ">
                <li  class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="about.html" class="nav__link">About</a></li>
                <li class="nav__item"><a href="perform.html" class="nav__link">Performances</a></li>
            </ul>
            <ul class="nav__list nav__list--secondary">
                <li class="nav__item"><a href="concerts.html" class="nav__link">Concerts</a></li>
                <li class="nav__item"><a href="contact_me.php" class="nav__link nav__link--button">Contact</a></li>
            </ul>
        </nav>
        <div class="hero container row">
            <p class="hero__text">Pianist</p>
            <h1 class="hero__title txt-clr-lightest">Seohyang Oh</h1>
        </div>
    </div>
  </header>
  <body>
    <main>
      <section id="media__links__large">
        <div class="container">
            <ul class="media__list">
                <li class="media__item">
                    <a class="icon instagram"  href="https://www.instagram.com/pianistseohyangoh/">
                      <img class="icon--large" src="https://assets.codepen.io/5760928/instagram-square.png" alt="Instagram Icon" />
                    </a>
                </li>
                <li class="media__item">
                    <a class="icon facebook"  href="https://www.facebook.com/profile.php?id=100087364207263">
                        <img class="icon--large" src="https://assets.codepen.io/5760928/facebook+%282%29.png" alt="Facebook icon" />
                    </a>
                </li>
                <li class="media__item">
                    <a class="icon tiktok"  href="https://www.tiktok.com/@seohyangohporter">
                        <img class="icon--large" src="https://assets.codepen.io/5760928/tik-tok.png" alt="tiktok icon" />
                    </a>
                </li>

            </ul>
        </div>
      </section>

      <section id="mailing__form">
        <div class="container">
          <form  class="subscribe__form" action="/projects/seohyang_site_m2/newsletter-signup.php" method="post">
            <div class="form">
              <h3 class="section-title section-title--dark">Join my mailing list</h3>
            </div>
            <div class="form">
              <input class="name__form" type="text" placeholder="Name.." name="name" required>
            </div>
            <div class="form">
              <input class="email__form" type="email" placeholder="Email.." name="email" required>
            </div>
            <div class="form"></div>
              <input  class="subscribe" type="submit" value="Subscribe">
            </div>
          </form>
        </div>
      </section>

      <section id="media__links__small">
        <div class="container">
            <ul class="media__list">
                <li class="media__item">
                    <a class="icon--small instagram-round"  href="">
                      <img class="icon-small" src="https://assets.codepen.io/5760928/instagram-round.png" alt="Instagram icon"/>
                    </a>
                </li>
                <li class="media__item">
                    <a class="icon--small facebook-round"  href="https://www.facebook.com/profile.php?id=100087364207263">
                      <img class="icon-small" src="https://assets.codepen.io/5760928/facebook-round.png" alt="Facebook icon"/>
                    </a>
                </li>
                
                <li class="media__item">
                    <a class="icon--small twitter"  href="https://twitter.com/PianistSeohyang">
                      <img class="icon-small" src="https://assets.codepen.io/5760928/twitter+%282%29.png" alt="Twitter icon"/>
                    </a>
                </li>
                <li class="media__item">
                  <a class="icon--small youtube"  href="https://www.youtube.com/user/dhtjgid" alt="Youtube link">
                    <img class="icon-small" src="https://assets.codepen.io/5760928/youtube.png" alt="Youtube icon"/>
                  </a>
                </li> 
            </ul>
        </div>
      </section>
    </main>
  </body>

  <footer> 
    <p class="legal__text">
      <small>&copy; Copyright 2022, Markham Web Design & Development</small> 
    </p>
  </footer> 
</div>

<script src="main.js"></script>
<script>
      <?php
        if(isset($msg))
        echo "alert('$msg');";
      ?>
    </script>
 

</body>

</html>