<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
 
  <title>E-MADA VISITE</title>
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css" />
</head>

<body>

<?php
session_start();


         $nom=($_SESSION['nom']);


     
?>

<!-- couverture -->
  <div class="pictures_home"> 
          <img src="./assets/image/couvertureSud.jpg" class="d-block w-100" alt="...">
          <img src="./assets/image/alley-respons.jpg" class="d-block w-100" alt="...">
          <img src="./assets/image/parallax.jpg" class="d-block w-100" alt="...">
          
</div>

<div class="t">
  
  <h1 class="title hide_1">Venir à Madagascar</h1>
  <h1 class="visit hide_1">Explorez l 'île de MADAGASCAR</h1>
 
  <h1 class="Anakao hide_1"></h1>
  <button class="explore">Découvrir</button>
</div>

<div class="c_responsive"> 


  <img src="./assets/image/nosy-be-responsive.jpg" class="d-block w-100" id="img" alt="...">

   
  

</div>


<!-- couverture -->
    
  
          
<!-- about -->
  <div class="contain" id="propos">
    <p class="contenu">
      <span class="hide_1">Ce site wevwb est un moyen de référence pour des étrangers ou des locaux qui veulent visiter
        les sites touristiques de Madagascar.
        Mais aussi ,un moyen pour contempler les merveilles de Madagascar en ligne.
      </span>
    </p>

    <div class="int">
      <h1 class="title">Un petit mot</h1>
      <p class="titre-propos hide_">A propos de ce site</p>
    </div>


   <img src="./assets/image/P1120630.JPG" alt="" />

  </div>
<!-- fin about -->
  

  
  <!-- debut choix -->
  <div class="Choiceofmada">
    <h1 class="title hide_1">Votre choix</h1>
   <div class="choice_item1 hide_" id="pm">Pourquoi Madagascar ?</div>
  
  </div>
  </div>

   <div class="choice_contain">
        <div class="imag">
              <div class="item_">
                  <img src="../menu/assets/image/madagascar-g65d58bceb_1920.jpg" alt="">
                  <div class="in_1">
                   <h1> Une île Paradisiaque</h1>
                   <p>Découvrez des paysages fabuleux , des plages ,des sites touristiques endemiques à Madagscar</p>
                  </div>
              </div>

              <div class="item_">
                <img src="../menu/assets/image/lemurs (2).jpg" alt="">
                <div class="in_2">
                  <h1> Faune et flore endemique</h1>
                  <p>Découvrez des espèces uniques endemique à Madagascar comme les maki-cattas, et des plantes endemiques comme les plantes médicinales ne se trouvant qu 'à Madagascar</p>
                 </div>
              </div>

              <div class="item_">
                <img src="./assets/image/famadihana.jpg" alt="">
                <div class="in_3">
                  <h1> Des traditions et coûtumes</h1>
                  <p>Découvrez les traditions et coûtumes de notre pays en citant comme illustration le famadihana, le famoran-jaza</p>
                 </div>      
                       </div>
        </div>

        
 <input type="radio" name="radio" id="radio">
 <input type="radio" name="radio" id="radio2">
        <div class="ligne"></div>
        <div class="lign1"></div>
        <div class="lign2"></div>
        <div class="lign3"></div>
     
  
  </div>

  


  <div class="Popular" id=destination>
    <h3 class="title hide_1">Destinations</h3>
    <h1 class="hide_">Nos destinations populaires</h1>

    <div class="contain_1">
          <div>
             <img class="image_1" src="./assets/image/ouest-.jpg" alt="">
             <i class=""></i><i class="fa fa-map-marker"></i> <h3>Ouest</h3>
             <h2>Morondava et l' Allée des Baobab</h2>
             <button>découvrir</button>
          </div>

          <div>
            <img class="image_1" src="./assets/image/sainte-marie.jpg" alt="">
            <i class=""></i><i class="fa fa-map-marker"></i> <h3>Est</h3>
            <h2>L' île de Sainte-Marie</h2>
            <button>découvrir</button>
         </div>

         <div>
            <img class="image_1" src="../circuit_sud/photo/antsirabe/antsirabe_gare.jpg" alt="">
            <i class=""></i>  <i class="fa fa-map-marker"></i> <h3>Sud</h3>
            <h2>Antsirabé et son histoire</h2>
            <button>découvrir</button>
         </div>

         <div>
            <img class="image_1" src="../circuit_nord/image/Nosy Be/nosyIranja.jpg" alt="">
              <i class="fa fa-map-marker" id="i4"></i><h3>Nord</h3>
            <h2>Nosy-Be et ses îles</h2>
            <button>découvrir</button>
        </div>
    </div>

    <div class="contain_2">
      <div>
        <img class="image_1" src="./../circuit_sud/photo/Tuléar/Tuléar.jpg" alt="">
        <i class=""></i><i class="fa fa-map-marker"></i> <h3>Sud</h3>
        <h2>Tuléar au Sud</h2>
        <button>découvrir</button>
     </div>

     <div>
       <img class="image_1" src="./assets/image/foulpointe5.jpg" alt="">
       <i class=""></i><i class="fa fa-map-marker"></i> <h3>Est</h3>
       <h2>Foulpointe et sa plage</h2>
       <button>découvrir</button>
    </div>

    <div>
       <img class="image_1" src="../circuit_sud/photo/RANOMAFANA/paysage1.jpg" alt="">
       <i class=""></i>  <i class="fa fa-map-marker"></i> <h3>Sud</h3>
       <h2>Le parc de Ranomafana</h2>
       <button>découvrir</button>
    </div>

    <div>
       <img class="image_1" src="../circuit_sud/photo/Tritriva/Lac_Tritriva.jpg" alt="">
         <i class="fa fa-map-marker" id="i4"></i><h3>Sud</h3>
       <h2>Tritriva et son lac</h2>
       <button>découvrir</button>
   </div>
