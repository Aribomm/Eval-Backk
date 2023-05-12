<!-- Création d'un objet par conversion (transformation -->
<?php
$pen = [
    "type"   => "plume",
    "color"  => "noir",
    "encre"  => "bluge",
    "prix"   => 15

];
    
var_dump(($pen));

$objet = (object) $pen;

var_dump($objet);

echo $objet ->type;



// ================ INSACATION+++++++

$ballonFoot = new stdClass();

$ballonFoot->type = "football";
$ballonFoot->color = "red";
$ballonFoot->status = "creve";
var_dump($ballonFoot);


echo " -Hey le ballon de".$ballonFoot->type.",". "Nike est ". $ballonFoot->status;

//if a property exict ou pas

var_dump( property_exists($ballonFoot,'prix'));

if (!property_exists($ballonFoot,'prix')) {
    # code...
    $ballonFoot->prix = 10;
    echo 'le ballon coute '. $ballonFoot->prix .' Euro <br>';
}

//classes who are declared by default et si on declare les autres
/* var_dump((get_declared_classes())); */



//creation de un classe
//cree duex objects a partir de classee Ballon
/* class Ballon {

    public $marque;
    public $sport;

    function lancer(){
        echo "Vous avez lance le ballon ! ";
    }
    

}


$ballonFoot = new Ballon();
$ballonFoot->marque = "Nike";
$ballonFoot->sport = "Football";

$ballonRugby = new Ballon;
$ballonRugby->marque = "Gilbert TM";
$ballonRugby->sport = "Rugby";

echo "Sport: $ballonRugby->sport <br> Marque: $ballonRugby->marque <br>";


 */

/* 

class User {

    public $nom;
    public $age;

    function tchater($message){
        echo " - ".$message; 
    }

}

$michoux = new User();
$michoux->nom= "Michel";
$michoux->age= 63;




class Flowers {

    public $place;
    public $km;
    public $people;
   

    function goingOut($where = 0){
        echo " We are going to ".$this->place. "who is". $this->km." far ,its only us". $this->people.$where;
    }
}

$payment = new Flowers();
$payment->place = "Karakas";
$payment->km = 12;
$payment->people = 2;

echo "We are going to $payment->place who is  $payment->km far ,its just us $payment->people";


 */

/*     public $nom;
    public $age;
    private $avatar = ["😀","😥","😍","😯"];

    function tchater($message){
        echo " - " . $message;
    }

    function choixAvatar($id){
        echo($this->avatar[$id]);
    }
}

$michel = new User();
$michel->age = 54;
$michel->nom = "Michel";
$michel->choixAvatar(2);


echo "<h1>  TCHAT  </1>";

 */

/* class User {
    public $nom;
    public $age;
    public $avatar = ["😀","😥","😍","😯"];
    
    function tchater($message){
        echo " - " . $message;
    }

    function choixAvatar($id){
        echo($this->avatar[$id]);
    }
    function tchatcher($message) {
        echo "$this->avatar / $this->nom : $message <hr>";
    }

    function viellir($annees){
        $this->age += $annees;
        echo "WOW!  a " . $this->age . "  !";
        if ($this->age >= 235) {
            $this->crever();
        }
    }

    function crever(){
        echo "Il est temps de crever " . $this->nom . " !";
    }
}

$zak = new User();
$zak->nom = "Zak";
$zak->age = 200;
$zak->viellir(35);
 */




//METHODES MAGIQUES?comment avec deux _ _ ,ex: __invoqueDemon




/* class Verre {
    function __construct(){
      echo  "<p> Creation of the object </p>";
    }
}
$goblet = new Verre(); */


class Verre {
    public $nom;
    public $materiaux;
    public $contenu;

    function __construct($nom, $materiaux, $contenu){
        $this->nom = $nom;
        $this->materiaux = $materiaux;
        $this->contenu = $contenu;
    echo "une" .$this->nom ."is made from". $this->materiaux ."and has inside". $this->contenu;
    }
}

$gobletEau = new Verre("Goblet", "plastique","eau");

//=============================================================
class Shopping {
    public $panier;
    
    function __construct($panier){
        $this->panier = $panier;
    }
}

class Pomme {
    public $name;
    
    function __construct($name){
        $this->name = $name;
    }
}

class Poire {
    public $name;
    
    function __construct($name){
        $this->name = $name;
    }
}

// Create instances of Pomme and Poire
$pom1 = new Pomme("pomme un");
$pom2 = new Pomme("pomme deux");
$pom3 = new Pomme("pomme trois");
$pom4 = new Pomme("pomme quatre");
$pom5 = new Pomme("pomme cinq");
$poire1 = new Poire("poire 1");
$poire2 = new Poire("poire 2");
$poire3 = new Poire("poire 3");
$poire4 = new Poire("poire 4");
$poire5 = new Poire("poire 5");

// Create an array of Pomme and Poire instances
$panier = array($pom1, $pom2, $pom3, $pom4, $pom5, $poire1, $poire2, $poire3, $poire4, $poire5);
echo "br".count($panier);
// Count the number of each item in the shopping basket
$pommess = 0;
$poiress = 0;
foreach ($panier as $item) {
    if ($item instanceof Pomme) {
        $pommess++;
    } else if ($item instanceof Poire) {
        $poiress++;
    }
}

// Print the table of item quantities
echo "<h1>Shopping Basket</h1>";
echo "<table>";
echo "<tr><th>Item</th><th>Quantity</th></tr>";
echo "<tr><td>Pommes</td><td>".$pommess."</td></tr>";
echo "<tr><td>Poires</td><td>".$poiress."</td></tr>";
echo "<td>Total ".count($panier)."</td>";
echo "</table>";











class User {
    public $email = "bobe@gmail.com";

    public function __construct()
    {
        
    }

    function balanceTonMail(){
        echo $this->email;

    }
}





$regine = new User();




$regine->balanceTonMail();




//encapsulation