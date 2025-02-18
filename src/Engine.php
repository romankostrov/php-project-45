<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

/**
 * Общая логика для запуска игр.
 *
 * @param string $description Описание игры.
 * @param callable $getRoundData Функция, возвращающая данные для одного раунда игры (вопрос и правильный ответ).
 *
 * @return void
 */
function runGame(string $description, callable $getRoundData): void
{
    line("Welcome to the Brain Games!");
    $userName = prompt("May I have your name?");
    line("Hello, %s!", $userName);
    line($description);

    for ($i = 0; $i < 3; $i++) {
        ['question' => $question, 'correctAnswer' => $correctAnswer] = $getRoundData();

        line("Question: %s", $question);
        $userAnswer = prompt("Your answer");

        if ($userAnswer == $correctAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $userName);
            return;
        }
    }

    line("Congratulations, %s!", $userName);
}
