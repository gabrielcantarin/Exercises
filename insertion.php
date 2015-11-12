<?php 

$data = range(1,10);
echo '$data: ';
print_r($data);
echo '</br>';

shuffle($data);
echo 'Before Insertion: ';
print_r($data);
echo '</br>';

for($i = 1; $i < count($data); $i++){
	$aux = $data[$i];
	$j = $i;
	
	while (($j > 0 ) && ($aux < $data[$j-1])){
		$data[$j] = $data[$j-1];
		$j--;
	}
	$data[$j] = $aux;
}

echo 'After Insertion: ';
print_r($data);