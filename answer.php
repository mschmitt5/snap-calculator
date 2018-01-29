<?php
/**
 * Created by PhpStorm.
 * User: schmi
 * Date: 1/29/2018
 * Time: 8:34 AM
 **/

function add(float $first, float $second) : float {
    return($first + $second);
}

function subtract(float $minuend, float $subtrahend) : float {
    return($minuend - $subtrahend);
}

function multiply(float $first, float $second) : float {
    return($first * $second);
}

function divide(float $dividend, float $divisor) : float {
    return($dividend / $divisor);
}

function main(float $first, float $second) : void {
    echo "Addition:" . add($first, $second) . PHP_EOL;
    echo "Subtraction:" . subtract($first, $second) . PHP_EOL;
    echo "Multiplication:" . multiply($first, $second) . PHP_EOL;
    echo "Division:" . divide($first, $second) . PHP_EOL;
}

main(42, 5);