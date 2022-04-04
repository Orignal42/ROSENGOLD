<?php

namespace App;

class ItemUpdater
{


    // augmenter la qualité
    protected function increaseQuality()
    {
        if ($this->item->quality < 50) {
            $this->item->quality = $this->item->quality + 1;
        }
    }
    // reduire la qualité
    protected function decreaseQuality()
    {
        if ($this->item->quality > 0) {
            $this->item->quality = $this->item->quality - 1;
        }
    }
    // modifier la qualite
    public function updateQuality()
    {
    $this->decreaseQuality();
    }

    // modifier la date
    public function updateSellIn()
    {
        $this->item->sell_in=$this->item->sell_in-1;
    }

    // modifier
    public function update()
    {
        $this->decreaseQuality();
        $this->updateSellIn();
        if ( $this -> item -> sell_in < 0)
        {
            $this->updateExpired();
        }
    }

    // modifier expire
    public function updateExpired()
    {
        $this->item->quality=0;
        $this->decreaseQuality();

    }


    public function __toString()
    {
        return "{$this->item}";
    }
}
