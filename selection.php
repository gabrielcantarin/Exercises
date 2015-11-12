<?php
$data = range(1,10);
echo '$data: ';
print_r($data);
echo '</br>';

shuffle($data);
echo 'Before Selection: ';
print_r($data);
echo '</br>';

for ($i = 0; $i < count($data); $i++) {
	$minor = $i;
	for ($j = $i + 1; $j < count($data); $j++) {
		if ($data[$j] < $data[$minor]) {
			$minor = $j;
		}
	}
	
	if ($minor != $i) {
		$aux = $data[$i];
		$data[$i] = $data[$minor];
		$data[$minor] = $aux;
	}
}

echo 'After Selection: ';
print_r($data);
?>