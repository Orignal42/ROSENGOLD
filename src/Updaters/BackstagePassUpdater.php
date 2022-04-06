<?php

namespace App\Updaters;

use App\ItemUpdater;
use App\item;

class BackstagePassUpdater extends ItemUpdater
{
    public function updateQuality()
    {
        $this->increaseQuality();
        if ($this->item->sell_in < 11) {
            $this->increaseQuality();
        }
        if ($this->item->sell_in < 6) {
            $this->increaseQuality();
        }
    }
    public function updateExpired()
    {
        $this->item->quality = 0;
    }
    // public function resolve($item){
    //     $this->item->name='Backstage passes to a TAFKAL80ETC concert';
    // }
    public static function resolve(Item $item): bool
    {
        return $item->name == "Backstage passes to a TAFKAL80ETC concert";
    }
}
