<!-- <?php
        // echo $_GET['nom'];
        // echo $_GET['age'];
        ?> -->



<?php
echo "Bonjour, " . $_GET['nom'];
?>

<?php
$color = $_GET['couleur'];
$bgstyle = "grey";

if (isset($color) && ($color == 'color-two')) {
    $bgcolor = "background-color: #4169E1;";
} else {
    $bgcolor = "background-color: #DC143C;";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style $bgstyle="<?php echo $bgcolor; ?>">

    </style>
</body>

</html>