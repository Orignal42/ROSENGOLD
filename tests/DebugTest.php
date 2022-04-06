<?php
namespace Tests;

use App\Item;
use App\ItemClassifier;
use PHPUnit\Framework\TestCase;


class DebugTest  extends TestCase
{
    public function testClassifier():void
    {
        $itemclassifier = new ItemClassifier();
        $item = new Item('test',24,50);
        $updater = $itemclassifier->categorize($item);
        // pour le mettre à  jour
        $updater->updateQuality();

        self::assertEquals(49, $item->quality);
    }
}