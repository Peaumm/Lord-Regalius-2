<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Peaumm\Donjon\Monsters\Skeletons;

class Map12 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(1,4);
    }

    public function name() : string {
        return 'Escaliers vers les cachots';
    }

    public function description() : string {
        return 'Un escalier sombre qui descend vers les cachots';
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
        return [new Skeletons()];
    }
}