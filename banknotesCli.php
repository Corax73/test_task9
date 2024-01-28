<?php

$nominals = [10, 50, 100, 500, 1000];
$requested1 = 740;
$requested2 = 600;

/**
 * Returns an array of banknote denomination values ​​suitable for dispensing a given amount.
 * @param int $requestedSumm
 * @param array $nominals
 * @return array
 */
function makeBanknotePull(int $requestedSumm, array $nominals): array
{
    $suitableBanknotes = [];
    foreach ($nominals as $nominal) {
        if ($requestedSumm > $nominal) {
            $suitableBanknotes[] = $nominal;
        }
    }
    return $suitableBanknotes;
}

/**
 * Returns an array of the order in which banknotes are issued for a given amount.
 * @param int $requestedSumm
 * @param array $suitableBanknotes
 * @param array $arrIssuanceProcedure
 * @return array
 */
function issuanceProcedure(int $requestedSumm, array $suitableBanknotes, array $arrIssuanceProcedure)
{
    $resp = [];
    if ($requestedSumm % 10 === 0) {
        $suitableBanknotesNew = [];
        $remainder = $requestedSumm;
        if ($requestedSumm >= max($suitableBanknotes)) {
            $remainder = $requestedSumm - max($suitableBanknotes);
            $arrIssuanceProcedure[] = max($suitableBanknotes);
        }
        if ($remainder < max($suitableBanknotes)) {
            foreach ($suitableBanknotes as $suitableBanknot) {
                if ($suitableBanknot != max($suitableBanknotes)) {
                    $suitableBanknotesNew[] = $suitableBanknot;
                }
            }
        }
        if ($remainder != 0) {
            $suitableBanknotes = count($suitableBanknotesNew) > 0 ? $suitableBanknotesNew : $suitableBanknotes;
            $resp = issuanceProcedure($remainder, $suitableBanknotes, $arrIssuanceProcedure);
        } else {
            $resp = $arrIssuanceProcedure;
        }
    } else {
        $resp = ['error' => 'the requested amount is not a multiple of 10'];
    }
    return $resp;
}

$arrIssuanceProcedure = [];
$suitableBanknotes = makeBanknotePull($requested1, $nominals);

var_dump(issuanceProcedure($requested1, $suitableBanknotes, $arrIssuanceProcedure));
