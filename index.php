<?php 
class Personnage {
    private $nom;
    private $force;
    private $health;
    private $lvl; 
    

    function __construct(string $nom, int $force, int $health, int $lvl = 1){
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
echo "Le personnage ".$this->nom." a une force de ".$this->force." lvl ".$this->lvl." et est ".$this->alive();
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

}

$perso1 = new Personnage("Rose", 12, 100);

$perso2 = new Personnage("Golbu", 15, 100, 2);

$perso3 = new Personnage("Arthis", 13, 0, 2);


function attack() {
    $damage = rand(1,100);
    setHealth(int $health){getHealth($perso1)-$damage;}
    return $health;
}

if(attack($perso1)){
    echo $perso1->getHealth();
}


//$perso2->setNom("Jacquouille");
//echo $perso2->getNom();
//$perso3->caracteristiques();

?>
