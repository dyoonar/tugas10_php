<?php
$arr = array(1,3,8,2,5,7,4,0);
print("Sebelum Di Sorting :<br>");
print_r($arr);
$arr = bubble_sort($arr);
print("<br> Setelah Disorting (Buble Sort) :<br>");
print_r($arr);
function bubble_sort($arr){
	$length = count($arr);
  	$comparisons  = 0;

  	for ( $i = 0; $i < $length; $i++ ) {
    	for ( $j=0; $j<$length-1; $j++ ) {
      		$comparisons++;
      		if ( $arr[$j] > $arr[$j+1]) {
        		$tmp = $arr[$j+1];
        		$arr[$j+1] = $arr[$j];
        		$arr[$j] = $tmp;
      		}
    	}
  	}
  	return $arr;
}

?>