<?php

$massRice = 1000;
$massWeight = 1;

$numberWeighings = 0;
$weightGained = 0;

/**
 * Finds the number of weighings for a kilogram of rice with a 1 gram weight.
 * @param int $weightGained
 * @param int $numberWeighings
 * @param int $massRice
 * @return array
 */
function findNumberWeighingsForKilogram(int $weightGained, int $numberWeighings, int $massRice): array
{
    for ($i = 1; $i <= 32; $i++) {
        if (count(explode('.', log($i, 2))) === 1) {
            $weightGained += $i;
            $numberWeighings++;
        }
    }

    $weightGained += $weightGained - 1;
    $numberWeighings++;

    while ($weightGained < $massRice) {
        $weightGained *= 2;
        $numberWeighings++;
    }
    return [
        'number of weighings' => $numberWeighings,
        'weight of gained' => $weightGained
    ];
}

print_r(findNumberWeighingsForKilogram($weightGained, $numberWeighings, $massRice));
