<?php 
// EXERCICE6////////////////////////////////////////////////////
// Avec le tableau de l'exercice 5, afficher la valeur de l'index 59

$departement = [
   02 => "Aisne",  
   59 => "Nord", 
   60 => "Oise",
   62 => "Pas-de-Calais", 
   80 => "Somme"
   ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?= $departement [59] ?></h2>
</body>
</html>