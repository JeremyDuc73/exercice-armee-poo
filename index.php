<?php
// dans l'armée il y a soldats, lieutenants, general, superGeneral
//tout le monde à un nom, prenom, et matricule
//les soldats savant marcher en rang
//les lieutenants savent crier
//les generaux savent crier comme les lieutenants mais font un cri different
//les lieutenants savent conduire
//les generaux ont leur voiture perso
//les superGeneraux one une voiture plus jolie
// il existe une sirene qui peut sonner

abstract class Humain {

    protected string $prenom;
    protected string $nom;
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getNom(){
        return $this->nom;
    }
}

class Soldat extends Humain implements SaitMarcherEnRang {

    protected int $matricule;

    public function marcherEnRang()
    {
        echo "Je sais marcher en rang<br>";
    }

    public function setMatricule($matricule){
        $this->matricule = $matricule;
    }
    public function getMatricule(){
        return $this->matricule;
    }
}

class Lieutenant extends Soldat implements SaitConduire, SaitCrier {

    public function conduire()
    {
        echo "Je sais conduire<br>";
    }
    public function crier(){
        echo "Je crie comme un lieutenant<br>";
    }

}

class General extends Lieutenant {

    public function crier(){
        echo "Je crie comme un Général<br>";
    }
    public function voiture(){
        echo "J'ai une voiture de fonction<br>";
    }

}

class SuperGeneral extends General {

    public function voiture(){
        echo "J'ai une ferrari de fonction<br>";
    }

}


class Sirene {

    public static function sonne(){
        echo "TUTUTUTUTUTUTUTUTUTUTUTUTUUT";
    }

}


interface SaitMarcherEnRang {
    public function marcherEnRang();
}
interface SaitConduire {
    public function conduire();
}
interface SaitCrier {
    public function crier();
}



$timmy = new Soldat();
$timmy->setPrenom("Timmy");
$timmy->setMatricule(334535);
echo "Soldat ".$timmy->getPrenom()." matricule numéro ".$timmy->getMatricule().": <br> ";
$timmy->marcherEnRang();
echo "<br><br>";

$roger = new Lieutenant();
$roger->setPrenom("Roger");
$roger->setMatricule(127307);
echo "Lieutenant ".$roger->getPrenom()." matricule numéro ".$roger->getMatricule().": <br> ";
$roger->crier();
$roger->conduire();
echo "<br><br>";

$laurent = new General();
$laurent->setPrenom("Laurent");
$laurent->setMatricule(984538);
echo "Général ".$laurent->getPrenom()." matricule numéro ".$laurent->getMatricule().": <br> ";
$laurent->crier();
$laurent->voiture();
echo "<br><br>";

$fabrice = new SuperGeneral();
$fabrice->setPrenom("Fabrice");
$fabrice->setMatricule(999999);
echo "Super Général ".$fabrice->getPrenom()." matricule numéro ".$fabrice->getMatricule().": <br> ";
$fabrice->voiture();
$fabrice->crier();
echo "<br><br>";


Sirene::sonne();