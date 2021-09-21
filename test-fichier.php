<?php
    
//exemple d'acces au systeme de fichier 
// exemple 1 = lecture du contenud'un dossier
//fonction lis un repertoire
$contenuTextes = scandir('textes');
//afficher le tableau obtenu quand on na fonction qui contient beaucoup ca ne peu etre quun tableu
//cette variable nest pas imprimable cest complexe pas simplement un string
//print_r($contenuTextes)


//parcourir le tableau obtenu et afficher uniquement les noms du dossiers réel pas le point et le 2 point

//boucle valleur est a 0 ensuite fonction qui demande si ya une suite si oui incrémente
 //jenleve le point et les 2 point
for($i = 0; $i < count($contenuTextes); $i++){
    //jenleve le point et les 2 point
    if($contenuTextes[$i] != '.' && $contenuTextes[$i] != '..'){
        echo $contenuTextes[$i]. "<br";
    }
  
}



?> 