<?php
require 'database.php';

$id = $_GET["id"];

$sql = "SELECT * from tools Where tool_id = $id";

$result = mysqli_query($conn, $sql);

$tool = mysqli_fetch_assoc($result);
?>

<h1><?php echo $tool["tool_name"] ?></h1>
<p> <?php echo $tool["tool_category"] ?></p>
<p> <?php echo $tool["tool_price"] ?></p>
<p> <?php echo $tool["tool_brand"] ?></p>