<?php

class Plus implements Operator{

	public function execute_operation($value1, $value2){

		$sum = $value1 + $value2;

		return $sum;

	}

}

?>