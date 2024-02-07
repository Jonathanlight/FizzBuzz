<?php

require('FizzBuzz.php');

$fizzBuzz = new FizzBuzz(30);
$output = $fizzBuzz->generateResponse();

foreach ($output as $value) {
    echo $value . PHP_EOL;
}

