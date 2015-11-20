<?php

class Selection
{
	public function selectionOrdering($data){
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

		return $data;
	}

}

?>