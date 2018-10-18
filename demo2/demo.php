<?php
	$num = 0;
	for ($i=100; $i < 1000 ; $i++) { 
		$arr = str_split($i);
		// var_dump($arr);die;
		$sum = pow($arr['0'],3)+pow($arr['1'],3)+pow($arr['2'],3);
		// var_dump($sum);die;
		if ($i==$sum) {
			$num+=1;
			echo $i.'/';
		}
	}

	var_dump($num);die;
