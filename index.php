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
    <title>Cupcake Fundraiser</title>
</head>
<body>
<form action="#" method="post" id="cupcakeForm">
    <h1>Cupcake Fundraiser</h1>

    <label for="name">Please Input Your Name: </label> <br>
    <input type="text" name="name" id="name">


    <br>

    <p>Cupcake Flavors</p>

    <?php

    $cupcakes = array(
            "grasshopper"=>'The Grasshopper',
            'maple'=>'Whiskey Maple Bacon',
            'carrot'=> 'Carrot Walnut',
            'caramel'=>'Salted Caramel Cupcake',
            'velvet'=>'Red Velvet',
            'lemon'=> 'Lemon Drop',
            'tiramisu' => 'Tiramisu');

    foreach ($cupcakes as $key => $value) {
        echo "<input type='checkbox' name='$key' value='$value'> $value <br>";
    }

    echo "<br><button id='order' name='order'>Order</button>";

    ?>
    

</form>

</body>
</html>
