<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
<?php

$isValid = true;

//Validating name
if (!empty($_POST['name'])) {
    $first = trim($_POST['name']);
    echo "Thank you, ".$first.", for your order!";
} else {
    echo '<p>Please enter name.</p>';
    $isValid = false;
    echo"<p><a href='./index.php'>GO Back to order Form.</a></p>";
}

$cupcakes = array(
    "grasshopper"=>'The Grasshopper',
    'maple'=>'Whiskey Maple Bacon',
    'carrot'=> 'Carrot Walnut',
    'caramel'=>'Salted Caramel Cupcake',
    'velvet'=>'Red Velvet',
    'lemon'=> 'Lemon Drop',
    'tiramisu' => 'Tiramisu');

$selectedCupcakes = array();

foreach ($cupcakes as $key => $value) {
    if (isset($_POST[$key])) {
        array_push($selectedCupcakes, $value);

    }
}
if (empty($selectedCupcakes)) {
    echo '<p>You did not select any cupcakes.</p>';
    $isValid = false;
    echo"<p><a href='./index.php'>GO Back to order Form.</a></p>";
} else {
    echo "<p>Order Summary: </p>";
    echo "<ul>";
    foreach ($selectedCupcakes as $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";

    //Total Calculation
    $total = count($selectedCupcakes) * 3.5;

    echo "<p>Order Total: $".$total."</p>";


}


?>
</body>
</html>
