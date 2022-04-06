<?php

namespace App\Updaters;

use App\ItemUpdater;
use App\Item;

class SulfuraUpdater extends ItemUpdater
{

    public function update()
    {
        // rien ne change
    }
    // public function resolve($item){
    //     $this->item->name='Sulfuras, Hand of Ragnaros';
    // }
    public static function resolve(Item $item): bool
    {
        return $item->name == "Sulfuras, Hand of Ragnaros";
    }
}
