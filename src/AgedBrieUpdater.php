<?php

namespace GildenRose;

use App\ItemUpdater;

class Brie extends ItemUpdater
{
    public function updateQuality()
    {
        $this->increaseQuality();
    }

    public function updateExpired()
    {
        $this->increaseQuality();
    }
}
