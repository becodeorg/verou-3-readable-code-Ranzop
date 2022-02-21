<?php

// This function lays the groundwork
// first some text is prepared, and it will be appended with the pizza type.
// Also, a variable is imported from another function, this variable contains the price
// finally, an algorithm will check who we are dealing with and where they are at.

function orderPizza($pizzaType, $recipient) 
{
$pizzaCost = readPizzaMenu($pizzaType);
$address = getAddress($recipient);
$message = 'Creating new order... <br> A ' .$pizzaType. 
' pizza should be sent to ' .$recipient. '. <br>
The address: '.$address.' <br>
The bill is €'.$pizzaCost.'.<br>
Order finished.<br><br>
p.s. Hawaii is not a pizza.
<hr><hr>';

echo $message;
}

// If you want to use the curly brackets, you are obliged to 
// use double quotes.

function getAddress($recipient)
{
if($recipient == 'Koen'){
    return 'a yacht in Antwerp';
} elseif ($recipient == 'Manuele'){
    return 'somewhere in Belgium';
} elseif ($recipient == 'students'){
    return 'BeCode office';
}

}

// This function will calculate the costs of the given pizza
function readPizzaMenu($pizzaType)
{
    if ($pizzaType == 'marguerita'){
        return 5;
    } else if($pizzaType == 'golden'){
        return 100;
    } else if($pizzaType == 'calzone'){
        return 10;
    } if ($pizzaType == 'hawaii'){
        throw new Exception('Computer says no');
    }
}

function orderPizzaAll()
{
orderPizza('calzone', 'Koen');
orderPizza('marguerita', 'Manuele');
orderPizza('golden', 'students');
}

orderPizzaAll();

$testArray = array(1,2,3,4,5,6,7,8,9);
print_r($testArray);

foreach ($testArray as $value) {
    $nine = $testArray[8];
}
echo "$nine <br>";


$family = array("Tom" => array("Roommate" => "Shaggy"),
                "Andy" => array("Cousins" => "Mickey",
                                "Mother" => "Sofie"),
                "Jawall" => array("Friend" => "Chucky"));



foreach($family as $key => $value){
    foreach($value as $key){
        print_r($value);
    }
    echo "$key <br>";
}