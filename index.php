<?php 
class Archer {
    private $nom;
    private $force;
    private $health;
    private $lvl; 
    private $type;
    

    function __construct(string $nom, int $force, int $health = 100, int $lvl = 1, string $type){
        $this->nom = $nom;
        $this->force = $force; 
        $this->health = $health;
        $this->lvl = $lvl;
        $this->type = $type;
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
echo "Le personnage ".$this->nom." est de type ".$this->type." a une force de ".$this->force." lvl ".$this->lvl." et est ".$this->alive()."."."<br>";
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

    function attack($perso) { 
        $this->arrow();
        $perso->setHealth($perso->getHealth()-$this->force);
    }

    function arrow() {
        echo "L'archer décoche une flècheé";
    }

    function lvlup(Personnage $perso) {
        $perso->setLvl($perso->getLvl()+1);
    }
    
}

class Warrior {
    private $nom;
    private $force;
    private $health;
    private $lvl; 
    private $type;
    

    function __construct(string $nom, int $force, int $health = 100, int $lvl = 1, string $type){
        $this->nom = $nom;
        $this->force = $force; 
        $this->health = $health;
        $this->lvl = $lvl;
        $this->type = $type;
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
echo "Le personnage ".$this->nom." est de type ".$this->type." a une force de ".$this->force." lvl ".$this->lvl." et est ".$this->alive()."."."<br>";
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
        $this->beat();
        $perso->setHealth($perso->getHealth()-$this->force);
    }

    function beat() {
        echo "Le guerrier agresse violemment l'ennemi";
    }

    function lvlup(Personnage $perso) {
        $perso->setLvl($perso->getLvl()+1);
    }
    
}

class Mage {
    private $nom;
    private $force;
    private $health;
    private $lvl; 
    private $type;
    

    function __construct(string $nom, int $force, int $health = 100, int $lvl = 1, string $type){
        $this->nom = $nom;
        $this->force = $force; 
        $this->health = $health;
        $this->lvl = $lvl;
        $this->type = $type;
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
echo "Le personnage ".$this->nom." est de type ".$this->type." a une force de ".$this->force." lvl ".$this->lvl." et est ".$this->alive()."."."<br>";
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

    function attack( $perso) {
        $this->thrown();
        $perso->setHealth($perso->getHealth()-$this->force);
    }

    function thrown() {
        echo "Le mage a jeté un sort";
    }

    function lvlup($perso) {
        $perso->setLvl($perso->getLvl()+1);
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
