<?php

namespace GildedRose;

use GildedRose\ItemUpdater;

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
}
