<?php

  //  here we use anonymous function to sort array
    $bubbleSort=function(array $arr):array{

      $count =0;
      $len =count($arr);

      for($i=0;$i<$len ;$i++){
        for($j=0;$j<$len -1;$j++){
          $count++;
              if($arr[$j]>$arr[$j+1]){
                  $temp=$arr[$j+1];
                  $arr[$j+1]=$arr[$j];
                  $arr[$j] =$temp;

              }
        }
      }

      echo "Total operations : ".$count."\n";
      return $arr;


    };

    $arr = [15,1,3,43,8,9,5,37,24,07];

    $sortedArray =$bubbleSort($arr);

   print_r($sortedArray);

   //echo implode(",",$sortedArray);



    ?>