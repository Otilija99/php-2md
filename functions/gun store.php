//https://github.com/codelex-io/php-syllabus/blob/main/exercises/basics/05-functions.md
<?php
//Exercise 7**
//Imagine you own a gun store.
//Only certain guns can be purchased with license types.
// Create an object (person) that will be the requester to purchase a gun (object) Person object has a name,
//valid licenses (multiple) & cash. Guns are objects stored within an array.
//Each gun has license letter, price & name.
//Using PHP in-built functions determine if the requester (person) can buy a gun from the store.
class Person
{
    public $name;
    public $licenses;
    public $cash;

    function __construct($name, $licenses, $cash)
    {
        $this->name = $name;
        $this->licenses = $licenses;
        $this->cash = $cash;
    }
};
class Gun
{
    public $name;
    public $licenseRequired;
    public $price;

    function __construct($name, $licenseRequired, $price)
    {
        $this->name = $name;
        $this->licenseRequired = $licenseRequired;
        $this->price = $price;
    }
};
$person = new Person("Jānis", array("A", "B"), 500);
$guns = array(
    new Gun("Pistol", "A", 200),
    new Gun("Shotgun", "B", 400),
    new Gun("Rifle", "C", 600)
);
function canBuyGun($person, $gun)
{
    if (in_array($gun->licenseRequired, $person->licenses) && $person->cash >= $gun->price) {
        return true;
    } else {
        return false;
    }
}

foreach ($guns as $gun) {
    if (canBuyGun($person, $gun)) {
        echo $person->name . " can buy " . $gun->name . " for $" . $gun->price . "\n";
    } else {
        echo $person->name . " cannot buy " . $gun->name . "\n";
    }
}


?>