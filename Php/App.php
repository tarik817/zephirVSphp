<?php

namespace Php;


class App
{

    private $bigArray = [];

    /**
     * Routing.
     *
     * @return array
     */
    public function __construct()
    {
        $this->bigArray = $this->fillArray();
        $this->printArray();
    }

    protected function fillArray()
    {
        return array_fill(0, 100000, str_shuffle("abcdef"));
    }

    public function printArray()
    {
        foreach ($this->bigArray as $item) {
            echo $item, "\n";
        }
    }
}