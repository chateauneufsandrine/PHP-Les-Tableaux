<?php 
// EXERCICE7///////////////////////////////////////////////////////////
// Avec le tableau de l'exercice 5, ajouter la ligne correspondant 
// au département de la ville de Reims

$departement = [
   02 => "Aisne",
   51 => "Marne",  
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
    <?php foreach ($departement  as $numero => $nom) { ?>
<h2><?= $numero ?> - <?= $nom ?></h2>
<?php } ?>
</body>
</html>