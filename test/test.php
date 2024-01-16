<?php

// it defines methods to listen in a specific manner.
interface Travailleur {
  public function travailler();
}


class Employe implements Travailleur // to implement the interface to the class.
{
  // what is an employee ? here are it's properties;
  public $nom;
  public $prenom;
  protected $age;

  public function __construct($prenom, $nom, $age)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->setAge($age);
  }

  public function travailler()
  {
    return 'je suis un employer';
  }

  public function setAge($age)
  {
    $this->age = $age;

    if (is_int($age) && $age >= 1 && $age <= 120) {
      $this->age = $age;
    } else {
      throw new Exception("L'age d'un employé devrait etre un entier...");
    }
  }

  public function getAge()
  {
    return $this->age;
  }

  public function presentation()
  {
    var_dump("Salut, je suis $this->prenom $this->nom et j'ai $this->age ans");
  }
}

class Patron extends Employe
{

  public $voiture;

  public function __construct($prenom, $nom, $age, $voiture)
  {
    // to not repeat the construct and take it from the extended parent;
    parent::__construct($prenom, $nom, $age); // it will be useful to be able to change the informations too later on.
    $this->voiture = $voiture;
  }

  public function presentation()
  {
    var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans"); 
  }

  public function rouler()
  {
    var_dump("Bonjour, je roule avec ma $this->voiture !");
  }
}


$employe1 = new Employe('Lior', 'Chamla', 32);
$employe2 = new Employe('Pernin', 'Magali', 32);

$employe1->presentation();


$patron = new Patron('Joseph', 'Durand', 55, 'Mercedes');

$patron->presentation();
$patron->rouler();

// so we call in the function the employe object.
faireTravailler($employe1);


// the object parameter is for the instance object that will be affected by the 'travailler' method.
function faireTravailler($objet) {
  var_dump("Travail en cours : {$objet->travailler()}");
}