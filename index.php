<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="keywords" content="Minimalist, Aesthetic, Solid Color Tee, Solid Tee Tones, Shirts, Pants, Tee, Clothes, MNML, Men's Shirt, Women's Shirt,
   Men's Pants, Women's">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon logo" type="image" href="images/img/logoicon1.png">
   <title>mnml.tee</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="hero2">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <!-- <img src="images/home-img-1.png" alt=""> -->
         </div>
         <div class="content">
            <!-- <span>up to 30% off</span> -->
            <h1><span class="auto-input"></span></h1>
            <a href="shop.php" class="btn">shop now!</a>
         </div>
      </div>
      
      <!-- <div class="swiper-slide slide">
         <div class="image">
            <img src="images/img/hero2-removebg.png" alt="">
         </div>
         <div class="content">
            <span>upto 40% off</span>
            <h3>latest release</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div> -->

      <!-- <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-3.png" alt="">
         </div>
         <div class="content">
            <span>upto 50% off</span>
            <h3>latest products</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div> -->

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>


<section class="home-products">

   <h1 class="heading">latest hues</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>₱</span><?= $fetch_product['price']; ?><span>.00</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<!-- <section class="category">

   <h1 class="heading">category</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper"> -->

   <!-- <a href="category.php?category=laptop" class="swiper-slide slide">
      <img src="images/icon-1.png" alt="">
      <h3>laptop</h3>
   </a> -->

   <!-- <a href="category.php?category=tv" class="swiper-slide slide">
      <img src="images/icon-2.png" alt="">
      <h3>tv</h3>
   </a> -->

   <!-- <a href="category.php?category=camera" class="swiper-slide slide">
      <img src="images/icon-3.png" alt="">
      <h3>camera</h3>
   </a>

   <a href="category.php?category=mouse" class="swiper-slide slide">
      <img src="images/icon-4.png" alt="">
      <h3>mouse</h3>
   </a> -->

   <!-- <a href="category.php?category=fridge" class="swiper-slide slide">
      <img src="images/icon-5.png" alt="">
      <h3>fridge</h3>
   </a> -->

   <!-- <a href="category.php?category=washing" class="swiper-slide slide">
      <img src="images/icon-6.png" alt="">
      <h3>washing machine</h3>
   </a> -->

   <!-- <a href="category.php?category=smartphone" class="swiper-slide slide">
      <img src="images/icon-7.png" alt="">
      <h3>smartphone</h3>
   </a> -->

   <!-- <a href="category.php?category=watch" class="swiper-slide slide">
      <img src="images/icon-8.png" alt="">
      <h3>watch</h3>
   </a> -->

   <!-- </div> -->

   <!-- <div class="swiper-pagination"></div>

   </div> -->
<!-- 
</section> -->
<!-- <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>women's fashion</h4>
            <h2>cozy and minimalist</h2>
            <span>solid tone tees are available</span>
        <a href="women.html">
            <button class="white">Explore Now</button>
        </a>
        </div>
        <div class="banner-box banner-box2">
            <h4>men's fashion</h4>
            <h2>cozy and minimalist</h2>
            <span>solid tone tees are available</span>
            <a href="men.html">
            <button class="white">Explore Now</button>
        </a>
        </div>
</section> -->








<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
   var typed = new Typed(".auto-input", {
      strings: ["mnml.tee", "keep it simple."],
      typeSpeed: 100,
      backSpeed: 100,
      loop: true
   })
</script>




<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>