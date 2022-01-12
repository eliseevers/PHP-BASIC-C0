<!DOCTYPE html>
<html>
<body>

<?php
$test1 = 10;
$test2 = 6;

if($test1 == $test2){
    echo "gelijk";
}
if($test1 != $test2){
    echo "<li>" . "ongelijk" . "</li>";
}
if($test1 === $test2){
    echo "identiek";
}
if($test1 > $test2){
    echo "<li>" . "1 is groter dan 2" . "</li>";
}
if($test1<$test2){
    echo "<li>" . "1 is kleiner dan 2" . "</li>";

}
if($test1 >= $test2){
    echo "<li>" . "1 is groter of gelijk aan 2" . "</li>";
 }
 if($test1 <= $test2){
     echo "li" . "1 is kleiner of gelijk aan 2" . "</li>";
 }

?>

</body>
</html> 