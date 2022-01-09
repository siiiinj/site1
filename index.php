<?php
require 'auth.php';
forcer_utilisateur_connecte();
?>
<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <title>Hervaflix</title>
  <link rel="shortcut icon" type="image/x-icon" media="all" href="img/netflix_PNG15(1).ico">
  <link rel="stylesheet" href="./style/style.css">
  <link rel="stylesheet" href="js/main.js">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="js/app.js">
<link rel="stylesheet" href="/style/styleep.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>
<!-- partial:index.partial.html -->
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hervaflix</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

  

  <script src="js/main.js"></script>
</head>
<body>
  
  


    <!-- HEADER -->
   
    <header>
  
          
      <nav>   
        <div class="netflixLogo">
          <a id="logo" href="index.php"><img src="img/logo.png" alt=""></a>
        </div>  
        <div class="accueil-film">
        <strong><a href="#home">Accueil</a></strong>
        <a href="Film.php">Films</a>
      </div>
      
        
              
        
      

        <div class="nav2">
        <input type="search" id="search" placeholder="rechercher..." value="" list="searchlist" onchange="ouvrirPage()">
        <datalist id="searchlist">
        
        </datalist>
     
        <script>
            
        </script>
        
        <style>
        #search {
          padding: 5px;
          border: none;  
          outline: none;
          width: 20px;
          padding-left: 20px;
          color: white;         
          background: url('img/search logo.png') left no-repeat;
          transition: width 0.6s;
          
        }
         #search:focus{
          margin-left: -200px;
          width: 200px;
          border: 2px solid white;
          background-color: rgba(0, 0, 0, 0.5);
          
          
          
          
         } 
     
        
      </style> 
     
       <a href="notification.html"><i class="fas fa-bell sub-nav-logo"></i></a>
       <a href="login.php">Account</a> 
     
       
        
        
      </div>        
      </nav>      
    
    </header>
    
    
    <!-- END OF HEADER -->
    <br>
    <br>
    <br>
    
      
    
    <!-- MAIN CONTAINER -->
    <body>
    

  <script src="js/app.js"></script>
    <div class="linear-gradient">

    <div id="video">
    <video id="myVideo" autoplay loop shuffle muted>

      <source src="vidéo/trailer-foodwars.mp4?rel=0&autoplay=1" type="video/mp4" aria-hidden="true" >
    </video>
  </div>
  <script>
    var vid = document.getElementById("myVideo");
    function enableAutoplay() { 
      vid.autoplay = true;
      vid.load();
    }
    
    function disableAutoplay() { 
      vid.autoplay = false;
      vid.load();
    } 
    
    function checkAutoplay() { 
      alert(vid.autoplay);
    } 
    </script>
<br><br><br><br><br><br><br><br><br>
<div id="control-home">
<div class="btnlecture">
  <a href="anime/foodwars/s3/ep1.html"><img src="img/logo Lecture.png" alt=""></a>
  <div class="infobtn">
    <a href="#foodwars"><img src="img/plus d'info.png" alt=""></a>
  </div>
  </div> 
  
        
  <section class="thumbSection">
  <div class="titre">
            <h2>détente</h2>
            </div>  
          
      
      <div class="thumbTiles swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
              <!-- Slides -->

              <div class="swiper-slide">
                <a class="thumbTile" href="#naruto">        
                   <img class="thumbTile__image" src='wallpaper anime/wallpapernaruto.png' onmouseover="this.src='wallpaper anime/wallpapernarutodeg.png';" onmouseout="this.src='wallpaper anime/wallpapernaruto.png';" />  
                        
                </a>
              
            </div> 

              <div class="swiper-slide">
                <a class="thumbTile" href="#bleach">        
                   <img class="thumbTile__image" id="bleachimg" src='wallpaper anime/wallpaperbleachindex.png' onmouseover="this.src='wallpaper anime/wallpaperbleachdeg.png';" onmouseout="this.src='wallpaper anime/wallpaperbleachindex.png';" />  
                        
                </a>
              
                  
                  
              
            </div> 

            <div class="swiper-slide">
                  <a class="thumbTile" href="#kimetsudet">
                    <div class="wallpaper">
                      <img class="thumbTile__image" src='wallpaper anime/wallpaperdemonslayé.png' onmouseover="this.src='wallpaper anime/wallpaperdemonslayédeg.png';" onmouseout="this.src='wallpaper anime/wallpaperdemonslayé.png';"/> 
                        </div>
                  </a>
              </div>

              <div class="swiper-slide">
                  <a class="thumbTile" href="#sk8">
                   
                    <img class="thumbTile__image" src='wallpaper anime/wallpapersk8.png' onmouseover="this.src='wallpaper anime/wallpapersk8deg.png';" onmouseout="this.src='wallpaper anime/wallpapersk8.png';" /> 
                  </a>
                
                    
                    
                
              </div>
              <div class="swiper-slide">
                <a href="#Tokyo-Revengers">
                 
                 <img class="thumbTile__image" src='wallpaper anime/wallpaperrevengé.png' onmouseover="this.src='wallpaper anime/wallpaperrevengédeg.png';" onmouseout="this.src='wallpaper anime/wallpaperrevengé.png';" />
                    </a>      
                 
              
            </div>
             
           
              <div class="swiper-slide">
                <a class="thumbTile" href="#docté">
                  <img class="thumbTile__image" src='wallpaper anime/wallpaperdocté.png' onmouseover="this.src='wallpaper anime/wallpaperdoctédeg.png';" onmouseout="this.src='wallpaper anime/wallpaperdocté.png';" />
                </a>
              </div>
             
            
              <div class="swiper-slide">
                  <a class="thumbTile" href="#jujutsu">
                    <img class="thumbTile__image" src='wallpaper anime/wallpaperjajatso.png' onmouseover="this.src='wallpaper anime/wallpaperjajatsodeg.png';" onmouseout="this.src='wallpaper anime/wallpaperjajatso.png';" />
                  </a>
              </div>
              <div class="swiper-slide">
                <a class="thumbTile" href="#foodwars">
                  <img class="thumbTile__image" src='wallpaper anime/wallpaperfoodpek.png' onmouseover="this.src='wallpaper anime/wallpaperfoodpekdeg.png';" onmouseout="this.src='wallpaper anime/wallpaperfoodpek.png';" />
                </a>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
  </section>
          

      
  <?php 
        include ('series/kimetsudet.php');
    ?>

