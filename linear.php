<?php

class Linear 
{
	function linearSearch($needed, array $data) {
	    $tamanhoVetor = count($data);
	    for ($i = 0; $i < $tamanhoVetor; $i++) {
	        if ($data[$i] == $needed) {
	            return $i;
	        }
	    }

	    return -1;
	}
}