<?php

//Une classe qui n'a aucun attribut mais à des méthodes pour faire l'ajout d'image.
class Image {

    //Cette fonction va permettre de déplacer le fichier dans un nouveau dossier. Car l'image est pour le moment dans un dossier tampon. La fonction renvoie en plus à la fin l'url de la source de l'image. Prend en paramètre le nom du fichier, son emplacement temporaire, et le nom du dossier dans lequel on doit l'envoyer.
    public function moveImage($name, $emplacement_temporaire, $dossier){

        //On affecte à la variable une chaine de caractère qui concatène le nom du dossier ainsi que le nom du fichier.
        $emplacement = "template/img/".$dossier."/".$name;

        //On utilise une fonction prédéfinie dans php qui permet de déplacer un fichier téléchargé. On lui donne en paramètres l'emplacement temporaire du fichier puis sa destination. 
        move_uploaded_file($emplacement_temporaire, $emplacement);

        return $emplacement; 

    }

    //Fonction utilisé pour redimensionner une image
    public function resizeImage($image_source, int $largeur, $nom, $dossier){

        $source = imagecreatefromjpeg($image_source); //creer une nouvelle image à partir d'un ficher ou d'une URL
        
        //imagesx = largeur de l'image
        //imagey = hauter de l'image
           
        $reduction = (($largeur * 100) / imagesx($source)); // calcul le % de reduction
        $hauteur = ((imagesy($source) * $reduction) / 100); //calcul de la hauteur en fonction du % de reduc
        
        $image_destination = imagecreatetruecolor($largeur, $hauteur); //creer une nouvelle image vide avec la nouvelle hauteur et largeur
        
        imagecopyresampled($image_destination, $source, 0, 0, 0, 0, imagesx($image_destination), imagesy($image_destination), imagesx($source), imagesy($source)); //copie l'image $source dans $image_destination en lui précisant les coordonnées du point de redimensionnement. Tout a 0 = le coin supérieur gauche
        
        $nom = str_replace(" ", "-", $nom); //remplace les espaces par des tirets
        
        $nouvelleimage = imagejpeg($image_destination,"template/img/".$dossier."/".$largeur."-".$nom);
         
    }


}