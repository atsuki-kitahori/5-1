<?php

$spendings = ['apple' => 100, 'orange' => 150];
echo findTotalSpendings($spendings);

function findTotalSpendings($spendings)
{
    $totalSpendings = 0;
    foreach ($spendings as $spending) {
        $totalSpendings += $spending;
    }
    return $totalSpendings;
}
