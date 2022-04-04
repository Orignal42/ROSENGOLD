<?php

namespace GildedRose;

use GildedRose\ItemUpdater;

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
}
