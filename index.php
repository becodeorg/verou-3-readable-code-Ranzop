<?php

// This function lays the groundwork
// first some text is prepared, and it will be appended with the pizza type.
// Also, a variable is imported from another function, this variable contains the price
// finally, an algorithm will check who we are dealing with and where they are at.

function orderPizza($pizzaType, $recipient) {

echo 'Creating new order... <br> A ' .$pizzaType;
$pizzaCost = calculateCosts($pizzaType);


if($recipient == 'Koen')
{
    $address = 'a yacht in Antwerp';
} elseif ($recipient == 'Manuele')
{
    $address = 'somewhere in Belgium';
} elseif ($recipient == 'students') 
{
    $address = 'BeCode office';
}

echo ' pizza should be sent to ' . $recipient . ". <br>The address: {$address}. <br>";
echo'The bill is €'.$pizzaCost.'.<br>';
echo "Order finished.<br><br><hr><hr>";
}

// This function will calculate the costs of the given pizza
function calculateCosts($pizzaType)
{
    if ($pizzaType == 'marguerita') {
        $cost = 5;
    } else
    {
    if ($pizzaType == 'golden')
    {
        $cost = 100;
    }
    if ($pizzaType == 'calzone')
    {
        $cost = 10;
    }
    if ($pizzaType == 'hawaii') {
        throw new Exception('Computer says no');
    }
    }
return $cost;
}

function orderPizzaAll()
{
orderPizza('calzone', 'Koen');
orderPizza('marguerita', 'Manuele');
orderPizza('golden', 'students');
}

orderPizzaAll();

