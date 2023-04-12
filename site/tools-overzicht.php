<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM tools";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn,$sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_tools = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Catogory</th>
            <th>Price</th>
            <th>Brand</th>
        </tr>
        <?php foreach($all_tools as $tool): ?>
        <tr>
            <td> <?php echo $tool["tool_name"] ?></td>
            <td> <?php echo $tool["tool_category"] ?></td>
            <td> <?php echo $tool["tool_price"] ?></td>
            <td> <?php echo $tool["tool_brand"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>