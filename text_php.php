<?php 
/*----------
Write a program that prints all the numbers from 1 to 100. 
However, for multiples of 3, instead of the number, print "Linio".
For multiples of 5 print "IT". 
For numbers which are multiples of both 3 and 5, print "Linianos".
  ----------*/

	for($x=1; $x<=100; $x++) {
		if(modulus($x,3)&&modulus($x,5))
		 	echo "$x ---> Linianos \n";
		elseif(modulus($x,3))
			echo "$x ---> Linio \n";
		elseif(modulus($x,5))
			echo "$x ---> IT \n";
		else
			echo "$x \n";
	}

	function modulus($a,$b){
		if($a % $b==0)
			return true;
		else
			return false;
	}
 ?>