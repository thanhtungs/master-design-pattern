<?php

class Sum
{
    public function sum($a, $b)
    {
        $result = $a + $b;
        $sumStorage = new SumStorage();
        $sumStorage->store($result);

        return $result;
    }
}