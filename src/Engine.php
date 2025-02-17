<?php

namespace BrainGames\Engine;

require __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame(string $game_name): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, $name!");
    switch ($game_name) {
        case 'BrainEven':
            line('Answer "yes" if the number is even, otherwise answer "no".');
            break;
        case 'BrainCalc':
            line('What is the result of the expression?');
            break;
        case 'BrainGcd':
            line('Find the greatest common divisor of given numbers.');
            break;
        case 'BrainProgression':
            line('What number is missing in the progression?');
            break;
        case 'BrainPrime':
            line('Answer "yes" if given number is prime. Otherwise answer "no".');
    }
    $game_logic = 'Projects\lvl1\run_' . $game_name . '_logic';
    //Цикл-счётчик вопрос-ответ
    for ($i = 0; $i < 3; $i++) {
        [$answer, $right_answer] = eval('return ' . $game_logic . '();');
        if ($answer != $right_answer) {
            line("'$answer' is wrong answer ;(. Correct answer was '$right_answer'.");
            line("Let's try again, $name!");
            exit;
        }
        line('Correct!');
    }
    line("Congratulations, $name!");
}
