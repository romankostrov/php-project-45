<?php

namespace BrainGames\Games\BrainGcd;

use function BrainGames\Engine\runGame;

function gcd(int $a, int $b): int
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function runBrainGcd(): void
{
    $description = "Find the greatest common divisor of given numbers.";
    $getQuestionAnswer = function (): array {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $correctAnswer = (string)gcd($num1, $num2);
        return ["{$num1} {$num2}", $correctAnswer];
    };
    runGame($description, $getQuestionAnswer);
}