</div>
      </div>

     
<!-- fin choix -->

<!-- debut suggestion -->
    <div class="suggestion">
         <h1 class="hide_">Pourquoi E-mada visit</h1>
         <h3 class="title hide_1">Nous choisir</h3>

     <div class="contain_suggestion">
      <div class="item_1">
      <img src="assets/image/logo_mada.png" alt="">
        <h2>Découverte de Madagascar</h2>
        <p class="hide_1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error aperiam tenetur excepturi perspiciatis non commodi exercitationem accusamus vitae pariatur
        </p>
        <button>Rechercher</button>
      </div>

      <div class="item_2">
        <img  class="image_contain"src="../menu/assets/image/localisation.png" alt="">
        <h2>Recherche de Cooperative</h2>
        <p class="hide_1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error aperiam tenetur excepturi perspiciatis non commodi exercitationem accusamus vitae pariatur
        </p>
        <button>Rechercher</button>
      </div>
          
      <div class="item_3">
        <img  class="image_contain"src="../menu/assets/image/localisation.png" alt="">
       
        <h2>Recherche d' hotel</h2>
        <p class="hide_1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error aperiam tenetur excepturi perspiciatis non commodi exercitationem accusamus vitae pariatur
        </p>
        <button>Découvrir</button>
      </div>
      
     
    </div>
<!-- fin suggestion -->

  

<div class="circuits">
  <h1 class="hide_">Nos destinations</h1>
  <h3 class="title1 hide_1">Découvrez</h3>

    <div class="contain-1">
        <div class="contain_1">
             <img src="./assets/image/sud.jpg" alt="" class="c1">
             <h1>Le grand Sud de Madagascar</h1>
             <p class="hide_1">Explorez divers especes comme le maki-catta, Tritriva, Isalo, Tuléar</p>
            <button class="b1">découvrir</button>
            </div>

        <div class="contain_2">
          <img src="./assets/image/couvertureNord.jpg" alt="" class="c2">
          <h1>Le Nord de Madagascar</h1>
          <p class="hide_1">Explorez le fameuse île de Sainte-Marie et les îles de Nosy-Be , découvrez des splendides plages</p>
         <button class="b1">découvrir</button>
        </div>

        <div class="contain_3">
          <img src="./assets/image/ouest-.jpg" alt="" class="c3">
          <h1>Cap sur l' ouest de Madagascar</h1>
          <p class="hide_1"> Voyager pour des especes endemiques , l' allée de s Baobab , des sublimes paysages</p>
         <button class="b1">découvrir</button>
        </div>
       
    </div>

    <div class="contain-2">
      <div class="contain_1"><img  class="c3" src="./../Circuit_est/photo/Sainte-marie/couverture.jpg" alt="" class="c3">
        <h1>Voyager l' est de Madagascar</h1>
        <p class="hide_1"> Explorer la plage de Sainte-Marie, Foulpointe</p>
       <button class="b1">découvrir</button></div>
    
     
  </div>
</div>