<?php
  include ('series/jujutsu.php');
  ?>

<?php
  include ('series/foodwars.php');
?>

<?php
  include ('series/naruto.php');
?>



<?php
  include ('series/bleach.php');
?>


<?php
  include ('series/docté.php');
  ?>



<?php
  include ('series/revengé.php');
  ?>

<?php
  include ('series/sk8.php');
  ?>

        <section class="thumbSection">
          <div class="titre">
            <h2>ecchi</h2>
            </div>  
            
          <div class="thumbTiles swiper-container">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide">
                      <a class="thumbTile" href="#dnk">
                          <img class="thumbTile__image" src='wallpaper anime/wallpaperdnk.png' onmouseover="this.src='wallpaper anime/wallpaperdnkdeg.png';" onmouseout="this.src='wallpaper anime/wallpaperdnk.png';" />
                      </a>
                  </div>
                 
                
              <div class="swiper-slide">
                <a class="thumbTile" href="#foodwarsecchi">             
                    <img class="thumbTile__image" src='wallpaper anime/wallpaperfoodpek.png' onmouseover="this.src='wallpaper anime/wallpaperfoodpekdeg.png';" onmouseout="this.src='wallpaper anime/wallpaperfoodpek.png';" />
                </a>
            </div>
                </div>
        <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        </div>
  </section>

        <?php
  include ('series/foodwarsecchi.php');
