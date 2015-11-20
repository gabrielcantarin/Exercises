<?php

class Binary
{
	public function binarySearch($needed, array $data) {

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
}