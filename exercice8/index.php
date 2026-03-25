<?php 
// EXERCICE8//////////////////////////////////////////////////////////////////////
// Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau
$tableauMonths = ["janvier","février","mars","avril","mai","juin","juillet",
"aout","septembre","octobre","novembre","décembre"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($tableauMonths as $mois) { ?>
<h2><?= $mois ?></h2>
<?php } ?>
</body>
</html>