<!DOCTYPE html>
<html>
<body>

<?php
$myheroes = array ('<li>batman</li>' , '<li>superman</li>' , '<li>wonder woman</li>');
$myheroes[3] = '<li>harley quin</li>';

array_push ($myheroes, '<li>black widow</li>');

echo $myheroes[0];
echo $myheroes[1];
echo $myheroes[2];
echo $myheroes[3];
echo $myheroes[4];


?>

</body>
</html> 