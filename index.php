<?php
require("Personne.php");
require("Client.php");
require("Electeur.php");

$bloup = new Client("Ariel", " Jonas", "1 avenue personne Lyon");
$floup = new Electeur($bloup->getNom(),$bloup->getPrenom(),"Lyon",False );
$floup->aVote();




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
    <p>Prenom: <?php echo $bloup->getNom()  ?> </p>
    <p>Nom: <?php echo $bloup->getPrenom()  ?></p>
    <p>Adresse : <?php echo $bloup->getCoordonnee() ?> </p>
    <p>Vote : <?php  $floup->isVoter();  ?></p>
</body>
</html>