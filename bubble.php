<?php

class Bubble
{
	public function bubbleOrdering($data){
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

		return $data;
	}
}

?>