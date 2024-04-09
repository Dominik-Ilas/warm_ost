<?php
$servername = "localhost";
$dbname = "dominko_sk";
$username = "dominko_sk2";
$password = "Dominik123";

echo "pripaja sa ...";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection- >connect_error) {
die("Chyba pripojenie k db: " . $connection- >connect_error);
}
echo " |Connected|" . "< br / >";
echo "< br / >";

$sql = "SELECT * FROM t_shop";

$vysledok = $connection- >query($sql);

$pocet = $vysledok- >num_rows;
echo "Pocet riadkov == " . $pocet . "< br / >";
echo "< br / >";

if ($pocet >0){
while($riadok = $vysledok- >fetch_assoc() ){
echo $riadok['id'] . "\t";
echo $riadok['name'] . "\t";
echo $riadok['description'] . "\t";
echo $riadok['price'] . "\t";
echo $riadok['img'] . "< br / >";
}
}
?>