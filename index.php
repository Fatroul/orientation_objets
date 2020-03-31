<?php 
class Personnage {
    protected $nom;
    protected $force;
    protected $health;
    protected $lvl; 
    

    function __construct(string $nom, int $force, int $health = 100, int $lvl = 1, string $type){
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

class Archer extends Personnage {
    function attack(Personnage $perso) {
        $this->shot();
        parent::attack($perso);
    }

    function shot() {
        echo $this->nom." de type ".Archer::class. "décoche une flèche.<br>";
    }

}

class Warrior extends Personnage {
    function attack(Personnage $perso) {
        $this->punch();
        parent::attack($perso);
    }

    function punch() {
        echo $this->nom." de type ".Warrior::class. "frappe l'ennemi.<br>";
    }
}

class Mage extends Personnage {
    function attack(Personnage $perso) {
        $this->thrownSort();
        parent::attack($perso);
    }

    function thrownSort() {
        echo $this->nom." de type ".Mage::class. "frappe l'ennemi.<br>";
    }
}

$perso1 = new archer("Rose", 12, 100, 1,"archer");
$perso2 = new warrior("Golbu", 15, 10, 2,"guerrier");
$perso3 = new mage("Arthis", 13, 0, 2, "mage");

echo "Avant attaque : ";
$perso2->caracteristiques();
$perso1->attack($perso2);
echo "après l'attaque";
$perso2->caracteristiques();
$perso3->lvlup($perso3);
echo "Votre perso a gagné 1 lvl.";


//$perso2->setNom("Jacquouille");
//echo $perso2->getNom();
//$perso3->caracteristiques();
//$perso2->caracteristiques();

?>
