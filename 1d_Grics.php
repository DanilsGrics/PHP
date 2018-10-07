<?php

$mas = array ("cat","dog","horse", "duck", "pony", "tiger", "lion", "elephant", "cheetah", "leopard", "bug", "frog"); 

echo "Masivs ar 'for': <br>";

for($i=0; $i < sizeof($mas); $i++) {
    echo "$mas[$i] ";
}

echo "<br><br>";

echo "Masivs ar 'foreach': <br>";

foreach ($mas as $value) {
    echo "$value ";
} 

echo "<br><br>";

echo "Masivs ar 'while': <br>";

$i = 0; 

while($i < sizeof($mas)) {
    echo "$mas[$i] ";
    $i++;
} 

echo "<br>";

 ?>