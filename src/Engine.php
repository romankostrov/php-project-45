<?php

namespace BrainGames\Engine;

use BrainGames\Cli\Cli;

class Engine
{
    private $rounds = 3;

    public function play($game)
    {
        $cli = new Cli();
        $userName = $cli->greetUser();

        echo $game->getInstructions();

        $correctAnswersCount = 0;

        while ($correctAnswersCount < $this->rounds) {
            $question = $game->getQuestion();
            echo "Question: $question\n";

            $userAnswer = trim(fgets(STDIN));
            $correctAnswer = $game->getCorrectAnswer();

            if ($userAnswer !== $correctAnswer) {
                echo "'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.\n";
                echo "Let's try again, $userName!\n";
                return;
            }

            echo "Correct!\\n";
            $correctAnswersCount++;
        }

        echo "Congratulations, $userName!\n";
    }
}
