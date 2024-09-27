<?php

namespace Peaumm\Donjon\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map03 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,0);
    }

    public function name() : string {
        return 'Hall';
    }

    public function description() : string {
        return "Vous êtes dans le hall d'entrée du château";
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
        return [];
    }
}