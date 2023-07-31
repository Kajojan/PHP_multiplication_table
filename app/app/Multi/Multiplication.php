<?php


namespace App\Multi;

use App\Models\Tab;


class Multiplication
{


    public function generate(int $dimension)
    {

        $res = (object) array();
        for ($i = 1; $i <= $dimension; $i++) {
            $row = (object) array();
            for ($j = 1; $j <= $dimension; $j++) {
                $row->$j = $i * $j;
            }
            $res->$i = $row;
        }
        return $res;
    }

    public function start(int $dimension)
    {
        if (1 > $dimension  || $dimension > 100) {
            throw new \InvalidArgumentException("wrong dimension");
        } else {
            $tab = Tab::where('number', $dimension)->first();
            if ($tab) {
                return $tab->array;
            } else {
                $res = $this->generate($dimension);
                $newTab = new Tab();
                $newTab->number = $dimension;
                $newTab->array = json_encode($res);
                $newTab->save();
                return json_encode($res);
            }
        }
    }
}
