<?php
namespace Tests;

use App\ItemClassifier;
use App\Item;
use PHPUnit\Framework\TestCase;


class DebugTest  extends TestCase
{
    public function testClassifier(): void
    {
        $itemClassifier = new ItemClassifier();
        $itemClassifier->resolveUpdaters(new Item("BrieTest", 10, 5));
    }


}