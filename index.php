<?php 
class Personnage {
    private $nom;
    private $force;
    private $health;
    private $lvl; 
    

    function __construct(string $nom, int $force, int $health = 100, int $lvl = 1){
        $this->nom = $nom;
        $this->force = $force; 
        $this->health = $health;
        $this->lvl = $lvl;

    }

    public function alive() {
    if($this->health > 0) {
        $vie = "vivant";
    }else {
        $vie = "mort";
        }
        return $vie;
    }


    public function caracteristiques() {
echo "Le personnage ".$this->nom." a une force de ".$this->force." lvl ".$this->lvl." et est ".$this->alive()."."."<br>";
    }

    function getNom() : string {
        return $this->nom;
    }
    function setNom(string $nom){
        $this->nom = $nom;
    }
    function getLvl() : int {
        return $this->lvl;
    }
    function setLvl(int $lvl){
        $this->lvl = $lvl;
    }
    function getHealth() : int {
        return $this->health;
    }
    function setHealth(int $health){
        $this->health = $health;
    }

    function attack(Personnage $perso) {
        $perso->setHealth($perso->getHealth()-$this->force);
    }

    function lvlup(Personnage $perso) {
        $perso->setLvl($perso->getLvl()+1);
    }
}


$perso1 = new Personnage("Rose", 12, 100);
$perso2 = new Personnage("Golbu", 15, 10, 2);
$perso3 = new Personnage("Arthis", 13, 0, 2);

/*echo "Avant attaque : ";
$perso2->caracteristiques();
echo "Une fois l'attaque effectuée : ";
$perso1->attack($perso2);
$perso2->caracteristiques();*/
$perso3->lvlup($perso3);
echo "Votre perso a gagné 1 lvl.";





//$perso2->setNom("Jacquouille");
//echo $perso2->getNom();
//$perso3->caracteristiques();

?>
