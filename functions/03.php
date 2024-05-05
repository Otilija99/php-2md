<?php
//Exercise 3
//Create a person object with name, surname and age.
//Create a function that will determine if the person has reached 18 years of age.
//Print out if the person has reached age of 18 or not.

class Person {
    public $name;
    public $surname;
    public $age;

    function __construct($name, $surname, $age) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    function isEighteenOrAbove() {
        return $this->age >= 18;
    }
}
$person = new Person("Jana", "Dilina", 20);

// Check if the person is 18 or above
if ($person->isEighteenOrAbove()) {
    echo $person->name . " " . $person->surname . " has reached the age of 18 or above.";
} else {
    echo $person->name . " " . $person->surname . " has not reached the age of 18 yet.";
};