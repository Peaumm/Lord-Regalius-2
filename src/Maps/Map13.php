<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map13 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,1);
    }

    public function name() : string {
        return 'Grand salon';
    }

    public function description() : string {
        return 'Une grande table avec de nombreuses chaises. Le lieu semble souvent utilisé';
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