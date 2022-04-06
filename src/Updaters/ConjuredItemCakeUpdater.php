<?php

namespace App\Updaters;

use App\ItemUpdater;
use App\Item;

class ConjuredItemCakeUpdater extends ItemUpdater
{

    public function updateQuality()
    {

        // sinon on peut faire une boucle for pour rappeller la fonction 2 fois
        // for ($i=0;$i<=2;$i++){
        //     parent::updateQuality();
        // }
        parent::updateQuality();
        parent::updateQuality();
    }
    public function updateExpired()
    {
        parent::updateExpired();
        parent::updateExpired();
    }
    // public function resolve($item){
    //     $this->item->name='Conjured Mana Cake ';
    // }
    public static function resolve(Item $item): bool
    {
        return $item->name == "Conjured Mana Cake";
    }
    
}
