<?php

namespace Hexlet\Code\Games;

use function Hexlet\Code\runGame;

function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        $tmp = $b;
        $b = $a % $b;
        $a = $tmp;
    }
    return $a;
}

function playGcdGame(): void
{
    $description = 'Find the greatest common divisor of given numbers.';

    $makeRound = function () {
        $a = rand(1, 100);
        $b = rand(1, 100);

        $correct = gcd($a, $b);

        $question = "{$a} {$b}";

        return [$question, (string) $correct];
    };

    runGame($description, $makeRound);
}
