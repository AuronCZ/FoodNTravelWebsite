<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complete Responsive Travel Agency Website Design</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- custom css file cdn link -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us </h1>

    <form action="contact_form.php" method="post" data-aos="zoom">

      <div class="inputBox">
        <input type="text" name="name" id="" placeholder="name" data-aos="fade-up">
        <input type="email" name="email" id="" placeholder="email" data-aos="fade-up">
      </div>

      <div class="inputBox">
        <input type="number" name="number" id="" placeholder="number" data-aos="fade-up">
        <input type="text" name="subject" id="" placeholder="subject" data-aos="fade-up">
      </div>

      <textarea name="message" placeholder="your message" id="" cols="30" rows="10" data-aos="fade-up"></textarea>

      <input type="submit" value="send message" class="btn" name="send">
      <a href="user_page.php" class="btn">Go Back</a>

    </form>

  </section>

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