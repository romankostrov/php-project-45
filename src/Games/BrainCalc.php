<?php

namespace BrainGames\Games\BrainCalc;

use function BrainGames\Engine\runGame;

function getRandomExpression(): array

{
    $operations = ['+', '-', '*'];
    $num1 = rand(1, 20);
    $num2 = rand(1, 20);
    $operation = $operations[array_rand($operations)];
    $expression = "$num1 $operation $num2";
    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
    }
    return ['expression' => $expression, 'result' => (string)$result];
}

function brainCalc(): void
{
    $description = "What is the result of the expression?";
    $getQuestionAnswer = function (): array {
        $data = getRandomExpression();
        return [$data['expression'], $data['result']];
    };
    runGame($description, $getQuestionAnswer);
}
