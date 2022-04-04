<?php

namespace GildedRose;

final class GildedRose
{
    protected $items = [];

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function updateQuality()
    {
        foreach ($this->items as $item) {
            $this->updateItem($item);
        }
    }


    public function updateItem($items)
    {
        $classifier = new ItemClassifier();

        $myItem = $classifier->categorize($items);

        $myItem->update();
    }
}
