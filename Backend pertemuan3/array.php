<?php

# Membuat Array
$animals = ['Kucing', 'Burung Hantu', 'Ikan'];

# Mengakses Array
echo $animals[2];
echo "<br>";
echo array_search('Kucing', $animals);
echo "<br>";
for ($i = 0; $i < count($animals); $i++) {
    if ('Kucing' == $animals[$i]) {
        echo $i;
    }
}