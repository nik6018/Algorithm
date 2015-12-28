<?php

/*  
    [power : This functi]
    @author : Flux
    @param : base value
    @param : power
    @return : value after operation

*/



function power($base,$power)
{
	$result=$base;

	while ($power != 1) {
		
		$result=$result * $base;
		$power--;
	}

	return $result;
}

function power($base,$power)
{
	if ( $power == 1) {
		return $base;
	} else {
		return $base*power($base,$power-1)
	}
	
}

function power($base,$power){
     if($power == 1)
        return $base;
    if($power%2 != 0){
        return $base*$base*power($base,$power = $power - 2);
    }elseif(!($power/2 != 0)){
        return $base*power($base,$power = $power - 1);
    }   
}



// Notes :  All the new MIT method of checking the odd even power to reduce the complexity

?>
