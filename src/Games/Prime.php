<?php

namespace Hexlet\Code\Games;

use function Hexlet\Code\runGame;

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function playPrimeGame(): void
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $makeRound = function () {
        $num = rand(1, 100);
        $correct = isPrime($num) ? 'yes' : 'no';

        return [(string) $num, $correct];
    };

    runGame($description, $makeRound);
}
