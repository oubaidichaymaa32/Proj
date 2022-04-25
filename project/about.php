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
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/hi1.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About </h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/hi1.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>THE BOOK</p>
         <p>The mission of our library is to provide exceptional resources, programs and services that promote the joy of lifelong learning and discovery, and to offer a welcoming place for people to gather and share experiences.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Great idea to support local bookshops instead of greedy corporations. Slightly more expensive but not huge difference. Still haven't received a book I've paid for a week ago though. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Leo EliDrissi</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>A very good and trustworthy seller. My book arrived promptly and in perfect condition.
            <br> Very good service
            <br>I really love it
         </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jasmine Leo</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Enjoying my purchase from you. Shame that the standard of picture printing is poor. It is not uncommon for paper backs!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Leo Myme</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Enjoying my purchase from you. Shame that the standard of picture printing is poor. It is not uncommon for paper backs!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Leila Ayat</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Easy way to buy books at excellent prices. Speedy delivery - and the bonus that part of the profits is given back to local bookshops!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ilyass Raji</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>i wanted it
you had it and delivered
and you're not amazon. full stop. five stars. Speedy delivery - and the bonus that part of the profits is given
</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John Hatab</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/images.jfif" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>LEILA SLIMANI</h3>
      </div>

      <div class="box">
         <img src="images/téléchargement.jfif" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>MOLIERE</h3>
      </div>

      <div class="box">
         <img src="images/welcome1.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Victor HUGO</h3>
      </div>

      <div class="box">
         <img src="images/img1.jfif" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Mohamed Choukri</h3>
      </div>

      <div class="box">
         <img src="images/img2.jfif" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Fatima El mernissi</h3>
      </div>

      <div class="box">
         <img src="images/img3.jfif" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Voltaire</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>