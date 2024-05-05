<?php
//Exercise 4
//Create a array of objects that uses the function of exercise 3
//but in loop printing out if the person has reached age of 18.


class Person2
{
    public $name;
    public $surname;
    public $age;

    function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }
    function isEighteenOrAbove()
    {
        return $this->age >= 18;
    }
}
$people = array(
    new Person2("Aija", "Dille", 12),
    new Person2("Ance", "Smita", 16),
    new Person2("Zane", "Joko", 25)
);
foreach ($people as $person) {
    if ($person->isEighteenOrAbove()) {
        echo $person->name . " " . $person->surname . " has reached the age of 18 or above.\n";
    } else {
        echo $person->name . " " . $person->surname . " has not reached the age of 18 yet.\n";
    }
}