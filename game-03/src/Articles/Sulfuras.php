<?php

namespace App\Articles;

use App\Strategy;

class Sulfuras implements Strategy {

    public function getQuality($quality, $sellIn)
    {

        return $quality;

    }

    public function getSellIn($quality, $sellIn)
    {
        return $sellIn ;
    }

}