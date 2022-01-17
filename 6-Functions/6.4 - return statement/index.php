<!DOCTYPE html>
<html>
<body>

<?php
function geefTienProcent(){
    $koopprijs = 75;
    $korting = 10;
    $totaal = 100;
    return ($koopprijs/$totaal)*$korting;
}

function toonScherm(){
    $koopprijs = 75;
    $totaalkorting= $koopprijs-geefTienProcent();
    echo "Het totaalbedrag is $totaalkorting";
}

toonScherm()



?>

</body>
</html> 