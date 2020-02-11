<?php

namespace App\Articles;

use App\Strategy;

class Backstage implements Strategy {

    public function getQuality($quality, $sellIn)
    {

        if ($quality < 50) {

            $quality = $quality + 1;

            if ($sellIn < 11) {
                $quality = $quality + 1;
            }
            if ($sellIn < 6) {
                $quality = $quality + 1;
            }

        }

        if ($sellIn <= 0) {
            $quality = 0;
        }

        return $quality;

    }

    public function getSellIn($quality, $sellIn)
    {

        return $sellIn - 1;

    }

}