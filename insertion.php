<?php 

class Insertion
{
	public function insertionOrdering($data){
		for($i = 1; $i < count($data); $i++){
			$aux = $data[$i];
			$j = $i;
			
			while (($j > 0 ) && ($aux < $data[$j-1])){
				$data[$j] = $data[$j-1];
				$j--;
			}
			$data[$j] = $aux;
		}

		return $data;
	}
}