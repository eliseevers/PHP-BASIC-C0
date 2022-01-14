<!DOCTYPE html>
<html>
<body>

<?php
function mijnNaamisGroot(){
    $voornaam = "Elise";
    $achternaam = "Evers";
    $gehelenaam = "Mijn naam is $voornaam $achternaam";
    strtoupper($gehelenaam);
    echo $gehelenaam;
}
mijnNaamisGroot();


?>

</body>
</html> 