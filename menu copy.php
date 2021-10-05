<?php
  $page = 'menu';
  
  // Inclure l'entête
  include('inclusions/entete.php');

  //inclure la librairie 'citation' la fonction finalement
  include('lib/citations.lib.php');
//met le resultet de ma fonction dans une  varible je capture le resultat
  $citation = citationAleatoire($langueChoisie, 'menu');

 ///Gestion de l'affichage dynamique du menu faut l'organiser dans une page lib... exemple include('lib/citations.lib.php');

 //Etape1 lire le contenu du fichier dans une chaine de caractere

 //tester si le fichier existe avant notre if pour la langue
//ou remplacer avec fr
 $menuChaine = file_get_contents('data/menu-$langueChoisie.json');//donne en caractere
//Etape 2 "decoder la chaine json pour obtenir un tableau en php
$menuTableau = json_decode($menuChaine,true);

?>
    <div class="contenu-principal">
      <div class="citation">
        <img src="images/menu-citation.jpg" alt="">
        <blockquote>
          
      <?= $citation['texte']; ?>
          <cite>- <?= $citation['auteur']; ?></cite>
        </blockquote>
      </div>
      <div class="carte">
        <!-- boucle pour generer dynamiquement les sections menu -->
        <!-- remplacer les variables donneee de x y nom plus convenable xetiquette yvaleur qui est un tableau -->
        <?php foreach($menuTableau as $titreSection => $platsSection) : ?>
        <section>
          <h2><?= $titreSection; ?></h2>
          <ul>


            <!-- boucle pour generer dynamiquement les plats dans la section menu courante -->
            <?php foreach($platsSection as $unPlat) : ?>
            <li>                               <!-- condition if le i ou le br-->
              <span><?= $unPlat["nom"]; ?><br><i>description du plat</i></span>
                                               <!-- condition if le i ou le br-->
              <span class="prix"><i class="article-menu-portion">(2 <?= $mnu_portion; ?>)</i><?= $unPlat["prix"];; ?></span>
            </li>
            <!--  fin boucle des plats d'une section -->
            <?php endforeach; ?>
          </ul>
        </section>
        <?php endforeach; ?>
        <!--  fin boucle des sections -->
      </div>
    </div>
<?php
  // Inclure le pied de page
  include('inclusions/pied2page.php');
?>