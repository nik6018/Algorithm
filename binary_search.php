<?php

//////////////////////////////////////////////
//											//
//  Title :      Binary Search 		        //
//    										//
//  Started by : Flux						//
//    										//
//  Time : 		 15:55 hrs					//
//                                          //
//  Editor : 	 PHP Fiddle               	//
//  	                                    //
//	Version :    0.5 (pre Alpha)            //
//                                          //
//  INSPIRED by the MAGIC of DS  			//
//											//
//////////////////////////////////////////////


	
	function bs($a,$val,$first,$last)
	{
		echo "$first<br>";
		echo "$last..<br>";
		
		if($last - $first < 2){
			if ($a[$last] == $val ){
				echo "found at $last";
				return;
			}elseif ($a[$first] == $val){
				echo "found at $first";
				return;
			}
				
		}

		$midpoint = floor(($last + $first)/2);
		
		if($a[$midpoint] == $val) {
			echo "found at a midpoint $midpoint gotta go to vegas<br>";
			return;
		}
			

		if ($val > $midpoint) {
			bs($a, $val, $midpoint +1, $last);
		} else {
			bs($a, $val, $first, $midpoint - 1);
		}
	}

	$a = [1,2,3,4,5,6,7,8,9];
	echo bs($a,5,0, count($a)-1);
?>
