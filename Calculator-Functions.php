<?php
/**
 * Created by PhpStorm.
 * User: schmi
 * Date: 1/29/2018
 * Time: 8:06 AM
 **/

/**
 * this will create a function to add numbers input into the calculator
 **/
function addNumbers (float $first, float $second) : float {
    $answer = $first + $second;
    return($answer);
}

$first = 5;
$second = 8.9;
//echo addNumbers($first, $second) . PHP_EOL;

/**
 * this will create a function to subtract numbers input into the calculator
 **/
function subtractNumbers (float $first, float $second) : float {
    $answer = $first - $second;
    return($answer);
}

//echo subtractNumbers($first, $second) . PHP_EOL;

/**
 * this will create a function to multiply numbers input into the calculator
 **/
function multiplyNumbers (float $first, float $second) : float {
    $answer = $first * $second;
    return($answer);
}

//echo divideNumbers($first, $second) . PHP_EOL;

/**
 * this will create a function to multiply numbers input into the calculator
 **/
function divideNumbers (float $first, float $second) : float {
    $answer = $first / $second;
    return($answer);
}

//echo divideNumbers($first, $second) . PHP_EOL;

function calculator() : float
{
    $add = addNumbers();
    $subtract = subtractNumbers();
    $multiply = multiplyNumbers();
    $divide = divideNumbers();

    if ($add !== null) {
        return $add;
//    } else {
//        if ($subtract !== null) {
//            return $subtract;
//        } else {
//            if ($multiply !== null) {
//                return $multiply;
//            } else {
//                if ($divide !== null) {
//                    return $divide;
//                }
//            }
//        }
//    }

    }
}

echo calculator($first, $second);

