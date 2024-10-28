<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\playGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';



function isEven(int $num)
{
    return $num % 2 === 0;
}



function start(): void
{
    $getNubmerAndAnswer = function (): array {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };
    playGame(DESCRIPTION, $getNubmerAndAnswer);
}