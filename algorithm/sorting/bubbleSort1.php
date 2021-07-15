<?php


$bubbleSort=function(array $arr):array{

    $count =0;
    $len=count($arr);
    $position =$len -1;
    
    for($i=0;$i<$len;$i++){
        $swap=FALSE;
        $newPosition=0;
        for($j=0; $j< $position; $j++){
            $count++; 

            if($arr[$j] > $arr[$j+1]){
                $temp=$arr[$j+1];
                $arr[$j+1] =$arr[$j];
                $arr[$j]=$temp;
                $swap=TRUE;
                $newPosition=$j;
            }
        }
            $position=$newPosition;
            if(!$swap)
            break;
    }
        echo "Total operations: ".$count."\n ";
        return $arr;



};


$arr=[15,12,19,20,82,21,4,5,87,42,45];
$sortedArray =$bubbleSort($arr);
print_r($sortedArray);