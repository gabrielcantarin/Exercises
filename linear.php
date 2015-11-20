<?php

$data = [3,5,7,9,11,13,15,17,19,21,23,25,27,29];
echo '$data: ';
print_r($data);
echo '</br>';
echo '</br>';

function linearSearch($needed, array $data) {
     $tamanhoVetor = count($data);
     for ($i = 0; $i < $tamanhoVetor; $i++) {
         if ($data[$i] == $needed) {
             return $i;
         }
     }

     return -1;
}


echo 'After Linear Search: ';
print_r(linearSearch(15, $data));
echo '</br>';
?>