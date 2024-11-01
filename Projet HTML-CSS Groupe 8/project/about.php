<?php

$succes = false ;

?>
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
    <style>
        .comment-box{
            display: flex;
            padding: 2rem;
            flex-direction: column;
        }
        .comment-box input , textarea {
   width: 100%;
   padding:10px 15px;
   font-size: 17px;
   color: white ; 
   margin:8px 0;
   background: rgba(88, 134, 134, 0.548);
   border-radius: 5px;
}
#name::placeholder, #job::placeholder, #rating-value::placeholder, #comment::placeholder {
  color : rgba(245, 245, 220, 0.726) ;
}

        .rating {
            display: inline-block;
          }
          
          .star {
            color: gray;
            cursor: pointer;
            font-size: 3rem;
          }
          
          .star:hover,
          .star.selected {
            color: gold;
          }
         
          label{
            color:var(--black);
            font-size: 2rem;
            padding: 1rem;
          }
          .comments{
          margin-top: 5%;
    margin-left: 20px;
}
.comment{
    border: 1px solid rgba(16, 46, 46, 1);
    background-color: rgba(16, 46, 46, 0.973);
    float: left;
    border-radius: 5px;
    padding-left: 40px;
    padding-right: 30px;
    padding-top: 10px;
    
}
.comment p,.comment span,.darker p,.darker span{
    color: rgb(184, 183, 183);
}
label,
.btn{ 
    color: rgb(212, 208, 208);
    font-size: 2.5rem;
}
 .darker img{
    margin-right: 15px;
    position: static;
}
form{
    border: 1px solid rgba(16, 46, 46, 1);
    background-color: rgba(16, 46, 46, 0.973);
    border-radius: 5px;
    padding: 20px;
    width: 80%;
 }
 #thank-you{
  position: fixed;
  top: 50%;
left: 50%;
transform: translate(-50%, -50%);
z-index: 100;
width: 20rem;
height: 20rem;
border: 1px #222;
border-radius: 10px;
color: #222;
backdrop-filter: blur(5px);
font-size: 2rem;
font-weight: 500;
box-shadow:2px 2px #222;
padding: 4rem;
backdrop-filter: blur(20px);
}
    </style>
</head>
<body>
    <!-- header section stars  -->
    <section class="header">
       <a href="home.php" class="logo">OranVal</a> 
       <nav class="navbar">
        <a href="home.php">accueil</a>
        <a href="about.php">a propos</a>
        <a href="package.php">lieux</a>
        <?php  ?>
        <a href="book.php">réserver</a>
       </nav>

       <div id="menu-btn" class="fas fa-bars">
        
       </div>
    </section>

    <!-- header section ends  -->
<div class="heading" style="background:url(images/booking-form2.jpg) no-repeat">
    <h1 style="color:var(--white)">a propos</h1>
</div>

<div class="about">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

    <div class="image">
        <img src="photos/E.jpg" alt="">
      
        <p><span id="auto" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);font-size:40px ; background: linear-gradient(to right, rgb(58, 58, 58), rgb(255, 238, 2)); -webkit-background-clip: text;-webkit-text-fill-color: transparent; font-weight: 700;"></span></p>
        
        
    </div>
    <div class="content">
        <h3>Pourquoi nous choisir ?</h3>
        <p>Bienvenue à OranVal ! Nous sommes une équipe de voyageurs expérimentés et passionnés qui se consacrent à aider les visiteurs à découvrir tout ce que cette ville dynamique a à offrir. Notre objectif est de vous offrir l'expérience de voyage la plus mémorable et la plus agréable possible, que vous soyez un nouveau visiteur ou un voyageur chevronné.</p>
        <p>Notre équipe est composée de locaux compétents et amicaux qui sont passionnés par le partage de leur amour pour Oran avec des visiteurs du monde entier. Que vous souhaitiez découvrir le riche patrimoine culturel de la ville, profiter de sa beauté naturelle, ou simplement vous immerger dans la cuisine locale et la vie nocturne, nous sommes là pour vous aider à tirer le meilleur parti de votre visite.</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>Principales destinations</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>prix abordable</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>Services de guide 24 heures sur 24</span>
            </div>
        </div>

    </div>
</div>


<section class="add-comment">
    <h2 class="add-cmnt" >*Bonjour User , Pouvez-vous nous donner une note *</h2>
    <form id="comment-form" method="post">
     <div class="comment-box">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" placeholder="Quel est votre nom !"   >


        <label for="name">Poste:</label>
        <input type="text" id="job" name="job" placeholder="Quel est votre role" >
    

        <label for="rating">Note:</label>
        <div class="rating">
          <i class="fas fa-star star" data-value="1"></i>
          <i class="fas fa-star star" data-value="2"></i>
          <i class="fas fa-star star" data-value="3"></i>
          <i class="fas fa-star star" data-value="4"></i>
          <i class="fas fa-star star" data-value="5"></i>
        </div>
        <input type="hidden" id="rating-value" name="rating" required>


        <label for="comment">Commentaire:</label>
        <textarea id="comment" style="height: 150px;" name="comment" placeholder="mettez votre commentaire ici" ></textarea>
        <!-- <button type="submit" class="btn" name="send">SEND !</button> -->

    <input type='submit' value='Envoyer !' class='btn' name='send' <?php $succes = true?> >

?>
     </div>
       
    </form>
  </section>
  <button id="scrollBtn">^</button>

 <!-- reviwes section stars  -->

 <!-- footer section stars  -->
 <section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>liens rapides</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> accueil</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> a propos</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> lieux</a>
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
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>

<script src="js/script.js"></script>
</body>
</html>