<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame(string $taskDescription, callable $makeRound)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($taskDescription);

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$question, $correctAnswer] = $makeRound();

        line("Question: {$question}");
        $answer = prompt('Your answer:');

        if ($answer !== $correctAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }

        line('Correct!');
    }

    line("Congratulations, {$name}!");
}
