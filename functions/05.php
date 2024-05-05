<?php
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
}