?>
<?php
  include ('series/dnk.php');
  ?>
        
        
       <section class="thumbSection">
        <div class="titre">
          <h2>Sport</h2>
          </div>  
         
        <div class="thumbTiles swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
               
                <div class="swiper-slide">
                  <a class="thumbTile" href="#kuroko">
                    <img class="thumbTile__image" src='wallpaper anime/wallpaperkuroko.png' onmouseover="this.src='wallpaper anime/wallpaperkurokodeg.png';" onmouseout="this.src='wallpaper anime/wallpaperkuroko.png';" /> 
                          
                  </a>
                
              </div>
              <div class="swiper-slide">
                  <a class="thumbTile" href="#Heavy">
                    <img class="thumbTile__image" src='wallpaper anime/wallpaperheavy.png' onmouseover="this.src='wallpaper anime/wallpaperheavydeg.png';" onmouseout="this.src='wallpaper anime/wallpaperheavy.png';" /> 
                          
                  </a>
                
              </div>
              <div class="swiper-slide">
                <a class="thumbTile" href="#sk8sport">
                    <img class="thumbTile__image" src='wallpaper anime/wallpapersk8.png' onmouseover="this.src='wallpaper anime/wallpapersk8deg.png';" onmouseout="this.src='wallpaper anime/wallpapersk8.png';" /> 
                        
                </a>
              
          
               
                
                </div>
                </div>
        <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        </div>
  </section>

      <?php
        include ('series/kuroko.php');
      ?>
   
       <?php
        include ('series/sk8sport.php');
        ?>
     
    <section class="thumbSection">
    <div class="titre">
          <h2>Shonen</h2>
          </div>  
      
      <div class="thumbTiles swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                  <a class="thumbTile" href="#kimetsu">
                    <div class="wallpaper">
                      <img class="thumbTile__image" src='wallpaper anime/wallpaperdemonslayé.png' onmouseover="this.src='wallpaper anime/wallpaperdemonslayédeg.png';" onmouseout="this.src='wallpaper anime/wallpaperdemonslayé.png';" /> 
                        </div>
                  </a>
              </div>
              <div class="swiper-slide">
                <a class="thumbTile" href="#highschool">          
                  <img class="thumbTile__image" src='https://images.squarespace-cdn.com/content/v1/51b3dc8ee4b051b96ceb10de/1588114605296-9238WJIKQ7L75K6LK7A4/image-asset.jpeg' onmouseover="this.src='wallpaper anime/godofhighschooldeg.png';" onmouseout="this.src='wallpaper anime/godofhighschool.jpeg';" /> 
                </a>             
            </div>
              <div class="swiper-slide">
                <a class="thumbTile" href="#snk">          
                  <img class="thumbTile__image" src='wallpaper anime/wallpapersnko.png' onmouseover="this.src='wallpaper anime/wallpapersnkodeg.png';" onmouseout="this.src='wallpaper anime/wallpapersnko.png';" /> 
                </a>             
            </div>
            <div class="swiper-slide">
              <a class="thumbTile" href="#onepiece">
                    <img class="thumbTile__image" src='wallpaper anime/wallpaperonepouce.png' onmouseover="this.src='wallpaper anime/wallpaperonepoucedeg.png';" onmouseout="this.src='wallpaper anime/wallpaperonepouce.png';" /> 
                      
              </a>
            
          </div>
           
          <div class="swiper-slide">
            <a class="thumbTile" href="#Tokyo-Revengersshonen">
                    <img class="thumbTile__image" src='wallpaper anime/wallpaperrevengé.png' onmouseover="this.src='wallpaper anime/wallpaperrevengédeg.png';" onmouseout="this.src='wallpaper anime/wallpaperrevengé.png';" /> 
                    
            </a>
          
        </div>
        <div class="swiper-slide">
          <a class="thumbTile" href="#docté">
            <img class="thumbTile__image" src='wallpaper anime/wallpaperdocté.png' onmouseover="this.src='wallpaper anime/wallpaperdoctédeg.png';" onmouseout="this.src='wallpaper anime/wallpaperdocté.png';" /> 
          </a>
      </div>
     
    <div class="swiper-slide">
      <a class="thumbTile" href="#jujutsu">
                    <img class="thumbTile__image" src='wallpaper anime/wallpaperjajatso.png' onmouseover="this.src='wallpaper anime/wallpaperjajatsodeg.png';" onmouseout="this.src='wallpaper anime/wallpaperjajatso.png';" /> 
      </a>
  
      </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
  </section>

 <?php
 include ('series/kimetsu.php');
 ?>
  <?php
     include ('series/highschool.php');
     ?>
    <?php 
      include ('series/jujutsushonen.php');
      ?>
    <?php
      include ('series/doctéshonen.php');
      ?>
       
    <?php
    include ('series/highschool.php');
    ?>

<?php 
  include ('series/revengéshonen.php');
  ?>
</div>
        <!-- END OF MAIN CONTAINER -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script>
      var mySwiper = new Swiper('.swiper-container', {
          // Optional parameters
          spaceBetween: 10,
          slidesPerView: 5,
          slidesPerGroup: 2,
          loop: false,
          freeMode: true,
          loopAdditionalSlides: 5,
          speed: 700,
          // Navigation arrows
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
          breakpoints: {
              // when window width is >= 640px
              640: {
                  slidesPerView: 5,
                  slidesPerGroup: 5,
                  freeMode: false
              }
          }
      })
  </script>
    <!-- LINKS -->
    <section class="link">
      <div class="logos">
        <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="https://www.instagram.com/jeremie.rvo/ " target="_blank"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
      </div>
      <div class="sub-links">
        <ul>
          <li><a href="#">Audio and Subtitles</a></li>
          <li><a href="#">Audio Description</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Gift Cards</a></li>
          <li><a href="#">Media Center</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Legal Notices</a></li>
          <li><a href="#">Corporate Information</a></li>
          <li><a href="connexion.php">Contact Us</a></li>
          
        </ul>
      </div>
    </section>
    <!-- END OF LINKS -->

    <!-- FOOTER -->
  
  </div>
<script src="js/racourcis.js"></script>
  <script src="js/posto.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/main.js"></script>
  <script src="js/scroll.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
<!-- partial -->
  


