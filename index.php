<!DOCTYPE html>
<html>

<head>
  <title>Voyages Hors pistes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1"> <!-- pour un design flexible sur différents appareils (le viewport) - le width=... va faire en sorte que la taille s'adapte à l'écran & le initial-scale c'est pour définir le niveau de zoom initial-->
  <link href="styles.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>

<body id="conteneur">

  <!-- Accueil-------------------------->

  <header class="header">
    <nav>
      <ul>
        <a href="#accueil">
          <li>Accueil</li>
        </a>
        <a href="#destinations">
          <li>Destinations</li>
        </a>
        <a href="#fiches">
          <li>Fiches</li>
        </a>
        <a href="#echanges">
          <li>Echanges</li>
        </a>
        <a href="#slideshow">
          <li>Evasion</li>
        </a>
        <a href="#footer"><li>Contact</li></a>
      </ul>
    </nav>

    <div class="wrapper" id="accueil">
      <a class="logo"><img  src="images/Travelavion.png"></a>
      <h1>Voyages Hors Pistes</h1>
    </div>

  </header>

  <div class="presentation">

    <h2>Présentation</h2>

  </div>

  <div>
    <p> Nous avons créé ce site informatif pour sortir des sentiers battus,<br /> se tenir loin des touristes et découvrir des lieux insolites (et de nouvelles cultures...).<br/> Vous trouverez des destinations "hors pistes" dans des contrées peu fréquentées
      par le public, <br />souvent sans grande infrastructure, où vous vivrez une expérience inoubliable.</p>
  </div>



  <div id="slideshow">
    <h2 id="evasion">Où irez-vous prochainement ?</h2>
     <ul id="slides">
         <li class="slide showing"><img src="images/angkor.jpg" alt="Angkor"/></li>
         <li class="slide"><img src="images/jungle.jpg" alt="La Jungle"/></li>
         <li class="slide"><img src="images/togians.jpg" alt="Togians"/></li>
         <li class="slide"><img src="images/uluru.jpg" alt="Uluru"/></li>
         <li class="slide"><img src="images/beach.jpg" alt="plage"/></li>
     </ul>
     </div>

     <div class="destinations">
      <h2 id="destinations">Choisissez votre destination</h2>
      <img src="images/world-map-photoshop.png" alt="mappemonde" title="Chaque couleur correspond à un continent. Nos fiches sont colorées selon ce code couleur.">


    </div>

  <!-- SECTION FICHES ---->
  <h2 id="fiches">Nos fiches</h2>
  <div class="fiches">



    <!-- FICHE INDONESIE -->
    <div class="indonésie">

      <article class="topdest">
        <h3 id="titre" class="indo">Top Destinations Indonésie</h3>
        <ul style="list-style-type:square">
          <li class="text"><a class="wiki" href="https://fr.wikipedia.org/wiki/Maumere" target="_blank">Maumere</a></li>
          <li class="text"><a class="wiki" href="https://fr.wikipedia.org/wiki/Labuan_Bajo" target="_blank">Labuan Bajo</a></li>
          <li class="text"><a class="wiki" href="https://fr.wikipedia.org/wiki/%C3%8Eles_Togian" target="_blank">Iles Togian Sulawesi</a></li>
        </ul>
      </article>

      <article class="cml">
        <h3 class="indo">Contexte</h3>
        <ul style="list-style-type:square">
          <li class="text">Climat : ...</li>
          <li class="text">Monnaie</li>
          <li class="text">Langue</li>
        </ul>
      </article>

      <article class="sante">
        <h3 class="indo">Santé</h3>
        <ul style="list-style-type:square">
          <li class="text">Avant de partir : vaccins, ...</li>
          <li class="text">Sur place: croix rouge, ...</li>
          <li class="text">Trousse de secours</li>
        </ul>
      </article>

      <article class="sad">
        <h3 class="indo">Sac à dos</h3>
        <ul style="list-style-type:square">
          <li class="text">Equipement pluie</li>
          <li class="text">Trousse de secours</li>
          <li class="text">Papiers : passeports, visa, ...</li>
        </ul>
      </article>

      <article class="attitude">
        <h3 class="indo">Attitude du voyageur</h3>
        <ul style="list-style-type:square">
          <li class="text">S'adapter aux coutumes</li>
          <li class="text">Respecter l'environnement</li>
          <li class="text">Mots usuels locaux</li>
        </ul>
      </article>

    </div>

    <!-- FICHE AUSTRALIE -->
    <div class="australie">

      <article class="topdest">
        <h3 id="titre" class="austr">Top destinations Australie</h3>
        <ul style="list-style-type:square">
          <li class="text"><a class="wiki" href="https://fr.wikipedia.org/wiki/Uluru" target="_blank">Uluru Ayers Rock</a></li>
          <li class="text"><a class="wiki" href="https://fr.wikipedia.org/wiki/Parc_national_de_Kakadu" target="_blank">Parc National de Kakadu</a></li>
          <li class="text"><a class="wiki" href="https://fr.wikipedia.org/wiki/Kimberley_(Australie)" target="_blank">Le Kimberley</a></li>
        </ul>
      </article>

      <article class="cml">
        <h3 class="austr">Contexte</h3>
        <ul style="list-style-type:square">
          <li class="text">Climat : ...</li>
          <li class="text">Monnaie</li>
          <li class="text">Langue</li>
        </ul>
      </article>

      <article class="sante">
        <h3 class="austr">Santé</h3>
        <ul style="list-style-type:square">
          <li class="text">Avant de partir : vaccins, ...</li>
          <li class="text">Sur place: croix rouge, ...</li>
          <li class="text">Trousse de secours</li>
        </ul>
      </article>

      <article class="sad">
        <h3 class="austr">Sac à dos</h3>
        <ul style="list-style-type:square">
          <li class="text">Equipement pluie</li>
          <li class="text">Trousse de secours</li>
          <li class="text">Papiers : passeports, visa, ...</li>
        </ul>
      </article>

      <article class="attitude">
        <h3 class="austr">Attitude du voyageur</h3>
        <ul style="list-style-type:square">
          <li class="text">S'adapter aux coutumes</li>
          <li class="text">Respecter l'environnement</li>
          <li class="text">Mots usuels locaux</li>
        </ul>
      </article>


    </div>

    <!-- FICHE ASIE -->
    <div class="asie">

      <article class="topdest">
        <h3 class="asi" id="titre">Top destinations Asie</h3>
        <ul style="list-style-type:square">
          <li class="text"><a class="wiki" href="https://fr.wikipedia.org/wiki/Parc_national_de_Taman_Negara" target="_blank">Parc National de Taman Negara</a></li>
          <li class="text"><a class="wiki" href="https://fr.wikipedia.org/wiki/%C3%8Ele_Tioman" target="_blank">Iles Tioman</a></li>
          <li class="text"><a class="wiki" href="https://fr.wikipedia.org/wiki/Kuala_Kangsar" target="_blank">Kuala Kangsar</a></li>
        </ul>
      </article>

      <article class="cml">
        <h3 class="asi">Contexte</h3>
        <ul style="list-style-type:square">
          <li class="text">Climat : ...</li>
          <li class="text">Monnaie</li>
          <li class="text">Langue</li>
        </ul>
      </article>

      <article class="sante">
        <h3 class="asi">Santé</h3>
        <ul style="list-style-type:square">
          <li class="text">Avant de partir : vaccins, ...</li>
          <li class="text">Sur place: croix rouge, ...</li>
          <li class="text">Trousse de secours</li>
        </ul>
      </article>

      <article class="sad">
        <h3 class="asi">Sac à dos</h3>
        <ul style="list-style-type:square">
          <li class="text">Equipement pluie</li>
          <li class="text">Trousse de secours</li>
          <li class="text">Papiers : passeports, visa, ...</li>
        </ul>
      </article>

      <article class="attitude">
        <h3 class="asi">Attitude du voyageur</h3>
        <ul style="list-style-type:square">
          <li class="text">S'adapter aux coutumes</li>
          <li class="text">Respecter l'environnement</li>
          <li class="text">Mots usuels locaux</li>
        </ul>
      </article>

    </div>


  </div>

  <div class="echanges" id="echanges">



    <form action="index.php" method="post" enctype="multipart/form-data"> <!-- enctype c'est si l'utilisateur veut envoyer un fichier une photo  -->


   <p style="color:white;">N'hésitez pas à partager vos expériences, vos découvertes ou même vos mauvais plans !</p>

   <!-- avec required un message d'erreur est affiché si un champ est resté vide-->
      <div>
        <label for="nom">Nom :  </label>
        <input type="text" id="nom" name="nom" tabindex="1" required/>
      </div>
      <div>
        <label for="prenom">Prénom : </label>
        <input type="text" id="prenom" name="prenom" tabindex="2" required/>
      </div>

