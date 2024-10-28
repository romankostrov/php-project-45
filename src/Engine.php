<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const GAME_ROUNDS = 3;



function playGame(string $description, callable $getRoundData)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("$description\n");

    for ($i = 1; $i <= GAME_ROUNDS; $i++) {
        [$question, $correctAnswer] = $getRoundData();
        line("Question: $question");
        $answer = prompt('Your answer');
        if ($answer !== $correctAnswer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, $name!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, $name!");
}