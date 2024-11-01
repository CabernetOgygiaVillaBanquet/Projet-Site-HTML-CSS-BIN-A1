
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
         <!-- swiper  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="Oranval.ico" type="image/x-icon">
    <icon href="Oranval.ico" type="image/x-icon">

    </head>
    <body>
    <section class="header">
       <a href="home.php" class="logo">OranVal</a> 
       <h1>Bienvenue voyageur !</h1>
       <nav class="navbar">
    <a href="home.php" >accueil</a>
    <a href="about.php" >a propos</a>
    <a href="package.php" >lieux</a>
    <a href="book.php" >réserver</a>
   
</nav>

       <div id="menu-btn" class="fas fa-bars">
        
       </div>
    </section>
    <button id="scrollBtn">^</button>
    <div class="header-layer">
    </div>
    <!-- header section ends  -->
    <!-- home section stars  -->
<section class="home" style="background-color: bisque;">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide  slide" style="background: url(photos/ain_turc.jpg) no-repeat;">
                <div class="content">
                   <span>explorer, découvrir, voyager</span>
                   <h3>voyager autour du monde</h3>
                   <a href="package.php" class="btn">en savoir plus</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(images/header-bg-1.png) no-repeat;">
                <div class="content">
                   <span>explorer, découvrir, voyager</span>
                   <h3>Faites le récit de votre aventure</h3>
                   <a href="package.php" class="btn">en savoir plus</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(images/oran-santa-cruz.jpg) no-repeat;">
                <div class="content">
                   <span>explorer, découvrir, voyager</span>
                   <h3>Faites le récit de votre aventurey</h3>
                   <a href="package.php" class="btn">en savoir plus</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(photos/RoyalHotel.jpg) no-repeat;">
                <div class="content">
                   <span>explorer, découvrir, voyager</span>
                   <h3>Découvrez les nouveaux lieux</h3>
                   <a href="package.php" class="btn">en savoir plus</a>
                </div>
            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

    <!-- home section ends  -->


 <!-- services section stars  -->
<section class="services">
    <h1 class="heading-title">
        nos services
    </h1>
    <div class="box-container">
      <div class="box">
        <img src="images/hiking.png" alt="adventure">
        <h3>aventure</h3>
        <p>Expérimentez des activités à sensations fortes comme le saut à l'élastique, le rafting en eaux vives et bien d'autres encore.</p>
      </div>
      <div class="box">
        <img src="images/tour-guide.png" alt="tour guide">
        <h3>guide touristique</h3>
       <p>Découvrez les connaissances des initiés et explorez les meilleurs sites touristiques avec un guide professionnel.</p>
      </div>
      <div class="box">
        <img src="images/trekking.png" alt="trekking">
        <h3>trekking</h3>
        <p>Faites une randonnée pittoresque à travers de magnifiques paysages naturels et découvrez des joyaux cachés.</p>
      </div>
      <div class="box">
        <img src="images/tent.png" alt="tent">
        <h3>feu de camp</h3>
        <p>Rassemblez-vous autour du feu de camp pour une soirée chaleureuse où l'on vous racontera des histoires et où l'on vous servira des s'mores.</p>
      </div>
      <div class="box">
        <img src="images/off-road.png" alt="off road">
        <h3>off roead</h3>
        <p>Faites une promenade passionnante sur un terrain accidenté avec un véhicule tout-terrain.</p>
      </div>
      <div class="box">
        <img src="images/passport.png" alt="quality">
        <h3>qualité</h3>
        <p>Nous nous engageons à fournir des services de haute qualité et à assurer votre satisfaction.</p>
      </div>
    </div>
</section>

 <!-- services section ends  -->

 <!-- home about section stars  -->
<section class="home-about">
    <!-- <div class="image">
        <img src="images/travel-whith-us.jpg" alt="">
    </div> -->
    <div class="content">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

        <!-- Add HTML code with the span element -->
        <h3>who are we :)</h3>
        <p><span id="auto"></span></p>
        
        
        
        <a href="about.php" class="btn">read more</a>
    </div>
</section>

 <!-- home about section ends  -->
 <!-- home package section stars  -->
<section class="home-packages">
    <h1 class="heading-title">Nos Sites Touristiques</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="photos/theatre-AEK-aloula-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>théâtre d'opéra d'aloula</h3>
                <p>
                Découvrez l'étonnant Opéra d'Oran, un joyau architectural construit au début du XXe siècle par le célèbre architecte Inez. Situé sur la vibrante place du 1er novembre 1954, ce magnifique bâtiment présente un mélange de toits en tuiles et en terrasse, ainsi qu'une façade saisissante. Admirez l'impressionnante statue de la déesse de l'art tenant une lyre, entourée de muses qui créent une belle perspective de profondeur. </p> 
                               <a href="book.php" class="btn">Réserver maintenant</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="photos/Cathedral-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Cathédrale</h3>
                <p>Venez visiter l'époustouflante cathédrale d'Oran, une magnifique pièce d'architecture datant du XIXe siècle. Avec ses flèches imposantes et ses détails complexes, la cathédrale est un lieu incontournable pour tous ceux qui s'intéressent à l'histoire et à la culture. Admirez les vitraux étonnants, les sculptures ornées et les mosaïques exquises qui ornent l'intérieur de la cathédrale. </p>
                <a href="book.php" class="btn">Réserver maintenant</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="photos/santacruz.jpg" alt="">
            </div>
            <div class="content">
                <h3>Santa Cruz</h3>
                <p>Santa Cruz, un monument emblématique qui domine la ville d'Oran. Construit au XVIe siècle, ce site historique offre une vue imprenable sur la mer Méditerranée et le paysage environnant. Explorez la chapelle, grimpez sur la tour pour admirer les vues panoramiques et plongez dans la riche histoire et la culture de la région.</p>
                <a href="book.php" class="btn">Réserver maintenant</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href="package.php" class="btn">plus d'infos</a></div>
</section>
 <!-- home package section ends  -->
 <!-- home offer section stars  -->
 <section class="home-offer">
    <div class="content">
        <h3>
        jusqu'à 50% de réduction
        </h3>
        <p>Vous êtes à la recherche d'une bonne affaire ? Ne cherchez pas plus loin ! Pour une durée limitée, nous offrons une réduction de 50 % sur tous nos circuits et activités. Que vous soyez à la recherche d'une expérience culturelle, d'une aventure en plein air ou simplement d'un bon vieux divertissement, nous avons tout ce qu'il vous faut. Ne manquez pas cette occasion incroyable d'explorer tout ce qu'Oran a à offrir à un prix imbattable. Réservez dès maintenant et laissez l'aventure commencer !</p>
        <a href="book.php" class="btn">Réservez maintenant</a>
    </div>
 </section>
  <!-- home offet section ends  -->
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
<script src="js/script.js"></script>
<script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>

      

</body>
</html>