<!--
      <div><label>Genre :</label>
        <label>Femme</label><input type="radio" name="Genre" value="Femme">
        <label>Homme</label><input type="radio" name="Genre" value="Homme">
        <label>Autre</label><input type="radio" name="Genre" value="Autre">
      </div>
-->

      <div>
        <label for="email">Votre email : </label>
        <input type="text" id="email" name="email" tabindex="3" required/>
      </div>
      <div>
        <label for="message">Message : </label>
        <textarea id="message" name="message" tabindex="4" required></textarea>
      </div>

<div>
    <label>Fichier :</label>
    <input type="file" name="monfichier" />
    <!--<input type="submit" value="Partager un fichier" />-->
</div>

      <div class="button">
        <button type="submit" name="envoi" value="Enoyer le formulaire !" id="bouton envoi">Envoyer votre message</button>
      </div>

      <div class="commentaire" style="color:white;">

                </div>

    </form>
  </div>



  <footer class="footer" id="footer">
    <h2 style="color:#FFCC00;">Voyages Hors Pistes</h2>


    <!-- Liens extérieurs --->
    <div class="reseaux">

      <a href="https://www.instagram.com/?hl=fr" target="_blank"><img src="images/instagram.png" alt="Instagram" class="rs"/></a>

      <a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.png" alt="Facebook" class="rs"/></a>

      <a href="https://twitter.com/login?lang=fr" target="_blank"><img src="images/twitter.png" alt="Twitter" class="rs"/></a>

    </div>
    <!-- Fin liens extérieurs --->

    <a class="nous" href="javascript: window.alert('Codé par Anne, Célia, Valérie, Franck et Jean-louis.')">A propos de nous</a>

    <div class="copyright">Copyright © 2018. Tous droits réservés</div>


  </footer>

  <script src="script.js" type="text/javascript"></script>

</body>

</html>
