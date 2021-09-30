<?php
    ///Librairie de fonction pour gerer les citations


/**
 * Retoutrne une citation aleatoire
 * 
 * @param string $langue Code de la langue popur la citation demandée
 * @param string $page Identifiant de la page sur laquelle la citation sera utilisée
 * 
 * @return array Tableau associatif contenant la citation choisie 'texte' et 'auteur'
 * 
 */
 

function citationAleatoire($langue, $page){



//Etape 1 ----acceder au fichier            ouvre le fichier et me donne tous sur une ligne
 //si utilise les guillemets fais apparaitre la variable part a la chassedes variables sinon concanetation comme en haut
$citationsChaine = file_get_contents("data/citations-$page.json");//interpolation

//Etape 2 ------Iterpreter(Analyser la syntaxe) le code json dans la variable $citationsChaine
$citationsTab = json_decode($citationsChaine,true);

///Une fois que le fichier est ouvert !!!!!!si il ny a pas de citation dans la langue specifier utiliser fr
//if(isset($citationsTab[$langue])){

    //$citationLangueChoisie = $citationsTab[$langue];  
//}
//else{
  //  $citationLangueChoisie = $citationsTab['fr'];  
//}
//utilisant l'opératuer ternaire de php (TEST) ? vrai : sinon

$citationLangueChoisie = (isset($citationsTab[$langue])) ? $citationsTab[$langue] : $citationsTab['fr']; 

///etape 3 selectionner le tablaue correspont a la langue choisie
$citationLangueChoisie = $citationsTab[$langue];
///ETAPE # 4 choisir une citation aléatoirement dan le tableua($citationsTab[$langueChoisie]);
///////diminue le lenght le nombre total donne le nombre 0 dans le tableau (derniere position possible)
$positionAleatoire = rand(0, count($citationLangueChoisie)-1);
//allert chercher dans le tableu
return $citationLangueChoisie[$positionAleatoire];
//print_r($citation);

}
   



?>