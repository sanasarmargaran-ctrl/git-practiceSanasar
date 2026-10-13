<?php
require_once 'Calculator.php';
$calc = new Calculator();
echo $calc->add(10, 5) . "\n";
echo $calc->divide(10, 0) . "\n";
