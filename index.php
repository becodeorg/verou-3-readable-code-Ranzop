<?php

// This function will find the appropriate pizza type, and a recipient for that pizza;

function orderPizza($pizzaType, $recipient) {

$type = $pizzaType;
echo 'Creating new order... <br>';
$toPrint = 'A ';
$toPrint .= $pizzaType;
$pizzaCost = calculateCosts($type);


$address = 'unknown';

if($recipient == 'Koen')
{
    $address = 'a yacht in Antwerp';
} elseif ($recipient == 'manuele')
{
    $address = 'somewhere in Belgium';
} elseif ($recipient == 'students') 
{
    $address = 'BeCode office';
}

$toPrint .=   ' pizza should be sent to ' . $recipient . ". <br>The address: {$address}.";
echo $toPrint; echo '<br>';
echo'The bill is €'.$pizzaCost.'.<br>';
echo "Order finished.<br><br>";
}

// This function will calculate the costs of the given pizza
function calculateCosts($pizzaType)
{
$cost = 'unknown';
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



function order_pizza_all()
{
orderPizza('calzone', 'koen');
orderPizza('marguerita', 'manuele');
orderPizza('golden', 'students');
}

function make_Allhappy($do_it) {
    if ($do_it) 
    {
    order_pizza_all();
    } else 
    {
    }
}

make_Allhappy(true);

/* require "index.php"; */