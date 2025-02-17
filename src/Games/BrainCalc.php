<?php

namespace BrainGames\Games;

require __DIR__ . '/../vendor/autoload.php'; // Подключаем автозагрузчик Composer

use function cli\line;
use function cli\prompt;

//Вопрос-ответ по логике игры "Калькулятор". Возвращает ответ юзера и правльный ответ.
function run_BrainCalc_logic(): array
{
    $random_num1 = getRandNum();
    $random_num2 = getRandNum();
    $operation = getRandOperationForCalc();
    line("Question: $random_num1 $operation $random_num2");
    $answer = prompt('Your answer');
    $right_answer = eval('return ' . $random_num1 . $operation . $random_num2 . ';');
    return [$answer, $right_answer];
}