<div class="avis">
  <h3>Guestbook</h3>
       <h1 class="hide_"> Avis des auteurs</h1>
 

      <div class="slider">
        <div class="button_avis">
          <div class="prev1"  onclick="plusSlides(-1)">&#10094</div>
          <div class="next1" onclick="plusSlides(1)">&#10095</div>
         </div>

          <div class="slides"> 
              <img src="assets/image/quote.png" alt="" class="quote">
              <img src="assets/image/quote_droit.png" alt="" class="quote_d">
               <div class="item">
                   <h1>Loick Emadisson</h1>
                   <p class="item_1">  Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur similique doloremque maxime provident soluta labore adipisci modi numquam facilis fugiat. Quos repellat quisquam modi, molestiae nostrum eius earum nemo pariatur.</p>
               </div>
               <div class="item"><h1>Carene</h1>
               <p>   sit amet consectetur adipisicing elit. Consequatur similique doloremque maxime provident soluta labore adipisci modi numquam facilis fugiat. Quos repellat quisquam modi, molestiae nostrum eius earum nemo pariatur.</p>
           </div>

               <div class="item">
                <h1>Marie</h1> 
               <p>  adipisicing elit. Consequatur similique doloremque maxime provident soluta labore adipisci modi numquam facilis fugiat. Quos repellat quisquam modi, molestiae nostrum eius earum nemo pariatur.</p>
           </div>

               <div class="item">
                <h1>Annie</h1> 
               <p> . Consequatur similique doloremque maxime provident soluta labore adipisci modi numquam facilis fugiat. Quos repellat quisquam modi, molestiae nostrum eius earum nemo pariatur.</p>
           </div>

               <div class="item">
                <h1>punes</h1>
               <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur similique doloremque maxime provident soluta labore adipisci modi numquam facilis fugiat. Quos repellat quisquam modi, molestiae nostrum eius earum nemo pariatur.</p>
           </div>
          </div>
          
      </div>
</div>

<div class="galeriePhoto">
    <h1 class="hide_">Notre galerie Photo</h1>
    <h3 class="title hide_1">Nos meilleurs photos</h3>

        <div class="lign1">
          <img class="image_galerie" src="../circuit_sud/photo/Tritriva/Lac_Tritriva.jpg" alt="">
          <img  class="image_galerie1" src="./../circuit_nord/image/Nosy Be/44954194-la-magnifique-île-de-nosy-komba-madagascar.webp" alt="">
          <img class="image_galerie2" src="../circuit_ouest/Tsriribihina/fleuve2.jpg" alt="">
          <img class="image_galerie3" src="../Circuit_est/photo/Indri-indri.jpg" alt="">
    </div>

    <div class="lign2">
      <img class="image_galerie4" src="../Circuit_est/photo/gettyimages-624892288-612x612.jpg" alt="">
      <img class="image_galerie5" src="../picturres/fosa.jpg" alt="">
      <img class="image_galerie6" src="../circuit_sud/photo/antsirabe/antsirabe_gare.jpg" alt="">
      <img class="image_galerie7" src="../circuit_sud/photo/andraikiba/andraikiba.jpg" alt="">
</div>

<div class="all">voir plus <i class=" fa fa-solid fa-plus"></i></div>
</div>

<div class="blog" id="blog">
   <h3 class="hide_1">Actualité</h3>     
  <h1 class="hide_">Blog</h1>

  <div class="contain">
         <img class="img" src="./images/blog.jpg" alt="">
         <p>La fête de l' indépendance de Madagascar </p>
  </div>
</div>

<div class="commentaire">
    <img src="./assets/image/parallax.jpg" alt="">
    <div class="contain">
          <p class="hide_1">Nous laissez un commentaire, si vous avez apprecié notre prestation sur Madagascar</p>
          
          <div class="form">
               <input type="text" id="coms" placeholder="Entrez votre commentaire ici">
               <input type="submit" value="Envoyer">
          </div>
    </div>
