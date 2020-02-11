<?php

namespace App;

class Context {

    private $strategy;

    public function __construct(Strategy $strategy){
        $this->strategy = $strategy;
    }

    public function getQuality($quality, $sellIn){

        return $this->strategy->getQuality($quality, $sellIn);

    }

    public function getSellIn($quality, $sellIn){

        return $this->strategy->getSellIn($quality, $sellIn);

    }

}

