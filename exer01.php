<?php 

/*
    The text here was remove
    HELLO WORLD!
    This is just a simple exercises.
	write a function, that check if a number container a sorted array
*/

// Function that returns true if array is
// sorted in non-decreasing order.
function arraySortedOrNot($arr = array())
{
    // Array has one or no element
	//	return true;
	if(count($arr) > 0){
		for ($i = 1; $i < count($arr); $i++){
	
			// Unsorted pair found
			if ($arr[$i-1] > $arr[$i]){
				return false;
			}
		}
		// No unsorted pair found
		return true;
	
	}
}

function c_is_array($arr){
	return (gettype($arr) == 'array') ? true:false;
}

function c_is_empty($arr = array()){
	if(c_is_array($arr)){
		return ($arr == null || $arr == 0 || $arr == '') ? true:false;
	}
	return 'This is not an array, it is a '.gettype($arr);
}

function remove_duplicate($arr = array()){
	
	$new_arr = array();
	foreach($arr as $key => $val){
		$new_arr[$val] = '';
	}
	return array_keys($new_arr);
}

function my_shuffle($arr = array()){
	return $arr[mt_rand(0, count($arr) - 1)];
}

$arr = array('lloyd','kr','bingol','cartoons','korn');

echo '<pre>' . print_r(my_shuffle($arr), true) . '</pre>';


