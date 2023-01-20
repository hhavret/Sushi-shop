<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link href="style.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Sushi shop</title>
</head>
<body>
	    <div class="navbar">   
     <a  href="#home"style="color: crimson">Home</a>
 

     <a href="news/news.html" style="color: crimson">News</a>  <!--faire un livre d'or dans navba ra gauche-->
     <a href="#contact" style="color: crimson">Contact</a>
        
     <!--<a href="#about" style="color: crimson">About</a>
     <a href="#support" style="color: crimson">Support</a>-->
      <div class="dropdown">
        <button class="dropbtn"><img src="img/menu-bar-white-2.png" alt="">
          <i  class="fa fa-caret-down"></i>
        </button>
        <!--<a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>-->
        <div class="dropdown-content">
          <a href="histoiredusushi/histoire.html">Histoire du sushi</a>
          <a href="livredor/livredor.html">Livre d'or</a>

        </div>
      </div> 
    </div>
    
 <title>Restaurant</title>
 <img class="fit-picture" src="imgs/azerty.png" alt="">

<img src="imgs/sushi-shop2.png" alt="">
<img src="imgs/sushi_logo2petitecrimson.png" alt="">

    <link rel="stylesheet" href="css/style.css">
   
    <link rel="icon" href="favicon.ico">

	<?php
	/* Inclure des fonctions et se connecter à la base de données en utilisant PDO MySQL*/
	/* POUR HENRI : ajouter les fonctions ici : */
	include 'fonctions.php';
	$pdo = pdo_connect_mysql();
	
	
	/* Si aucune autre page n'est ren voyée dans les parametres http, la Page (home.php) est définie par défaut comme page d'accueil , de sorte que lorsque le visiteur se rend sur le site, c'est la page qui lui sera affichée.*/
	$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
	// Inclure et afficher la page demandée
	include $page.'.php';?>
	


</head>
<body>

</head>
    <body>



    


    <h3></h3>
      <p></p>
        <div class="Acceuil">
       
       <!-- <div class="box">-->

<div class="paragraphe1">
  <p>Super restaurant a commenter</p>
</div>

      </div>
      <br>
      
        <h1> <a style="color: crimson">Sushi shop</h1>
        <a href="Carte/Carte.png"> <button> <a style="color: crimson">la Carte</button></a>

         <!--<a href="index copy.php"> <button><a style="color: crimson">Menu</button></a>
        <a href="page2 menu"> <button><a style="color: crimson">page 2</button></a>-->
              <div class="Article1">
       
      


             
</div>

 <!--Rose au survol des buttons-->



 <!-- 3D Slideshow Section --> 
<section id="slideshow">
  <div class="entire-content">
    <div class="content-carrousel">
      <figure class="shadow"><img src="imgs/suite_ de_index_html/plat_1.jpg"/></figure>
      <figure class="shadow"><img src="imgs/suite_ de_index_html/plat_2.jpg"/></figure>
      <figure class="shadow"><img src="imgs/suite_ de_index_html/plat 3.jpg"/></figure>
      <figure class="shadow"><img src="imgs/suite_ de_index_html/plat 3 (2).png"/></figure>
      <figure class="shadow"><img src="imgs/suite_ de_index_html/plat_4.jpg"/></figure>
      <figure class="shadow"><img src="Carte/japanese.png"/></figure>
      <figure class="shadow"><img src="https://images.pexels.com/photos/302515/pexels-photo-302515.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
      <figure class="shadow"><img src="https://images.pexels.com/photos/301682/pexels-photo-301682.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
      <figure class="shadow"><img src="https://images.pexels.com/photos/933054/pexels-photo-933054.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>

    </div>
</div>
<br>
<br>
</section> 



     <a href="#contact" style="color: crimson">Contact</a>

<style>
  .slider {
text-align: left;
    overflow: hodden;
     margin: left;
    margin-top: auto;
  }
  .slides {
    width: calc(500px * 6);
    animation: glisse 5s infinite;
  }
  .slide {
    float: left;
  }

  @keyframes glisse{
    0%{
      transform: translateX(0);
    }
    33%{
      transform: translateX(-500px);
    }
    66%{
      transform: translateX(-1000px);
    }
    100%{
      transform: translateX(0);
    } 
  }
</style>


<div class="slider">
  <div class="slides">
    <slide><img src="img/Test_paysage.png" alt=" "></slide>
    <slide><img src="img/Test_paysage2.png" alt=""></slide>
    <slide><img src="img/Test_paysage3.png" alt=""></slide>
    <slide><img src="img/Test_paysage.png" alt=""></slide>
    <slide><img src="img/Test_paysage4.png" alt=" "></slide>
    <slide><img src="img/Test_paysage2.png" alt=""></slide>
    <slide><img src="img/Test_paysage3.png" alt=""></slide>
    <slide><img src="img/Test_paysage.png" alt=" "></slide>
    <slide><img src="img/Test_paysage2.png" alt=""></slide>
    <slide><img src="img/Test_paysage3.png" alt=""></slide>
    <slide><img src="img/Test_paysage.png" alt=""></slide>
    <slide><img src="img/Test_paysage4.png" alt=" "></slide>
    <slide><img src="img/Test_paysage2.png" alt=""></slide>
    <slide><img src="img/Test_paysage3.png" alt=""></slide>
  </div>
</div>







<div class="Article1 texte">

<!--page d'acceuil-->
    <p>
       <h1> <a style="color: crimson">Bienvenue, chez sushis shop <br>
         le restaurant japaunais par excellence.</h1>
    </p>
    </p>

    <div>
        faire la carte des menus =, la navbar le background, calendriern a proposer spiour resa
    </div>
  </div>


        <div class="Article2">

    <img src="img/Japanese-food-sushi-rolls_3840x2160.jpg" alt="sushis">

</div>
menus carte liste des plats

en carreau carré liste de mais japobnais constant

effet visuel

menu des plats defilant de gauche a droite .  
   

<!--<img src="img/plat 1.jpg">
<img src="img/plat 2.jpg">-->



    /<div>
      
    </div>


menu la carte, 


<div id ="carrousel">
  <div id ="container">
    
  </div>
</div>











     <a href="#contact" style="color: crimson">Contact</a>


<div class="container">*
  <div class="item1">
  <img src="https://slidesigma.com/themes/wp/fattsushi/wp-content/uploads/2020/06/drinks.jpg" class="image-fit" alt="img">
  </div>
  <div class="item2">
        <h2>Où me trouver : </h2>
        <br> <br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.2961857930513!2d2.1216635642445265!3d48.81440996111696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67da3f82443e9%3A0x426c86963564f794!2s23%20Rue%20de%20l&#39;Ermitage%2C%2078000%20Versailles!5e0!3m2!1sfr!2sfr!4v1666341921459!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

       

<div class="product-caption text-center">
  <div class="transform-center">
        <h4 class="text-custom-white"></h4>
  <p class="text-custom-white fs-16">
   </p>
 </div>
</div>
                                  <div class="btn-wrap">
  <span class="theme-btn btn-style-2"><span></span></span>
</div>
        


<footer>
  <map name=""></map>
  <div class="buttonfooter"> 

 


<a href="#top"><button style="color: crimson"type="button" class="btn"><i class="fa-solid fa-arrow-up"></i> Home</button></a> 
</div>


</footer>
  </body>
</html>

