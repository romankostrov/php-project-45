<?php

namespace BrainGames\Games\BrainProgression;

use function BrainGames\Engine\runGame;

function generateProgression(int $length): array

{

    $start = rand(1, 20);

    $step = rand(1, 5);

    $progression = [];

    for ($i = 0; $i < $length; $i++) {

        $progression[] = $start + $i * $step;

    }

    return $progression;

}

function brainProgression(): void

{

    $description = "What number is missing in the progression?";

    $getQuestionAnswer = function (): array {

        $progression = generateProgression(rand(5, 10));

        $hiddenIndex = array_rand($progression);

        $hiddenValue = $progression[$hiddenIndex];

        $progression[$hiddenIndex] = '..';

        $question = implode(' ', $progression);

        return [$question, (string)$hiddenValue];

    };

    runGame($description, $getQuestionAnswer);

}
