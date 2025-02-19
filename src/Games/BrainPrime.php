<?php

namespace BrainGames\Games\BrainPrime;

use function BrainGames\Engine\runGame;

function isPrime(int $number): bool

{

    if ($number <= 1) {

        return false;

    }

    for ($i = 2; $i <= sqrt($number); $i++) {

        if ($number % $i == 0) {

            return false;

        }

    }

    return true;

}

function brainPrime(): void

{

    $description = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";

    $getQuestionAnswer = function (): array {

        $number = rand(1, 30);

        $correctAnswer = isPrime($number) ? 'yes' : 'no';

        return [(string)$number, $correctAnswer];

    };

    runGame($description, $getQuestionAnswer);

}