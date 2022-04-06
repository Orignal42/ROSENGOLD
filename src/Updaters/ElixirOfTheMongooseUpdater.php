<?php

namespace App\Updaters;

use App\ItemUpdater;
use App\Item;


class ElixirOfTheMongooseUpdater extends ItemUpdater
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
    //     $this->item->name='Elixir of the Mongoose';
    // }
    public static function resolve(Item $item): bool
    {
        return $item->name == "Elixir of the Mongoose";
    }
}
