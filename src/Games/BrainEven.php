<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\Engine\runGame;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function brainEven(): void
{
    $description = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    $getQuestionAnswer = function (): array {
        $number = rand(1, 100);
        $correctAnswer = isEven($number) ? 'yes' : 'no';

        return [(string)$number, $correctAnswer];
    };
    runGame($description, $getQuestionAnswer);
}
