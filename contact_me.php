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
  <title>Contact</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@700&display=swap" rel="stylesheet">
</head>

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
              <li class="nav__item">
                <a href="contact_me.php" class="nav__link nav__link--button">Contact</a>
            </li>
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
                        <a class="icon instagram"  href="">
                        <img class="icon--large" src="https://assets.codepen.io/5760928/instagram-square.png" alt="Instagram Icon" />
                        </a>
                    </li>
                    <li class="media__item">
                        <a class="icon facebook"  href="https://www.facebook.com/profile.php?id=100087364207263">
                            <img class="icon--large" src="https://assets.codepen.io/5760928/facebook+%282%29.png" alt="Facebook icon" />
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section id="contact__form">
            <div class="container">
              <form  class="contact__form" action="/projects/seohyang_site_m2/contact.php" method="post">
                <h3 class="section-title section-title--dark ct__form">Get in touch</h3>

                <input class="ct__form ct__name__form" type="text" placeholder="Name.." name="name" value="" required>

                <input class="ct__form ct__email__form" type="email" placeholder="Email..." name="email" value="" required>

                <textarea class="ct__form ct__message__form" name="message" cols="30" rows="10" placeholder="Your message.." value="" required> </textarea>

	            <input class="ct__form ct__submit" type="submit" name="contact_submit" value="Send Message">
              </form>
            </div>
        </section>
  </main>
</body>

<script src="main.js"></script>
<script>
    <?php
      if(isset($msg))
      echo "alert('$msg');";
    ?>
  </script>


<footer> 
    <p class="legal__text">
      <small>&copy; Copyright 2022, Markham web design & development</small> 
    </p>
</footer> 

</html>