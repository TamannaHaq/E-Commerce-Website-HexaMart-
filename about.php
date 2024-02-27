<?php

@include 'config.php';

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

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/Hexamartt.png" alt="">
        </div>

        <div class="content">
            <h3>Why you use HexaMart?</h3>
            <p> We make sure that the product we are selling on this app is high quality,branded and there is no default in it.
                 Because the admin panel will observe the product throughout the process.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We ensure that the products that we sell or buy are safe for us to use. And also we ensure a secured transaction system.
                 Both the buyer and seller must have a verified account which is verified by the admin panel through some online and offline processes.
              After placing an order the buyer can locate the products location until delivery.
             So the buyer can easily understand when he will get his products in hand. And do not have to call or message anyone to know about his products 
              whereabouts. We will try to make sure that the delivery is within the deadline.
</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/awe.png" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/sr.png" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Check out the client's reviews.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/shuvo.jpg" alt="">
            <p>The Best E-commarce Website I have ever seen! Thank you for an excellent service. They were everything we could have hoped for.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 1</h3>
        </div>

        <div class="box">
            <img src="images/tamu.jpg" alt="">
            <p>Always available to answer any questions.Always available.I love this Website.Very knowledgeable about the services they provide.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 2</h3>
        </div>

        <div class="box">
            <img src="images/efti.jpg" alt="">
            <p>They were all so helpful and the flowers were beautiful!! The Products ordered were the flowers delivered; so beautiful, stunning.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 3</h3>

            </div>
            <div class="box">
            <img src="images/nuru.jpg" alt="">
            <p>They were all so helpful and the flowers were beautiful!! The Products ordered were the flowers delivered; so beautiful, stunning.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 4</h3>

            </div>
            <div class="box">
            <img src="images/soikot.jpg" alt="">
            <p>They were all so helpful and the flowers were beautiful!! The Products ordered were the flowers delivered; so beautiful, stunning.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 5</h3>
            
        </div>

            
        </div>

        
       
            
        </div>

       

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>