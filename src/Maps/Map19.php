<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Peaumm\Donjon\Monsters\Skeletons;

class Map19 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(3,3);
    }

    public function name() : string {
        return 'Couloir sombre';
    }

    public function description() : string {
        return 'On y voit quasimment rien... ';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [];
    }

    public function items() : array {
        return [];
    }

    public function monsters() : array {
        return [new Skeletons()];
    }
}