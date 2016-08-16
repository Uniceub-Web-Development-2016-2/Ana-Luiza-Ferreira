<?php

class Math
{
	private $number_1;
	private $number_2;

public function __construct($number_1, $number_2){

	$this->number_1 = $number_1;
	$this->number_2 = $number_2;
}

public function sumAttributes(){
return $this->number_1 + $this->number_2;

}


public function sum($number_1, $number_2){
	if($number_1 < 0 || number_2 < 0)
	return "Can not sum";

        return $number_1 +  $number_2;

}

public function sumAll($numbersArray){

	$sum =0;
	foreach($numbersArray as $number)
	{
		$sum = $sum + $number;

	}

}

}

$math = new Math(5,7);
echo $math->sumAttributes();
echo "</br>";
echo $math ->sum(-2,7);
$array = array(3, 4, 7, -9, 5, 4, 1, 23);
echo $math->sumAll($array);
