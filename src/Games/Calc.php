<?php

namespace Hexlet\Code\Games;

use function Hexlet\Code\runGame;

function playCalcGame()
{
    $description = 'What is the result of the expression?';

    $generateRound = function () {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $operations = ['+', '-', '*'];
        $operation = $operations[array_rand($operations)];

        switch ($operation) {
            case '+':
                $correct = $num1 + $num2;
                break;
            case '-':
                $correct = $num1 - $num2;
                break;
            case '*':
                $correct = $num1 * $num2;
                break;
        }

        $question = "{$num1} {$operation} {$num2}";
        return [$question, (string) $correct];
    };

    runGame($description, $generateRound);
}
