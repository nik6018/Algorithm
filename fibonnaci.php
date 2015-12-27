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
