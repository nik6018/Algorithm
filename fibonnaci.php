<?php

// ==> Method 1: Using For Loops

$one = 1;
$two = 2;

//Loop to print the desired length of the fibonnacci series 
for ($i=0; $i < 10 ; $i++) { 
	echo $one."<br>";
	$one = $one + $two;
	$two = $one - $two;
	$one = $one - $two;
}

// ==> Method 2: Using Recursion

/**
*	[fib - Prints the Fibonnaci Series Recursively]
*	@author 	: FLux
*	@copyright	: PiroSoft Inc
*	@param 		: The first Number to start
*   @param 		: The Second Number to start
*	@param 		: The Length of the Fibonnaaci Series
*	@return 	: Return Empty Value after the reaching the specified length 
*
*/

function fib($one,$two,$end)
{
	if($end <= 0){
		return ;
	}
	else{
		echo "$one <br>";
		$end --;
		$one = $one + $two;
		$two = $one - $two;
		$one = $one - $two;
		fib($one,$two,$end);
	}
}

fib(1,2,10);

?>
