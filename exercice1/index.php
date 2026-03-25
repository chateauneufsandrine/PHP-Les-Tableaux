<?php 
// EXERCICE1/////////////////////////////////////////////////////////////////////
// Créer un tableau months et l'initialiser avec les valeurs suivantes :

// janvier
// février
// mars
// avril
// mai
// juin
// juillet
// aout
// septembre
// octobre
// novembre
// décembre
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