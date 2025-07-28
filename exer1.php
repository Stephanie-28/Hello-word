<?php 
session_start();

$name = $_POST["first_name"];
$color = $_POST["color"];

$_SESSION["first_name"] = "name";
$_SESSION["favarite_color"] = "color";

echo"Vous vous appellez: $name"  .  " Et votre couleur préfére est: $color";
?>
