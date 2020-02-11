<?php

namespace App;

use App\Articles\Backstage;
use App\Articles\Brie;
use App\Articles\Conjured;
use App\Articles\Normal;
use App\Articles\Sulfuras;
use App\Context;

class Article {

    private $context;
    private $quality;
    private $sellIn;

    protected $articles = [
        'normal' => Normal::class,
        'Aged Brie' => Brie::class,
        'Backstage passes to a TAFKAL80ETC concert' => Backstage::class,
        'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
        'Conjured Mana Cake' => Conjured::class
    ];

    public function __construct(string $context, $quality, $sellIn)
    {
        $strategy = new $this->articles[$context];
        $this->context =  new Context($strategy);

        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function quality(){

        return $this->context->getQuality($this->quality, $this->sellIn);

    }

    public function sellIn(){

        return $this->context->getSellIn($this->quality, $this->sellIn);

    }


}