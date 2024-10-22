<?php

namespace PHP\Project\Cli;

use function cli\line;
use function cli\prompt;

function run(): void
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}