</div>


  <!-- <div class="searchHotel" id="hotel">
    <h1 class="hide">RECHERCHE D' HOTEL</h1>
    <div class="bordure hide"></div>

    <form action="#hotel" method="GET" id="form">

      <p class="nomville hide">Nom de la ville où vous vous trouvez: </p>

   <input type="text" class="localisation hide" placeholder="entrez nom de la région  " name="ville">

    <button class="button_hotel hide" name="rechercher">Rechercher</button>

    <textarea name="affichage " id="affichage" cols="59" rows="13" placeholder="  liste des hotels correspondants à proximité">
     <?php
    if (isset($hotelTana)){
    foreach($hotelTana as $value): ?>
    
              <?= $value["nom_hotel"]; ?>

    <?php endforeach;}?>  -->
    <!-- </textarea>  -->
    <!-- </form>
  </div> -->

  <!-- <div class="searchCoop" id="coop">
     <h1 class="hide">RECHERCHER UN COOPERATIVE</h1>
     <div class="bordure1 hide"></div>

     <form action="#coop" method="GET">
      <p class="titreDepart hide">point de départ: </p>
       <input type="text" class="depart hide" name="depart" placeholder="point de départ">
      <p class="titreArrivee hide">point d' arrivée: </p>
       <input type="text" class="arrivee hide" name="arrivee" placeholder="point d' arrivée">
         <input class="button_coop" name="submit" type="submit" value="rechercher">  --> 
        <!-- <button class="button_coop" name="submit" type="submit">rechercher</button>
      <textarea name="submit" id="affichage_coop" cols="57" rows="10" placeholder="  liste des cooperatives correspondants à votre itinéraire">
      <?php
  
    if (isset($cooperative)){
    foreach($cooperative as $value): ?>
             
              <?= $value["nom_cooperative"]; ?>

    <?php endforeach;}?>  -
   </textarea>
   
     </form>
  </div> -->

 

  <header id="header" class="header">
    <div class="header_contain">
    <ul id="ul">
        <li><a href="#" class="a1" target="_self"><i class="fa fa-home"></i> ACCUEIL</a></li>
        <!-- <li><a href="#c" target="_self" id="circuit">Nos services</a></li> -->
          <li><a href="#destination" target="_self" id="circuit">NOS DESTINATIONS</a></li>
        <li><a href="#blog" target="_self" id="">BLOG</a></li>
        <li><a href="#propos" target="_self"><i class="fa fa-info">  A PROPOS</i></a></li>
        <li><a  target="_self"><i class="fa fa-search" id="search"> Rechercher</i></a></li>
        <li><a href="#"  class="contact"> Contact</a></li>
        <li id="user"><img src="./assets/image/image" alt=""> 
        <h1><?php echo $_SESSION['nom_utilisateur']; ?></h1>
        </li>
    </ul>
    </div>
    <div class="icone_menu"><i class="fa fa-bars"></i></div>
    <div class="logo"> <img src="assets/image/logo_.png" alt=""> E-MADA <span>VISIT</span></div>
  </header>

<div class="up"><img src="assets/image/up.png" class="up-" alt=""></div>
  
  <script src="./../javascript/TypeWriter.js"></script>
  <script src="./../javascript/scrollingEffect2.js"></script>
  <script src="./../javascript/ScrollingEffect.js"></script>
  <script src="../javascript/menuEffect.js"></script>
  <script src="../javascript/withouyActualisation.js"></script>
  <script src="./../javascript/textEffect.js"></script>
<script src="../javascript/carousel.js"></script>
<script src="../javascript/tritmorial.js"></script>
<script src="../javascript/galerieEffect.js"></script>

</body>

<footer>
     <img src="assets/image/logo.png" alt="" class="logo">
     <div class="info">
      <h1>Nous contacter</h1>
         <div class="phone"> <img src="assets/image/telephone.png" alt=""><p>038 19 580 04</p></div>
        <div class="email"><img src="assets/image/lettre20x20.png" alt=""><p> Loickemadesemadisson@gmail.com</p></div>
        <div class="github"><img src="" alt=""></div>
     </div>

     <div class="circ">
         <h1>Circuits</h1>
         <h3>Nord</h3>
         <h3>Sud</h3>
         <h3>Est</h3>
         <h3>Ouest</h3>

     </div>

     <div class="raccourci">
      <h1>menu</h1>
      <h3>home</h3>
      <h3>nos destinations</h3>
      <h3>a propos</h3>
      <h3>blog</h3>

  </div>

  <div class="reference">
    <h1>Notre reference</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam est molestiae </p>

</div>

<div class="border_"></div>
<p class="copright">copyright @2023 E-MADA VISIT by Johan .All Rights reserved</p>
<div class="icones">
    <img src="assets/image/FaceBook.png" alt="">
    <img src="assets/image/twitter.png" alt="">
    <img src="assets/image/Pinterest.png">
    <img src="assets/image/insta.png" alt="">
    <img src="assets/image/github.png" alt="">
</div>
</footer>

</html>