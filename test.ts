

/**
Write a program that prints all the numbers from 1 to 100. 
However, for multiples of 3, instead of the number, print "Linio".
For multiples of 5 print "IT". 
For numbers which are multiples of both 3 and 5, print "Linianos". **/

init();

function init(){
	for (let i = 1; i <= 100; ++i) {
		if(modulus(i,3) && modulus(i,5))
			console.log(i,'---> Linianos');
		else if(modulus(i,5))
			console.log(i,'---> IT');
		else if(modulus(i,3))
			console.log(i,'---> Linio');
		else
			console.log(i);
	}
}


function modulus(a:number,modulus:number){
	if(a%modulus===0)
		return true;
	else
		return false;
}









