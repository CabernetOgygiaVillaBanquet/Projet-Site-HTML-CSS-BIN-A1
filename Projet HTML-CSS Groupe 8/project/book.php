
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="shortcut icon" href="Oranval.ico" type="image/x-icon">
    <icon href="Oranval.ico" type="image/x-icon">
    <!-- swiper  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header section stars  -->
    <section class="header">
       <a href="home.php" class="logo">OranVal</a> 
       <nav class="navbar">
        <a href="home.php">accueil</a>
        <a href="about.php">a propos</a>
        <a href="package.php">lieux</a>
        <a href="book.php">réserver</a>
       </nav>

       <div id="menu-btn" class="fas fa-bars">
        
       </div>
    </section>

    <!-- header section ends  -->
<div class="heading" style="background:url(images/booking.jpg) no-repeat">
    <h1>Séjour</h1>
</div>

 <!-- booking section stars  -->
<section class="booking">
  
    <h1 class="heading-title">
        Réserver votre séjour !
    </h1>
    <form action="" method="post" class="book-form" >
     <div class="flex">
       <div class="inputBox">
        <label for="text">Nom</label>
        <input type="text" aria-placeholder="entrer votre nom" name="nom" value="">
       </div>
       <div class="inputBox">
        <label for="email">Email </label>
        <input id="" type="text" aria-placeholder="entrer votre email" name="email" value="">
       </div>
       <div class="inputBox">
        <label for="phone">Portable </label>
        <input id="" type="number" aria-placeholder="entrer votre portable" name="phone">
       </div>
       <div class="inputBox">
        <label for="">Adresse </label>
        <input type="text" aria-placeholder="entrer votre addresse" name="address">
       </div>
       <div class="inputBox">
        <label for="">Destination </label>
        <input type="text" aria-placeholder="entrer votre destination" name="location">
       </div>
       <div class="inputBox">
  <label for="">Combien  </label>
        <input type="number" aria-placeholder="combien de personnes" name="guests" min="1" max="10">
       </div>
       <div class="inputBox">
        <label for="">Arrivé :</label>
        <input type="date" name="arrivals">
       </div>
       <div class="inputBox">
   <label for="">Départ </label>
        <input type="date" name="leaving">
       </div>
   
     </div>
     <input type='submit' value='Je suis pret ! ' class='btn' name='send' >

    </form>
</section>


 <!-- booking section stars  -->

 <!-- footer section stars  -->
<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>liens rapides</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> accueil</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> a propos</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> lieux</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> réserver</a>

        </div>
        <div class="box">
            <h3>liens supplémentaires</h3>
            <a href="#"><i class="fas fa-angle-right"></i>poser des questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>Politique de protection de la vie privée</a>
            <a href="#"><i class="fas fa-angle-right"></i>conditions d'utilisation</a>
        </div>
        <div class="box">
            <h3>informations de contact</h3>
            <a href="tel:0 825 000 825"><i class="fas fa-phone" target="_blank"></i>0 825 000 825</a>
            <a href="https://mail.google.com/" target="_blank"><i class="fas fa-envelope" target="_blank"></i>équipe8esilvbin1@gmail.com</a>
            <a target="_blank" href="https://www.google.com/maps/place/Arzew/@35.854158,-0.349989,154709m/data=!3m1!1e3!4m6!3m5!1s0xd7e74c4e58be467:0x6472c0a590468514!8m2!3d35.8568041!4d-0.318647!16zL20vMDZ4a3Rf?hl=fr"><i class="fas fa-map"></i>Arzew,Oran Algeria</a>
            <a href="tel:0 825 000 825" ><i class="fas fa-phone" target="_blank"></i>0 825 000 825</a>
        </div>
        <div class="box">
            <h3>suivez-nous</h3>
            <a href="https://web.facebook.com" target="_blank"><i class="fab fa-facebook"></i>facebook</a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i>twitter</a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-snapchat" target="_blank"></i>snapchat </a>
        </div>
        

    </div>
    <div class="credit">crée par <span>Equipe 8 ESILV BIN1</span> | All Rights Reserved 2023</div>
</section>



  <!-- footer section ends  -->

<!-- js swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
