<!DOCTYPE html>
<html>
<body>

<?php
$mydognames = array ('<li>max</li>' , '<li>bailey</li>' , '<li>lola</li>');
echo $mydognames [0];
echo $mydognames [1];
echo $mydognames [2];

$mydognames[1] = '<li>luna</li>';
$mydognames[0] = '<li>leyla</li>';
$mydognames[2] = '<li>bas</li>';
echo $mydognames[1];
echo $mydognames[0];
echo $mydognames[2];
?>

</body>
</html> 