<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel.</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- custom css file cdn link -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <!-- header section starts  -->
  <header class="header">

    <a href="#" class="logo"><i class="fas fa-paper-plane"></i> treavel. </a>

    <form action="" class="search-form">
      <input type="search" name="" id="searchBox" placeholder="search here...">
      <label for="searchBox" class="fas fa-search"></label>
    </form>

    <div class="icons">
      <div class="fas fa-search" id="search-btn"></div>
      <div class="fas fa-moon" id="theme-btn"></div>
      <div class="fas fa-user" id="login-btn"></div>
      <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#packages">packages</a>
      <a href="#services">services</a>
      <a href="#review">review</a>
      <a href="login_form.php">contact</a>
      <a href="login_form.php">booking</a>
    </nav>

    <form action="" class="login-form">

      <a href="login_form.php" class="btn">Log In</a>
      <a href="register_form.php" class="btn">Register</a>

    </form>

  </header>
  <!-- header section ends  -->

  <!-- home section starts  -->
  <section class="home" id="home">

    <div class="image" data-aos="fade-down">
      <img src="images/home-img.svg" alt="">
    </div>

    <div class="content" data-aos="fade-up">
      <h3>adventure is wortwhile</h3>     
      <a href="login_form.php" class="btn">explore now</a>
    </div>

  </section>
  <!-- home section ends  -->


  <!-- packages section starts  -->
  <section class="packages" id="packages">

    <h1 class="heading"> our <span>packages</span></h1>

    <div class="box-container">

      <div class="box" data-aos="fade-up">
        <div class="image">
          <img src="images/p-1.jpg" alt="">
          <h3><i class="fas fa-map-marker-alt"></i> mumbai </h3>
        </div>
        <div class="content">
          <div class="price">290.0<span>350.99</span></div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
          <a href="login_form.php" class="btn"> book now </a>
        </div>
      </div>

      <div class="box" data-aos="fade-up">
        <div class="image">
          <img src="images/p-2.jpg" alt="">
          <h3><i class="fas fa-map-marker-alt"></i> hawaii </h3>
        </div>
        <div class="content">
          <div class="price">290.0<span>350.99</span></div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
          <a href="login_form.php" class="btn"> book now </a>
        </div>
      </div>

      <div class="box" data-aos="fade-up">
        <div class="image">
          <img src="images/p-3.jpg" alt="">
          <h3><i class="fas fa-map-marker-alt"></i> sydney </h3>
        </div>
        <div class="content">
          <div class="price">290.0<span>350.99</span></div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
          <a href="login_form.php" class="btn"> book now </a>
        </div>
      </div>

      <div class="box" data-aos="fade-up">
        <div class="image">
          <img src="images/p-4.jpg" alt="">
          <h3><i class="fas fa-map-marker-alt"></i> paris </h3>
        </div>
        <div class="content">
          <div class="price">290.0<span>350.99</span></div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
          <a href="login_form.php" class="btn"> book now </a>
        </div>
      </div>

      <div class="box" data-aos="fade-up">
        <div class="image">
          <img src="images/p-5.jpg" alt="">
          <h3><i class="fas fa-map-marker-alt"></i> tokyo </h3>
        </div>
        <div class="content">
          <div class="price">290.0<span>350.99</span></div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
          <a href="login_form.php" class="btn"> book now </a>
        </div>
      </div>

      <div class="box" data-aos="fade-up">
        <div class="image">
          <img src="images/p-6.jpg" alt="">
          <h3><i class="fas fa-map-marker-alt"></i> egypt </h3>
        </div>
        <div class="content">
          <div class="price">290.0<span>350.99</span></div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
          <a href="login_form.php" class="btn"> book now </a>
        </div>
      </div>

    </div>

  </section>
  <!-- packages section ends  -->

  <!-- services section starts  -->
  <section class="services" id="services">

    <h1 class="heading"> our <span>services</span></h1>

    <div class="box-container">

      <div class="box" data-aos="zoo-in">
        <span>01</span>
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
      </div>

      <div class="box" data-aos="zoo-in">
        <span>02</span>
        <i class="fas fa-plane"></i>
        <h3>affordable hotels</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
      </div>

      <div class="box" data-aos="zoo-in">
        <span>03</span>
        <i class="fas fa-utensils"></i>
        <h3>affordable hotels</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
      </div>

      <div class="box" data-aos="zoo-in">
        <span>04</span>
        <i class="fas fa-globe"></i>
        <h3>affordable hotels</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
      </div>

      <div class="box" data-aos="zoo-in">
        <span>05</span>
        <i class="fas fa-hiking"></i>
        <h3>affordable hotels</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
      </div>

      <div class="box" data-aos="zoo-in">
        <span>01</span>
        <i class="fas fa-bullhorn"></i>
        <h3>affordable hotels</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, rem.</p>
      </div>

    </div>

  </section>
  <!-- services section ends  -->


  <!-- review section starts  -->
  <section class="review" id="review">

    <h1 class="heading"> client's <span>review</span></h1>

    <div class="swiper-container review-slider" data-aos="zoom-in">

      <div class="swiper-wrapper">
  
        <div class="swiper-slide slide">
          <img src="images/pic-1.png" alt="">
          <h3>john deo</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
  
        <div class="swiper-slide slide">
          <img src="images/pic-2.png" alt="">
          <h3>john deo</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
  
        <div class="swiper-slide slide">
          <img src="images/pic-3.png" alt="">
          <h3>john deo</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
  
        <div class="swiper-slide slide">
          <img src="images/pic-4.png" alt="">
          <h3>john deo</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sunt eligendi est, dicta maiores amet nihil perferendis, incidunt maxime aspernatur exercitationem laboriosam odio dolores magnam ratione atque, quasi odit. Hic!</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
  
      </div>

      <div class="swiper-pagination"></div>

    </div>

  </section>
  <!-- review section ends  -->



  <!-- footer section starts  -->
  <section class="footer">

    <div class="box-container">

      <div class="box" data-aos="fade-up">
        <h3>our branches</h3>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
        <a href="#"> <i class="fas fa-map-marker-alt"></i> canada </a>
      </div>

      <div class="box" data-aos="fade-up">
        <h3>quick links</h3>
        <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> packages </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
        <a href="#"> <i class="fas fa-chevron-right"></i> contact </a>
      </div>


      <div class="box" data-aos="fade-up">
          <h3>follow us</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
          <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
      </div>
    </div>

  </section>
  <!-- footer section ends  -->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <!-- custom js file link -->
  <script src="js/script.js"></script>

  <script>
    AOS.init({
        duration:800,
        delay:100
    });
  </script>
</body>
</html>