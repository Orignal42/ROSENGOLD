<?php

namespace App\Updaters;

use App\ItemUpdater;
use App\Item;

class AgedBrieUpdater extends ItemUpdater
{
    public function updateQuality()
    {
        $this->increaseQuality();
    }

    public function updateExpired()
    {
        $this->increaseQuality();
    }

    // public function resolve($item){
    //     $this->item->name='Aged Brie';
    // }
    public static function resolve(Item $item): bool
    {
        return $item->name == "Aged Brie";
    }
}
