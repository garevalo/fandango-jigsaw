<?php

namespace App\Articles;

use App\Strategy;

class Brie implements Strategy {

    public function getQuality($quality, $sellIn)
    {

        if($quality < 50) {
            $quality = $quality + 1;
        }

        if ($sellIn <= 0 && $quality < 50) {
            $quality = $quality + 1;
        }

        return $quality;
    }

    public function getSellIn($quality, $sellIn)
    {

        return $sellIn - 1;

    }

}