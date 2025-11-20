<?php

namespace Hexlet\Code\Games;

use function Hexlet\Code\runGame;

function makeProgression(int $start, int $step, int $length): array
{
    $progression = [];

    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }

    return $progression;
}

function playProgressionGame(): void
{
    $description = 'What number is missing in the progression?';

    $generateRound = function () {
        $start = rand(1, 20);
        $step = rand(1, 10);

        $length = rand(5, 10);   // минимум 5, максимум 10

        $progression = makeProgression($start, $step, $length);

        $hiddenIndex = rand(0, $length - 1);
        $correct = $progression[$hiddenIndex];

        $progression[$hiddenIndex] = '..';

        $question = implode(' ', $progression);

        return [$question, (string) $correct];
    };

    runGame($description, $generateRound);
}
