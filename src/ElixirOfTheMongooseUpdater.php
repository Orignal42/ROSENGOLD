<?php
namespace GildedRose;


class ElixirOfTheMongooseUpdater extends ItemUpdater{

    public function updateQuality()
    {

        // sinon on peut faire une boucle for pour rappeller la fonction 2 fois
        // for ($i=0;$i<=2;$i++){
        //     parent::updateQuality();
        // }
        parent::updateQuality();
      
    }
    public function updateExpired()
    {
        parent::updateExpired();
    
    }

}