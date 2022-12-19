<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="about.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Our goal is to approach beauty honestly and rationally. In order to deliver long-lasting, clinically proven results, we use safe and effective skin care components that enhance the natural biology of skin.</p>
         <p>While the majority of skincare products are designed to hide symptoms, our company provides skincare solutions that have been professionally proven to address the underlying causes of your skin care problems.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.jpg" alt="">
         <p>Sa sobrang ganda ng Queen White, macoconvince kana den mag benta, supper effective lahat ng Queen White products.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Olivia</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.jpg" alt="">
         <p>Sa sobrang ganda ng Queen White, macoconvince kana den mag benta, supper effective lahat ng Queen White products.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emma</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.jpg" alt="">
         <p>Sa sobrang ganda ng Queen White, macoconvince kana den mag benta, supper effective lahat ng Queen White products.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Isabella</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.jpg" alt="">
         <p>Sa sobrang ganda ng Queen White, macoconvince kana den mag benta, supper effective lahat ng Queen White products.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Emberlynn</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.jpg" alt="">
         <p>Sa sobrang ganda ng Queen White, macoconvince kana den mag benta, supper effective lahat ng Queen White products.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sophia</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.jpg" alt="">
         <p>Sa sobrang ganda ng Queen White, macoconvince kana den mag benta, supper effective lahat ng Queen White products.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mia</h3>
      </div>

   </div>

</section>


<?php include 'footer.php'; ?>


<script src="script.js"></script>

</body>
</html>