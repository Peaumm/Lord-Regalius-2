<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map18 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(11,11);
    }

    public function name() : string {
        return 'empty';
    }

    public function description() : string {
        return '';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [];
    }

    public function items() : array {
        return $this->items;
    }

    public function monsters() : array {
        return [];
    }
}