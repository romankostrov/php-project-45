<?php

namespace BrainGames\Cli;

class Cli
{
    public function greetUser()
    {
        // Приветствие пользователя
        echo "Welcome to the Brain Games!\n";

        // Запрашиваем имя пользователя
        echo "May I have your name? ";
        $name = trim(fgets(STDIN)); // Считываем имя из stdin

        // Приветствуем пользователя по имени
        echo "Hello, $name!\n";
    }
}