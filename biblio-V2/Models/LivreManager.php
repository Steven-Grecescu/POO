<?php
require_once "Models/Model.class.php";
require_once "Models/Livre.class.php";

class LivreManager extends BDConnexion{
    private $livres;

    public function ajoutLivre($livre){
        $this->livres[] = $livre;
    }

    public function getLivre(){return $this->livres;}

    public function chargementLivre(){
        $req = $this->getBDD()->prepare('SELECT * FROM livres');
        $req->execute();
        $mesLivres = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesLivres as $value){
            $book = new Livre($value['idLivre'],$value['titre'],$value['nbPages'],$value['image']);
            $this->ajoutLivre($book);

        }
    }
}