<?php

namespace App\Multi;

class Multiplication
{


    public function generate(int $demension): array
    {
        $res = [];
        if (1 > $demension  || $demension > 100) {
            throw new \InvalidArgumentException("wrong dimension");
        } else {

            return $res;
        }
    }
}
