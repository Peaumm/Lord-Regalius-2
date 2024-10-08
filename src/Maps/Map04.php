<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Peaumm\Donjon\Monsters\Bats;

class Map04 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(3,0);
    }

    public function name() : string {
        return 'Hall(Est)';
    }

    public function description() : string {
        return 'Vous avancez dans le hall';
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
        return [new Bats()];
    }
}