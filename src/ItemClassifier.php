<?php

namespace GildedRose;


class ItemClassifier
{

    const BACKSTAGE_PASSES_TO_A_TAFKAL_80_ETC_CONCERT = 'Backstage passes to a TAFKAL80ETC concert';
    const SULFURAS_HAND_OF_RAGNAROS = 'Sulfuras, Hand of Ragnaros';
    const AGED_BRIE = 'Aged Brie';

    public function categorize($item)
    {
        if ($item->name == self::SULFURAS_HAND_OF_RAGNAROS) {
            $myItem = new SulfuraUpdater($item);
        } else {
            if ($item->name == self::BACKSTAGE_PASSES_TO_A_TAFKAL_80_ETC_CONCERT) {
                $myItem = new BackstagePassUpdater($item);
            } else {

                if ($item->name == self::AGED_BRIE) {
                    $myItem = new AgedBrieUpdater($item);
                } else {
                    if ($this->startsWith($item->name, 'Conjured')) {
                        $myItem = new ConjuredItemCakeUpdater($item);
                    } else {
                        $myItem = new ItemUpdater($item);
                    }
                }
            }
        }
        return $myItem;
    }


    function startsWith($string, $startString)
    {
        $len = strlen($startString);
        return (substr($string, 0, $len) === $startString);
    }
}
