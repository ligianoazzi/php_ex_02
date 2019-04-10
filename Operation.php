<?php

class Operation{

	public function dataProcess($data){

			$type_operation = new $data[1]();

			return $type_operation->execute_operation($data[0], $data[2]);

	}

}

?>