<?php

namespace App;

use App\ItemUpdater;

class ItemClassifier
{

    public function readDirectory()
    {
        $array = [];
        $updaters = scandir(__DIR__ . "/Updaters");
        foreach ($updaters as $updater) {
            if ($updater != ".." && $updater != ".") {
                $updaterClass = "\\App\\Updaters\\" . str_replace(".php", "", $updater);
                array_push($array, $updaterClass);
            };
        }
        return $array;
    }

    public function categorize($item)
    {
        $updater = $this->resolveUpdaters($item);
        return new $updater;
    }

    public function resolveUpdaters($item)
    {
        $files = $this->readDirectory();
        foreach ($files as $u) {
            if ($u::resolve($item)) {
                return $u;
            }
        }
        return new ItemUpdater($item);
    }
}