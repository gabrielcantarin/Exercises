<?php

$data = [3,5,7,9,11,13,15,17,19,21,23,25,27,29];
echo '$data: ';
print_r($data);
echo '</br>';
echo '</br>';

function binarySearch($needed, array $data) {

	$elements = count($data);
	$first = 0;
	$last = $elements -1;
	$middle = (int) (($last - $first) / 2) + $first;

	while ($first <= $last) {
		if ($data[$middle] < $needed) {
			$first = $middle + 1;
		} elseif ($data[$middle] > $needed) {
			$last = $middle - 1;
		} else {
			return $middle;
		}

		$middle = (int) (($last - $first) / 2) + $first;
	
	}

	return -1;
}


echo 'After Binary: ';
print_r(binarySearch(13, $data));
echo '</br>';
?>