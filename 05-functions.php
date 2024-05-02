//https://github.com/codelex-io/php-syllabus/blob/main/exercises/basics/05-functions.md
<?php
//Exercise 1
//Create a function that accepts any string and returns the same value with added "codelex" by the end of it.
//Print this value out.
function addCodelex($str) {
    return $str . " codelex";
}

$input = readline('Enter a string: ');
$output = addCodelex($input);
print $output;
echo"
"
?>
<?php
//Exercise 2
//Create a function that accepts 2 integer arguments.
//First argument is a base value and the second one is a value its been multiplied by.
//For example, given argument 10 and 5 prints out 50

function multiply($base, $multiplier) {
    return $base * $multiplier;
}

$base = readline('Enter a base integer: ');
$multiplier = readline('Enter a multiplier integer: ');

$result = multiply($base, $multiplier);
echo $result;
echo"
"
?>
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
echo"
"
?>
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
};
echo"
"
?>
<?php
//Exercise 5
//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg.
//Create a secondary array with shipping costs per weight.
//Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
//Using foreach loop print out the values of the fruits and how much it would cost to ship this product.
$fruits = array(
    array("name" => "Apple", "weight" => 8),
    array("name" => "Banana", "weight" => 12),
    array("name" => "Orange", "weight" => 6),
    array("name" => "Grapes", "weight" => 15)
);

function isOver10kg($weight)
{
    return $weight > 10;
}

$shippingCosts = array(
    "under_10kg" => 1,
    "over_10kg" => 2
);

foreach ($fruits as $fruit) {
    echo "Fruit: " . $fruit['name'] . ", Weight: " . $fruit['weight'] . "kg, Shipping Cost: ";
    if (isOver10kg($fruit['weight'])) {
        echo $shippingCosts['over_10kg'] . " euros\n";
    } else {
        echo $shippingCosts['under_10kg'] . " euro\n";
    }
};
echo"
"?>
<?php
//Exercise 6
//Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
//Create a for loop that iterates non-associative array using php in-built function
//that determines count of elements in the array. Create a function that doubles the integer number.
//Within the loop using php in-built function print out the double of the number value (using your custom function).
$array = array(10, 20, 30, 4.5, "hello");
function doubleInteger($num) {
    if (is_int($num)) {
        return $num * 2;
    } else {
        return $num;
    }
};
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo doubleInteger($array[$i]) . "\n";
};
echo "
"
?>