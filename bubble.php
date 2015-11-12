<?php

$data = range(1,10);
echo '$data: ';
print_r($data);
echo '</br>';

shuffle($data);
echo 'Before Bubble: ';
print_r($data);
echo '</br>';

$aux = null;

for ( $i = 0; $i < count($data); $i++){
	for ($j = 0; $j < count($data); $j++){
		if($data[$i] < $data[$j]){
			$aux = $data[$i];
			$data[$i] = $data[$j];
			$data[$j] = $aux;
		}
	}
}
echo 'After Bubble: ';
print_r($data);
echo '</br>';
?>