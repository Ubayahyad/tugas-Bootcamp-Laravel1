<?php
	$arr = array(1,2,3,4,5);
	$inc = 0;

	foreach($arr as $value) {
    $inc += $value;
    echo "array ke => $value <br>";
	} 
  echo "jumlah total: $inc";
?>