<?php
// EXERCICE10////////////////////////////////////////////////////////////////////////////
// Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi
//  que les clés associés.
// Cela pourra être, par exemple, de la forme : 
// "Le département" + nom du département + "a le numéro" + numéro du département

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
    <?php foreach ($departement  as $numero => $nom) { ?>
        <h2>Le département <?= $nom ?> a le numéro <?= $numero ?> </h2>
    <?php } ?>
</body>

</html>