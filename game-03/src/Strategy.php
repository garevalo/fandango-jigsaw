<?php


namespace App;


Interface Strategy {

    public function getQuality($quality, $sellIn);
    public function getSellIn($quality, $sellIn);

}