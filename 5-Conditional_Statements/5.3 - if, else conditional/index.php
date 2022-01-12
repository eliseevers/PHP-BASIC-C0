<!DOCTYPE html>
<html>
<body>

<?php
$test1 = 3;
$test2 = 6;

if($test1 == $test2){
    echo "gelijk";
}
else{
    echo "<li>" . "ongelijk" . "</li>";
}
if($test1 != $test2){
    echo "<li>" . "ongelijk" . "</li>";
}
else{ 
    echo "<li>" . "gelijk" . "</li>";
}
if($test1 === $test2){
    echo "identiek";
}
else{ 
    echo "<li>" . "niet identiek" . "</li>";
}
if($test1 > $test2){
    echo "<li>" . "1 is groter dan 2" . "</li>";
}
else{
    echo "<li>" . "1 is kleiner dan 2" . "</li>";
}
if($test1<$test2){
    echo "<li>" . "1 is kleiner dan 2" . "</li>";

}
else {
    echo "<li>" . "1 is groter dan 2" . "</li>";
}
if($test1 >= $test2){
    echo "<li>" . "1 is groter of gelijk aan 2" . "</li>";
 }
 else{
     echo "<li>" . "1 is kleiner of gelijk aan 2" . "</li>";
 }
 if($test1 <= $test2){
     echo "<li>" . "1 is kleiner of gelijk aan 2" . "</li>";
 }
 else{
     echo "<li>" . "1 is groter of gelijk aan 2" . "</li>";
 }

?>

</body>
</html> 