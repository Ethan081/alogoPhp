<?php
$nombre = 200;
// if ($nombre % 2 == 0) {
//     echo 'Se nombre est Pair';
// } else {
//     echo 'Se nombre est Impair';
// }

function EstPair($nombre){
    if ($nombre % 2 == 0) {
        return $nombre .' est Pair';
    } else {
        return $nombre .' est Impair';
    }
}

echo EstPair($nombre);


?>