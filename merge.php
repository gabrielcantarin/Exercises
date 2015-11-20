<?php 

class Merge
{
    public function mergeOrdering($data) {
        if(count($data)>1) {
            
            $data_middle = round(count($data)/2, 0, PHP_ROUND_HALF_DOWN);
            $data_part1 = $this->mergeOrdering(array_slice($data, 0, $data_middle));
            $data_part2 = $this->mergeOrdering(array_slice($data, $data_middle, count($data)));
            $aux1 = $aux2 = 0;
            
            for ($i=0; $i<count($data); $i++) {
                if($aux1 == count($data_part1)) {
                    $data[$i] = $data_part2[$aux2];
                    ++$aux2;
                } elseif (($aux2 == count($data_part2)) or ($data_part1[$aux1] < $data_part2[$aux2])) { 
                    $data[$i] = $data_part1[$aux1];
                    ++$aux1;
                } else {
                    $data[$i] = $data_part2[$aux2];
                    ++$aux2;
                }
            }
        }

        return $data;
    }
}
?>