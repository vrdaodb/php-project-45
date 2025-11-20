<?php

namespace Hexlet\Code\Games;

use function Hexlet\Code\runGame;

function playEvenGame()
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';

    $generateRound = function () {
        $number = rand(1, 50);
        $correctAnswer = ($number % 2 === 0) ? 'yes' : 'no';

        return [(string) $number, $correctAnswer];
    };

    runGame($description, $generateRound);
}

