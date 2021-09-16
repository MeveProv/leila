<?php
    
//exemple d'acces au systeme de fichier 
// exemple 1 = lecture du contenud'un dossier
$contenuTextes = scandir('textes');
//afficher le tableau obtenu quand on na fonction qui contient beaucoup ca ne peu etre quun tableu
//cette variable nest pas imprimable cest complexe pas simplement un string
print_r($contenuTextes)
?>