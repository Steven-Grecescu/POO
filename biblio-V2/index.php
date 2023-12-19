<?php

define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "Controller/LivreController.php";
$livreController = new LivreController;
try{
if(empty($_GET['page'])){
    require_once "Views/accueil.view.php";
}else{
    $url = explode("/",filter_var($_GET['page']),FILTER_SANITIZE_URL);
    // echo "<pre>";
    // print_r($url);
    // echo "</pre>";
    switch($url[0]){
        case "accueil" : require_once "Views/accueil.view.php";
        break;

        case "livres" : 
            if(empty($url[1])){
                $livreController->afficherLivres();
            }else if($url[1] === "l"){
                $livreController->afficherLivre(intval($url[2]));
            }else if($url[1] === "a"){
                $livreController->ajoutLivre();
            }else if($url[1] === "m"){
                echo "Modification d'un livre";
            }else if($url[1] === "s"){
                echo "Suppression d'un livre";
            }else if($url[1] === "av"){
                $livreController->ajoutLivreValidation();
            }else{
                throw new Exception("La page n'existe pas");
            }

        break;
        default: throw new Exception("La page n'existe pas");

        }
    }
}catch(Exception $e){
    echo $e->getMessage();
}
