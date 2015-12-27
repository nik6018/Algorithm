<?php

//////////////////////////////////////////////
//											//
//  Title :      Sorting Alogrithms         //
//    										//
//  Started by : Flux						//
//    										//
//  Time : 		 10:10 hrs					//
//                                          //
//  Editor : 	 Sublime Text               //
//                                          //
//  MOTIVATED by the PAIN of REJECTION  	//
//											//
//////////////////////////////////////////////

$array_to_sort = [27,1324,12,354,321,480,660,343,123,43,13,3,13,1,32];

///////////////
//Bubble Sort//
///////////////

/**
*	[Bubble Sort]
*	@author 	: FLux
*	@copyright	: PiroSoft Inc
*   @version    : 0.10 (Beta)
*	@param 		: The array to sort
*	@return 	: Sorted array
*/

function bubble_sort($array_to_sort = '')
{
	if ((is_array($array_to_sort) && count($array_to_sort) > 1)){
		for ($i = 0; $i < count($array_to_sort) ; $i++) { 
			for ($j = $i; $j < count($array_to_sort) ; $j++) { 
				if ($array_to_sort[$i] > $array_to_sort[$j]){
					$array_to_sort[$i] = $array_to_sort[$i] + $array_to_sort[$j];
					$array_to_sort[$j] = $array_to_sort[$i] - $array_to_sort[$j];
					$array_to_sort[$i] = $array_to_sort[$i] - $array_to_sort[$j];
				}
			}
		}
		return $array_to_sort;	
	}else{
		return "Pass an Valid input (only array() with size greater than 2)";
	}
}

r_print(bubble_sort($array_to_sort));


//////////////////
//Insertion Sort//
//////////////////

/**
*	[Insertion Sort]
*	@author 	: FLux
*	@copyright	: PiroSoft Inc
*   @version    : 0.5 (pre Alpha)
*	@param 		: The array to sort
*	@return 	: Sorted array
*/

function insertion_sort($array_to_sort='')
{
	$s=[];
	
	for($i=0;$i< count($array_to_sort);$i++){

		if(count($s)==0){

			array_push($s,$array_to_sort[$i]);
			continue;

		}
		else{

			$flag=false;
			for($j=count($s)-1;$j>=0;$j--){
				
				if($array_to_sort[$i]<$s[$j]){

				    $temp=$s[$j];
				    $s[$j]=$array_to_sort[$i];
					$s[$j+1]=$temp;
					$flag=true;

				}
				else{

					if(!$flag){

						array_push($s,$array_to_sort[$i]);
						break;
					
					}
					
				}
			
			}
			
		}	

	}
}


r_print(insertion_sort($array_to_sort));


//////////////
//Merge Sort//
//////////////

/**
*	[Merge Sort]
*	@author 	: FLux
*	@copyright	: PiroSoft Inc
*   @version    : 0.6 (alpha)
*	@param 		: The array to sort
*	@return 	: Sorted array
*/

function merge_sort($array_to_sort = '')
{
	if(count($array_to_sort) == 1){

		return $array_to_sort;

	}else{
		$sp = count($array_to_sort)/2;
		$sp = floor($sp);
		$left = array_slice($array_to_sort,0,$sp);
		$right = array_slice($array_to_sort,$sp);
		$left = ms($left);
		$right = ms($right);
		$result = merge($left,$right);
		return $result;
	}
}

function merge($left,$right)
{      
     $ra=[]; 
     $i = 0;
     $j = 0;
     $left_put = false;
     $right_put = false;
     while(true){
        if($i == count($left)){
            $right_put = true;
            break;
        }
        if($j == count($right)){
            $left_put = true;
            break;
        }
        if($left[$i]>$right[$j]){
            array_push($ra,$right[$j]);
            $j++;
        }
        else{
            array_push($ra,$left[$i]);
            $i++;
        }  
    }
    if($left_put){
        for(;$i < count($left);$i++){
            array_push($ra,$left[$i]);
        }
    }
    if($right_put){
        for(;$j < count($right);$j++){
            array_push($ra,$right[$j]);
        }
    }
     
   return $ra;
}


r_print(merge_sort($array_to_sort));


///////////////
//Quick Sort//
///////////////

/**
*	[Quick Sort]
*	@author 	: FLux
*	@copyright	: PiroSoft Inc
*   @version    : 0.5 (pre Alpha)
*	@param 		: array to sort
*	@param 		: lower bound of the array
*	@param 		: higher bound of the array
*	@return 	: Sorted array
*/


function qs($a, $low, $high)
{
	
	if($low == $high || $low > $high) {
		return $a;
	}else{
		$flag1 = false;
		$flag2 = false;
		$pivot = $a[$low];
		
		for ($i = $low + 1 , $j = $high;;) { 
			if($j<$i)
				break;
			if($flag1 == true && $flag2 == true ) {
				$temp = $a[$i];
				$a[$i] = $a[$j];
				$a[$j] = $temp;
				$i++;
				$j--;
				$flag1 = false;
				$flag2 = false;
				
			}else{
				if ($a[$i] < $pivot && $flag1 == false) {
					$i++;
				}else{
					$flag1 = true;
				}
				if ($a[$j] > $pivot && $flag2 == false) {
					$j--;
				}else{
					$flag2 = true;
				}
			}
		}
		
		$temp = $a[$low];
		$a[$low] = $a[$i-1];
		$a[$i-1] = $temp;
		$a = qs($a, $low, $i-1);
		$a = qs($a, $i, $high);
		return $a;
	}
	
}

r_print($array_to_sort);


////////////////
//Pretty Print//
////////////////

/**
*	[ Pretty Prints the array]
*	@author 	: Alons , FLux
*	@copyright	: Softaculous 
*	@param 		: Array to display
*	@return 	: Pretty printed array
*/

function r_print($data = '')
{
	if (empty($data)) {
		return '';
	}else{
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
	
}



?>
