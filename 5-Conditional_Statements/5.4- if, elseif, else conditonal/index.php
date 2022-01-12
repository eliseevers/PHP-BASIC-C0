<!DOCTYPE html>
<html>
<body>

<?php
$prod_besteld = 12;
$prod_besteld1 = 9;
$prod_besteld2= 21;
if($prod_besteld < 10){
    echo $prijs= 1.50;
}
elseif($prod_besteld < 20){
    echo $prijs = 1.25;
}
else{
    echo $prijs = 1.00;
}



?>

</body>
</html> 