<?php

require_once "Operation.php";
require_once "Operator.php";
require_once "Plus.php";
require_once "Times.php";

$data = array();

$data[0] = [5, "Plus", 3];
$data[1] = [2, "Times", 8];

$Operation = new Operation();

foreach ($data as $value) {

	$impress =  $Operation->dataProcess($value); 

	echo "<div>".$impress."</div>";

}



?>