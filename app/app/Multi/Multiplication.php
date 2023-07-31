<?php


namespace App\Multi;

use App\Models\Tab;


class Multiplication
{


    public function generate(int $dimension): array
    {

        $res = [];
        for ($i = 1; $i <= $dimension; $i++) {
            $row = [];
            for ($j = 1; $j <= $dimension; $j++) {
                $row[] = $i * $j;
            }
            $res[] = $row;
        }
        return $res;
    }

    public function start(int $dimension): array
    {
        if (1 > $dimension  || $dimension > 100) {
            throw new \InvalidArgumentException("wrong dimension");
        } else {
            $tab = Tab::where('number', $dimension)->first();
            if ($tab) {
                return json_decode($tab->array, true);
            } else {
                $res = $this->generate($dimension);
                $newTab = new Tab();
                $newTab->number = $dimension;
                $newTab->array = json_encode($res);
                $newTab->save();
                return $res;
            }
        }
    }
}
