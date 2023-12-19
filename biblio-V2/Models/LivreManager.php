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

    public function getLivreById($id){
        for($i=0;$i<count($this->livres);$i++){
            if($this->livres[$i]->getIdLivre()=== $id){
                return $this->livres[$i];
            }
        }
    }

    public function ajoutLivreBD($titre,$nbPages,$image){

        $req ="INSERT INTO livres(titre,nbPages,image)
        values (:titre,:nbPages,:image)";

        $stmt =$this->getBDD()->prepare($req);
        $stmt->bindValue(":titre",$titre,PDO::PARAM_STR);
        $stmt->bindValue(":nbPages",$nbPages,PDO::PARAM_INT);
        $stmt->bindValue(":image",$image,PDO::PARAM_STR);

        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat>0){
            $livre = new Livre($this->getBDD()->lastInsertId(),$titre,$nbPages,$image);
            $this->ajoutLivre($livre);
        }

    }

}