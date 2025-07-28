<pre>
    <?php
// 1 la connection
$database = new PDO("mysql:host=127.0.0.1;dbname=app-database","root","root");
// 2 la requete
$requete = $database->prepare("SELECT * FROM product");
$requete->execute();
// 3 la reponse
$produit = $requete->fetchAll( PDO::FETCH_ASSOC);
// var_dump($produit);
?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Produit vendu du jour : </h2>
    <div>
        <?php foreach ($produit as $prod): ?>
            <p> <?= $prod["name"] ?>  </p>
            <p> <?= $prod["price"] ?>  </p>
        <?php endforeach; ?>
    </div>
</body>
</html>