<?php

class Times implements Operator{

	public function execute_operation($value1, $value2){

		$times = $value1 * $value2;

		return $times;		

	}

}

?>