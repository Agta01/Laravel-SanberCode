<?php
require_once('Animal.php');
require_once('Frog.php');
require_once('Ape.php');

$sheep = new Animal("shaun");
echo "Name: ". $sheep->name; // "shaun"
echo "<br>";
echo "Legs : ". $sheep->legs; // 4
echo "<br>";
echo "Cold Blooded: " . $sheep->cold_blooded; // "no"
echo "<br><br>";

$kodok = new Frog("buduk");
echo "Name: ". $kodok->name; // "buduk"
echo "<br>";
echo "Legs : ". $kodok->legs; // 4
echo "<br>";
echo "Cold Blooded: " . $kodok->cold_blooded; // "no"
echo "<br>";
echo "Jump: " . $kodok->jump(); // "hop hop"
echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Name: ". $sungokong->name; // "kera sakti"
echo "<br>";
echo "Legs : ". $sungokong->legs; // 2
echo "<br>";
echo "Cold Blooded: " . $sungokong->cold_blooded; // "no"
echo "<br>";
echo "Yell: " . $sungokong->yell(); // "Auooo"
echo "<br>";


?>
