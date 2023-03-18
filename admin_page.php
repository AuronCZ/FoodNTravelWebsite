<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

$sql = "Select * From contact_form";
$all_contact = $conn->query($sql);

?>

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
   

<section class="services" id="services">

<h1 class="heading"> Costumer <span>Messages</span></h1>

<?php 
      while($row = mysqli_fetch_assoc($all_contact)){
?>

<div class="box-container">


  <div class="box" data-aos="zoo-in">
    <span><?php echo $row["id"];?></span>
    <i class="fas fa-globe"></i>
    <h3><?php echo $row["name"];?></h3>
    <p><?php echo $row["email"];?></p>
    <p><?php echo $row["number"];?></p>
    <p><?php echo $row["subject"];?></p>
    <p><?php echo $row["message"];?></p>
  </div>

</div>
<?php
      }
    ?>

</section>

</body>
</html>