<?php

$mas = array ("Danils", "Maksims", "Janis", "Aleksejs", "Rolands", "Kirils", "Taison", "Mopsis", "Stanislavs", "Jake"); 

echo "Visi vardi: <br>";

for($i=0; $i < sizeof($mas); $i++) {
    echo "$mas[$i] ";
}

echo "<br><br>";

function filter ($x) {
	if (strlen($x) > 6) {
		echo "$x ";
	}
}

echo "Vārdi garāki, nekā 6 simboli: <br>";	

for($i=0; $i < sizeof($mas); $i++) {
	$x = $mas[$i] ;
	filter($x);
}

 ?>