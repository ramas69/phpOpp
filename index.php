<?php

require("Client.php");

$bloup = new Client("Ariel", " Jonas", "1 avenue personne Lyon");
$bloup->setPrenom("Emilie");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Prenom: <?php echo $bloup->getNom()  ?> </h4>
    <h4>Nom: <?php echo $bloup->getPrenom()  ?></h4>
    <h4>Adresse : <?php echo $bloup->getCoordonnee() ?> </h4>
</body>
</html>