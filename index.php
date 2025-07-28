
<!-- <a href="bonjour.php?nom=Luana">Voir profil</a>

<a href="bonjour.php?couleur=rouge">color-one</a>
<a href="bonjour.php?couleur=bleu">color-two</a>
<a href="bonjour.php?couleur=vert">color-three</a> -->


<!-- <a href="session.php">page</a> -->

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/exer1.php" method="post">
    <input type="text" name="first_name" >
    <input type="text" name="color">
    <input type="submit" value="envoyer">
    </form>
</body>
</html>