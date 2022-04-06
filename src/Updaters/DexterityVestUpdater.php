<?php

namespace App\Updaters;

use App\ItemUpdater;
use App\Item;
class DexterityVestUpdater extends ItemUpdater
{

    public function updateQuality()
    {

    
        parent::updateQuality();
    }
    public function updateExpired()
    {
        parent::updateExpired();
    }
    // public function resolve($item){
    //     $this->item->name='+5 Dexterity Vest';
    // }

    public static function resolve(Item $item): bool
    {
        return $item->name == "+5 Dexterity Vest";
    }
}
