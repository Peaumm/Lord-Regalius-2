<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map07 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(5,0);
    }

    public function name() : string {
        return 'SalleCachée1';
    }

    public function description() : string {
        return '';
    }

    public function position() : Position {
        return $this->position ;
    }

    public function npcs() : array {
        return [];
    }

    public function items() : array {
        return [];
    }

    public function monsters() : array {
        return [];
    }
}