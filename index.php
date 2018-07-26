<?php

//Créer une variable et l'initialiser à 0.
//Tant que cette variable n'atteint pas 10, il faut :
//l'afficher
//l'incrementer

$var = 0;
for($var = 0; $var <= 10; $var++) {
    echo "Correction erreur";
}

echo "<br><br>";

//Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
//Tant que la première variable n'est pas supérieure à 20 :
//multiplier la première variable avec la deuxième
//afficher le résultat
//incrementer la première variable

$var1 = 0;
$var2 = 42;
for($var1 = 0; $var1 < 20; $var1++) {
    echo $result = $var1 * $var2 . " ";
}

echo "<br><br>";

//Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
//Tant que la première variable n'est pas inférieure ou égale à 10 :
//multiplier la première variable avec la deuxième
//afficher le résultat
//décrémenter la première variable

$var3 = 100;
$var4 = 42;
for($var3 = 100; $var3 >= 10; $var3--) {
    echo $result = $var3 * $var4 . " ";
}

echo "<br><br>";

//Créer une variable et l'initialiser à 1.
//Tant que cette variable n'atteint pas 10, il faut :
//l'afficher
//l'incrementer de la moitié de sa valeur

for($var5 = 1; $var5 < 10;) {
    echo $var5 . " ";
    $var5 = $var5 + ($var5 / 2);
}

echo "<br><br>";

//En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.

for($var6 = 1; $var6 <=15; $var6++) {
    echo "On y est presque. <br>";
}

echo "<br><br>";

//En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.

for ($var7 = 20; $var7 >= 0; $var7--) {
    echo "C'est presque bon." ."<br>";
}

echo "<br><br>";

//En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.

for ($var8 = 1; $var8 <= 100; $var8 += 15) {
    echo "On tient le bon bout." ."<br>";
}

echo "<br><br>";

//En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.

for ($var9 = 200; $var9 >= 0; $var9 -= 12) {
    echo "Enfin !!!!" ."<br>";
}
