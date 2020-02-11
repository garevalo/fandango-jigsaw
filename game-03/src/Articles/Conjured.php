<?php

namespace App\Articles;

use App\Strategy;

class Conjured implements Strategy {

    public function getQuality($quality, $sellIn)
    {

        if ($quality > 0){

            $quality = $quality - 2;

            if ($sellIn <= 0)
                $quality = $quality - 2;
        }

        return $quality;

    }

    public function getSellIn($quality, $sellIn)
    {

        return $sellIn - 1;

    }

}