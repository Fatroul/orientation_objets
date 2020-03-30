<?php 
class Personnage {
    public $nom;
    public $force;
    public $lvl; 
    public $health;


    public function alive() {
    if($this->health > 0) {
        $vie = "vivant";
    }else {
        $vie = "mort";
        }
        return $vie;
    }


    public function caracteristiques() {
echo "Le personnage $this->nom a une force de $this->force et est {$this->alive()}";
    }
 

}

$perso1 = new Personnage();
$perso1-> nom = "Rose";
$perso1-> force = "12";
$perso1-> lvl = "6";
$perso1-> health = "100";

$perso2 = new Personnage();
$perso2-> nom = "Golbu";
$perso2-> force = "15";
$perso2-> lvl = "8";
$perso2-> health = "100";

$perso3 = new Personnage();
$perso3-> nom = "Arthis";
$perso3-> force = "13";
$perso3-> lvl = "33";
$perso3-> health = "100";

$perso3->caracteristiques();

?>
